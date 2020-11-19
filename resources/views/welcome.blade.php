
  
@extends('layout')

@section('content')



@foreach ($clans as $clan)
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
				<p>{{ $clan->descripcion }}</p>
				<footer class="container-flex space-between">
					<div class="read-more">
						<a href="{{ route('clans.show',$clan) }}" class="text-uppercase c-green">Ver mas</a>
					</div>							
				</footer>
				<br>
				<div class="tags container-flex">
					@foreach ($clan->juego as $juego )
					<span class="tag c-gray-1 text-capitalize">
					<a href="{{ route('juegos.show',$juego) }}">
					{{ $juego->nombre}}</a></span>
					@endforeach 
				</div><br>
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
@endforeach

{{ $clans->links('vendor.pagination.default') }}

@stop