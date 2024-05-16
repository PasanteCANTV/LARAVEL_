@extends('layouts.app')
@section('title', __('Benbenutte'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
            <div class="card-body">
              <h5>  
            @guest
				
				{{ __('Bienvenido!!!') }} !!! </br>
                Por favor contactese con un administrador para obtener las credenciales de usuario.
				{{-- Please contact admin to get your Login Credentials or click "Login" to go to your Dashboard. --}}
                
			@else
					Hola {{ Auth::user()->name }}, Bienvenido de vuelta al servicio documental para los cuartos de voz y data.
            @endif	
				</h5>
            </div>
        </div>
    </div>
</div>
</div>
@endsection