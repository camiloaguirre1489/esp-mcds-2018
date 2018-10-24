@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ asset($user->photo) }}" width="120px">
                </div>
                <div class="col-md-10 mt-4">
                    <strong>{{ $user->fullname }}</strong>
                    <br>
                    <a href="{{ url('profile/'.$user->nickname) }}" class="btn-link-instalara">{{ $user->nickname }}</a>
                    <br>
                    {{ $user->email }}
                </div>
            </div>
            <hr>
            <br>
            <div class="row justify-content-center">
            @forelse($photos as $photo)
                <div class="col-md-4">
                    @auth
                        <a href="{{ url('photo/'.$photo->id) }}">
                            <img class="card-img-top" src="{{ asset($photo->url) }}" alt="Card image cap">
                        </a>
                    @else
                        <img class="card-img-top" src="{{ asset($photo->url) }}" alt="Card image cap">
                    @endauth
                  
                  <div class="card-body bg-white">
                    <p class="card-text">
                        <a href="#" class="btn btn-sm btn-instalara"> <i class="fa fa-heart"></i> </a>
                        <a href="#" class="btn btn-sm btn-instalara"> <i class="fa fa-comment"></i> </a>
                        <p>{{ $photo->description }}</p>
                        <?php 
                            \Carbon\Carbon::setLocale(config('app.locale'));
                            $hoy = \Carbon\Carbon::now();
                            $fc = \Carbon\Carbon::parse($photo->created_at);
                        ?>
                        <small class="text-muted"> {{ $fc->diffForHumans($hoy) }} </small>
                    </p>
                    
                  </div>
                </div>
            @empty
                <div class="alert alert-dark">Aun no ha publicado fotos!</div>
            @endforelse
            </div>

        </div>
    </div>
</div>
@endsection
