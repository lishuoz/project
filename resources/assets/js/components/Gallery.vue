<template>
    <div class="column is-o is-one-third">
        <a :href="href">
            <div class="card-image">
                <div class="overlay" v-if="showOverlay" @mouseleave="showOverlay = false">
                    <div class="overlay-content">
                        <p class="title is-4"><strong><slot name="title"></slot></strong></p>
                        <p class="subtitle is-6"><slot name="client"></slot></p>
                    </div>
                </div>
                <figure class="image is-4by3" @mouseover="showOverlay = true"> 
                    <img class="gallery-image" :src="src" alt="Image" >
                </figure>
            </div>
        </a>
    </div>
</template>

<script>
    export default {
        props: ['src', 'href'],
        data(){
            return {
                showOverlay: false
            }
        },
    }
</script>

<style>
    .gallery{
        padding: 3rem !important;
    }
    .overlay{
        position: absolute;
        left: 0;
        width: 100%;
        background-color: rgba(255,255,255,0.96);
        width: 100%;
        height: 100%;
        z-index: 1;
    }
    .overlay-content{
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
  }
  .overlay-content .title{
    color: #444;
    font-size: 15px;
}
.overlay-content .subtitle{
    color: #777;
    font-size: 13px;
}
.gallery-image{
    border-radius: 4px;
    padding: 10px;
    background-color: white;
}
</style>