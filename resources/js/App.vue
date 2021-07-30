<template>
  <div class="container">
    <Header/>

    <main>
      <div class="d-flex flex-wrap">
        <Card 
        v-for="post in posts"
        :key="post.id"
        :item="post"
        />
      </div>
    </main>

  </div>
</template>

<script>
import Header from './components/Header';
import Card from './components/Card'; 

export default {
    name: 'App',
    components: {
       Header,
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

<style lang="scss">
</style>