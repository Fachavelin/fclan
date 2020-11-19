@extends('layout')


@section('content')
<section class="posts container">
	<article class="post">
		@if($clan->photos->count()==1)
		<figure><img src="{{ $clan->photos->first()->url }}" class="img-responsive"></figure>
		@elseif($clan->photos->count()>1)				
			<div class="gallery-photos" data-masonry='{"itemSelector": ".grid-item", "columnWidth": 464 }'>
			@foreach ( $clan->photos->take(4) as $photo)
			<figure class="grid-item grid-item--height2">
			<img src="{{ url($photo->url) }}" class="img-responsive" alt=""></figure>			
			@endforeach			
			</div>
			@endif
		<div class="content-post">
			<header class="container-flex space-between">
				<div class="date">
					<span class="c-gray-1">{{ $clan->published_at->diffForHumans() }}</span>
				</div>
				<div class="post-category">
					<span class="category text-capitalize">{{ $clan->user->name }}</span>
				</div>
			</header>
			<h1>{{ $clan->titulo }}</h1>
			<div class="divider"></div>
			<h3>Descripcion:</h3>
			<p>{{ $clan->descripcion }}</p>
			<div class="divider"></div>
			<h3>Requisitos:</h3>
			<p>{{ $clan->requisitos }}</p>
			<div class="divider"></div>
			<h3>Edad minima:</h3>
			<p>{{ $clan->edadminima }}</p>
			<h3>Edad maxima:</h3>
			<p>{{ $clan->edadmaxima }}</p>
			<div class="divider"></div>
			<h3>Contactanos:</h3>
			<!--<h3>Discord del clan:</h3>-->
			<a href="{{ $clan->discord }}" class="btn btn-discord" target="_blank">
				<i class="fab fa-discord"></i>
				Servidor de Discord</a>

			<!--<h3>Whatsapp del clan:</h3>-->
			@if ($clan->whatsapp!=null)
				<div class="divider"></div>
				<a href="{{ $clan->whatsapp }}" class="btn btn-whatsapp" target="_blank">
				<i class="fab fa-whatsapp"></i>
				Grupo de Whatsapp</a>
			@endif
		
			<br>
			<div class="tags container-flex">
				@foreach ($clan->juego as $juego )
				<span class="tag c-gray-1 text-capitalize">
				<a href="{{ route('juegos.show',$juego) }}">
				{{ $juego->nombre}}</a></span>
				@endforeach 
			</div>
			<br>
			<div class="tags container-flex">
				@foreach ($clan->pais as $pais )
				<span class="tag c-gray-1 text-capitalize">
				<a href="{{ route('pais.show',$pais) }}">
				{{ $pais->nombre}}</a></span>
				@endforeach
			</div>		
		</div>
	</article>
</section>
	
@endsection


