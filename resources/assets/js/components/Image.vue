<template>
	<figure class="image">
		<slot name="top"></slot>
		<img :src="src+'.png'" alt="Image"  v-if="src.search('disable') != -1">
		<a v-else :href="src+'-lightbox.png'" data-lity>
			<img :src="src+'.png'" alt="Image">
		</a>
		<div class="image-note">
			<slot name="bottom"></slot>
		</div>
	</figure>
</template>

<script>
	export default {
		props: [ 'src' ],
	}
</script>

<style>
	.image-note p{
		line-height: 24px;
	}
</style>