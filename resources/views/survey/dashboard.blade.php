@extends('survey.layouts.app')

@section('content')
<div class="container">
    <div class="row">
    	<div class="col-md-2">
    	</div>
    	<div class="col-lg-4">
			<div class="text-center">
				 <img class="rounded-circle" src="{{ url('img/estadistica.png') }}" alt="Card image cap" width="140" height="140">
				 <h2>Estadísticas</h2>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet gravida ligula. Cras maximus velit sed sollicitudin egestas. Ut.</p>
				 <p>
				 	<a class="btn btn-primary" href="{{ route('statistics') }}">Detalles</a>
				 </p>
			</div>
    	</div><!-- .col-md-4 -->
    	<div class="col-lg-4">
			<div class="text-center">
				 <img class="rounded-circle" src="{{ url('img/encuesta.png') }}" alt="Card image cap" width="140" height="140">
				 <h2>Encuesta</h2>
				 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sit amet gravida ligula. Cras maximus velit sed sollicitudin egestas. Ut.</p>
				 <p>
				 	<a class="btn btn-primary" href="{{ route('survey') }}">Encuestar</a>
				 </p>
			</div>
    	</div><!-- .col-md-4 -->
    	<div class="col-md-2">
    	</div>
    </div>
</div>
@endsection