<template>
    <div class="col-4 my-3">
        <div class="card w-100">
            <div class="card-body">
                <h4 class="card-title">{{ item.title }}</h4>
                <p>{{ item.content }}</p>
                <router-link :to="{name: 'single-post', params: {slug: item.slug}}">Leggi</router-link>
            </div>
        </div>       
    </div>
</template>

<script>
export default {
    name: 'Card',
    props: ['item']
}
</script>

<style>

</style>