<template>
    <div>
        <section class="posts container">
	<article class="post">
        <div  class="gallery-photos" data-masonry='{"itemSelector": ".grid-item", "columnWidth": 464 }'>
			<div v-for="photo in clan.photos.slice(0, 3)" :key="photo">
				<figure bind:class="grid-item grid-item--height2">
				<img class="img-responsive" :src="photo.url"></figure>		
			</div>		
		</div>

		<div class="content-post">
			<header class="container-flex space-between">
				<div class="date">
					<span class="c-gray-1">{{ clan.published_date }}</span>
				</div>
				<div class="post-category">
					<span class="category text-capitalize">{{ clan.user.name }}</span>
				</div>
			</header>
			<h1>{{ clan.titulo }}</h1>
			<div class="divider"></div>
			<h3>Descripcion:</h3>
			<p>{{ clan.descripcion }}</p>
			<div class="divider"></div>
			<h3>Requisitos:</h3>
			<p>{{ clan.requisitos }}</p>
			<div class="divider"></div>
			<h3>Edad minima:</h3>
			<p>{{ clan.edadminima }}</p>
			<h3>Edad maxima:</h3>
			<p>{{ clan.edadmaxima }}</p>
			<div class="divider"></div>
			<h3>Contactanos:</h3>
			<!--<h3>Discord del clan:</h3>-->
			<a :href="clan.discord" class="btn btn-discord" target="_blank">
				<i class="fab fa-discord"></i>
				Servidor de Discord</a>
			<!--<p>{{ clan.discord }}</p>-->
			<!--<h3>Whatsapp del clan:</h3>-->
			<div v-if="clan.whatsapp">
				<div class="divider"></div>
				<a :href="clan.whatsapp" class="btn btn-whatsapp" target="_blank">
				<i class="fab fa-whatsapp"></i>
				Grupo de Whatsapp</a>
				<!--<p>{{ clan.whatsapp}}</p>-->
			</div>
			<br>
			<div class="tags container-flex">
                <span class="tag c-gray-1 text-capitalize" v-for="juego in clan.juego" :key="juego">
					<a href="#">
					{{ juego.nombre}} </a>
                </span>
			</div><br>
			<div class="tags container-flex">
                <span class="tag c-gray-1 text-capitalize" v-for="pais in clan.pais" :key="pais">
					<a href="#">
					{{ pais.nombre}} </a>
                </span>
			</div>		
		</div>
	</article>
</section>
	
    </div>
</template>
<script>
export default {
    data(){
        return{
            clan: {}
        }
    },
    mounted(){
        axios.get('/api/clan/'+ this.$route.params.id)
        .then(res => {

			this.clan = res.data;
		})
		.catch(err=>{
			console.log(err);
		});
    }

}
</script>

<style>
.btn {
    font-size: 14px;
    padding: 6px 12px;
	margin-bottom: 0;
	font: sans-serif;

    display: inline-block;
    text-decoration: none;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
	border: 1px solid transparent;
	border-radius: 4px;
	
}
.btn-discord{
  background-color: #7289da;
  color: #fff;
}
.btn-whatsapp{
  background-color: #25d366;
  color: #fff;
}
	
</style>
