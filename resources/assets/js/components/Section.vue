<template>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-8 is-offset-2 has-text-centered portfolio-detail">
                    <h3 class="title is-4"><slot name="title"></slot></h3>
                    <p class="is-6"><slot name="content"></slot></p>
                    <slot name="image"></slot>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {

    }
</script>
