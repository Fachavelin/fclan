<template>
	<section>
		<section >


        <section v-for="clan in clans" class="posts container" :key="clan">
		<article  class="post">
            
				
		
		<div class="content-post">
			
		<!--<carousel>
				<carousel-slide v-for="photo in clan.photos" class="carousel-slider" >
				<img :src="photo.url" >
				</carousel-slide>
		</carousel>-->
			
			
			<div  class="gallery-photos" data-masonry='{"itemSelector": ".grid-item", "columnWidth": 464 }'>
			<div v-for="photo in clan.photos.slice(0, 3)" :key="photo">
				<figure bind:class="grid-item grid-item--height2">
				<img class="img-responsive" :src="photo.url"></figure>		
			</div>		
			</div>
			<header class="container-flex space-between">
					<div class="date">
						<span class="c-gray-1">{{ clan.published_date }}</span>
					</div>
					<div class="post-category">
						<span class="category text-capitalize">{{clan.user.name}}</span>
					</div>
				</header>
				<h1 v-text="clan.titulo"></h1>
				<div class="divider"></div>
				<!-- <p>$clan->descripcion</p>-->
				<p v-text="clan.descripcion"></p>
				<footer class="container-flex space-between">
					<div class="read-more">
						<router-link :to="{name:'clans_show', params:{id:clan.id}}" class="text-uppercase c-green">Ver mas</router-link>
					</div>						
				</footer>
				<br>
				<div class="tags container-flex">
					<span class="tag c-gray-1 text-capitalize" v-for="juego in clan.juego" :key="juego">
					<a href="#">
					{{ juego.nombre}} </a></span>
				</div><br>
				<div class="tags container-flex">
					<span class="tag c-gray-1 text-capitalize" v-for="pais in clan.pais" :key="pais">
					<a href="#">
					{{ pais.nombre}} </a></span>
				</div>		
			</div>
		</article>
	</section>
			</section>
</section>
</template>

<script>
/*
import Carousel from './components/carousel/Carousel';
import CarouselSlide from './components/carousel/CarouselSlide';*/
export default {
	data(){
		return{
			clans:[]
		}
	},
	mounted(){
		axios.get('/api/clans')
		.then(res => {
			this.clans = res.data.data;
		})
		.catch(err=>{
			console.log(err);
		});
	}
		/*
	,components : {
        Carousel : Carousel,
        CarouselSlide : CarouselSlide,
    }*/
}
	
	
</script>

<!--
<style>
    .app {
        display:flex;
        justify-content: center;
    }
    .carousel {
        position:relative;
        overflow: hidden;
        width:800px;
        height:500px;
        z-index:10;
    }
    .btn {
        padding:5px 10px;
        background-color:rgba(0,0,0,0.5);
        border:1px solid transparent;
        margin:5px 10px;
        color:#FFF;
        height:50px;
        width:50px;
        position:absolute;
        margin-top:-25px;
        z-index:2;
    }
    .btn:hover {
        cursor: pointer;
    }
    .btn:focus{
        outline:none;
    }
    .btn-next {
        top:50%;
        right:0;
    }
    .btn-prev {
        top:50%;
        left:0;
    }
    .carousel-slider {
        position:absolute;
        top:0;
        left:0;
        bottom:0;
        right:0;
    }
    .carousel-slider img {
        width:100%;
        height:100%;
    }
</style>-->
<!--
				<figure v-for="photo in clan.photos.slice(0, 4)"  class="grid-item grid-item--height2">
				<img :src="photo.url" class="img-responsive" alt=""></figure>			-->