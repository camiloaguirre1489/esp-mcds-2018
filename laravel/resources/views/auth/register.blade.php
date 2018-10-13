@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            
                <div class="card-header card-header-instalara">{{ __('REGISTRO DE USUARIOS') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                           

                            
                                <input  type="text" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="fullname" value="{{ old('fullname') }}" placeholder="Nombre Completo" required autofocus>

                                @if ($errors->has('fullname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fullname') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group row">
                           

                            
                                <input  type="text" class="form-control{{ $errors->has('fullname') ? ' is-invalid' : '' }}" name="nickname" value="{{ old('nickname') }}" placeholder="Usuario" required>

                                @if ($errors->has('nickname'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nickname') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group row">
                                                        
                                <input  type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group row">
                            
                            
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group row">
                            

                            
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña"required>
                            
                        </div>

                        <div class="form-group row justify-content-end mb-0">
                            
                                <button type="submit" class="btn btn-instalara">
                                    {{ __('REGISTRARSE') }}
                                </button>
                            
                        </div>
                    </form>
                </div>
            
        </div>
    </div>
</div>
@endsection
