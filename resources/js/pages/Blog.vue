<template>
    <div class="container my-5 d-flex flex-wrap">
        <Card 
        :item="post"
        v-for="post in posts"
        :key="post.id"/>
    </div>
</template>

<script>
import Card from '../components/Card.vue'; 

export default {
    name: 'Blog',
    components : {
        Card
    }, 
    data() {
      return {
        posts: []
      }
    }, 
    
    methods: {
      getPosts() {
      axios
        .get('http://127.0.0.1:8000/api/posts')
        .then (
          result => {
            console.log(result.data);
            this.posts = result.data; 
          }
        )
      }
    }, 

    created: function() {
      this.getPosts(); 
    }
}
</script>

<style>

</style>