@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">

        	<img src="{{ asset($photo->url) }}" alt="{{ $photo->description}}">
        	<br>
        	<p> {{ $photo->description }} </p>
        	<?php 
                 \Carbon\Carbon::setLocale(config('app.locale'));
                  $hoy = \Carbon\Carbon::now();
                  $fc = \Carbon\Carbon::parse($photo->created_at);
            ?>
            <small class="text-muted"> {{ $fc->diffForHumans($hoy) }} </small>
            <hr>
            <strong class="text-muted">
            	<i class="fa fa-comment"></i> {{ count($comments) }} Comentarios: 

            </strong>
            @foreach ($comments as $cm)
            	<p class="text-left">
            		<a class="btn-link-instalara" href="{{ url('profile/'.$cm->user->nickname)}}"> {{ $cm->user->nickname }}</a>: {{$cm->message}}
            	</p>
            @endforeach
            <hr>
            <form action="{{ url('comment/add') }}" method="post">
            	@csrf
            	<input type="hidden" name="user_id" value="{{ Auth::user()->id}}">
            	<input type="hidden" name="photo_id" value="{{ $photo->id}}">
            	<div class="form-group">
            		<textarea class="form-control" name="message" cols="30" rows="3" placeholder="Comentario"></textarea>
            	</div>
            	<div class="form-group">
            		<button type="submit" class="btn btn-instalara">
            			<i class="fa fa-comment"></i>
            			Comentar
            		</button>
            	</div>
            </form>


        </div>
    </div>
</div>
@endsection