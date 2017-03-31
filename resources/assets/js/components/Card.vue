<template>
    <div class="card about-me-item">
        <div class="card-image">
            <figure class="image is-4by3">
                <img :src="src">
            </figure>
        </div>
        <div class="card-content">
            <div class="content">
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['src'],
    }
</script>
