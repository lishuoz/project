<template>
	<figure class="image is-48x48 has-text-centered" id="cat" >
		<img :src="imageUrl">
	</figure>
</template>

<script>
	export default {
		created(){
			setTimeout(this.changeImage, 6000);
		},
		data(){
			return {
				imageUrl: '/paw.png'
			}
		},
		methods:{
			changeImage(){
				this.imageUrl = '/pug.png'
			}
		}
	}
</script>

<style>
	#cat{
		position: relative;
		bottom: -60px;
		left: 10%;
		z-index: -1;
		-webkit-animation-name: example; 
		-webkit-animation-duration: 3s; 
		animation-name: example;
		animation-duration: 3s;
		animation-iteration-count: 3;
	}

	/* Safari 4.0 - 8.0 */
	@-webkit-keyframes example {
		0% {bottom: -60px;}
		50% {bottom: -10px;}
		90% {bottom: -10px;}
		100% {bottom: -60px;}
	}

	/* Standard syntax */
	@keyframes example {
		0% {bottom: -60px;}
		50% {bottom: -10px;}
		90% {bottom: -10px;}
		100% {bottom: -60px;}
	}
</style>
