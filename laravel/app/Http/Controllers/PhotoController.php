<?php

namespace App\Http\Controllers;
use App\Http\Requests\PhotoRequest;
use App\Photo;
use App\Comment;
use Auth;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
    	return view('photos.create');
    }

    public function save(PhotoRequest $request) {
    	//dd($request);
    	$photo = new Photo;
    	if($request->hasFile('photo')) {
    		$nphoto    = time().'.'.$request->photo->extension();
	        $directory = public_path('/imgs/');
	        $url       = $directory.$nphoto;
	        $img = Image::make($request->file('photo'));
            $img->resize(500, 500)->insert(public_path('/imgs/watermark.png'), 'top-left', 20, 20)->save($url);
    	}
    	$photo->url = '/imgs/'.$nphoto;
    	$photo->user_id = Auth::user()->id;
    	$photo->description = $request->get('description');

    	if ($photo->save()) {
    		return redirect('home')->with('status', 'La Foto se adiciono con exito!');
    	}

    }

    public function show($id) {
        $photo = Photo::find($id);
        $comments = Comment::where('photo_id', '=', $id)->get();
        return view('photos.show')->with('photo', $photo)->with('comments', $comments);
    }
    public function addComment(Request $request){
        $cm = new Comment;
        $cm->message = $request->get('message');
        $cm->user_id = $request->get('user_id');
        $cm->photo_id = $request->get('photo_id');

        if ($cm->save()) {
            return redirect('photo/'.$cm->photo_id)->with('status', 'El Comentario seadiciono con exito!');
        }
    }
}
