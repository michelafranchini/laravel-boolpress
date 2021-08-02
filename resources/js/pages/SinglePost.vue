<template>
    <div class="container">
        <h1>{{post.title}}</h1>

        <button v-if="post.category" class="badge badge-info my-2">{{post.category.name}}</button>

        <div v-if="post.tags.length > 0">
            <button class="badge badge-pill badge-dark my-2"
            v-for="tag in post.tags"
            :key="`tag-${tag.id}`">
                {{tag.name}}
            </button>
        </div>

        <p class="my-5">{{post.content}}</p>
    </div>
</template>

<script>
export default {
    name: 'SinglePost', 

    data() {
      return {
        post: null
      }
    }, 
    
    methods: {
      getPosts(slug) {
      axios
        .get(`http://127.0.0.1:8000/api/posts/${slug}`)
        .then (
          result => {
            
            this.post = result.data; 
          }
        )
      }
    }, 

    created() {
      this.getPosts(this.$route.params.slug); 
    }
}
</script>

<style>

</style>