@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        	<div class="card-header card-header-instalara"> 
        		<i class="fa fa-upload"></i>
        		SUBIR FOTO 
        	</div>
        	<hr>

			@if ($errors->any())
			    <div class="alert alert-danger">
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
			    </div>
			@endif

        	<form action="{{ url('save') }}" method="post" enctype="multipart/form-data">
        		@csrf
        		<div class="form-group">
        			<input type="file" class="form-control d-none" name="photo" accept="image/*">
                    <button type="button" class="btn btn-block btn-instalara btn-upload"> <i class="fa fa-image"></i> Seleccionar Foto</button>
                    <small class="form-text text-muted">La foto debe tener el mismo alto y ancho</small>
        		</div>
        		<div class="form-group">
        			<textarea name="description" cols="30" rows="3" class="form-control" placeholder="Descripción"></textarea>
        		</div>
        		<div class="form-group">
        			<button class="btn btn-instalara"> <i class="fa fa-save"></i> Guardar </button>
        		</div>
        	</form>
        </div>
    </div>
</div>
@endsection