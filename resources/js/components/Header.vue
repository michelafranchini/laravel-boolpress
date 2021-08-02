<template>
  <div class="text-center my-3 container ">
      <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center">
          <ul class="d-flex list-inline">
              <li>
                  <router-link :to="{ name: 'home'}">Home</router-link>
              </li>
              <li>
                  <router-link :to="{ name: 'about'}">Chi Siamo</router-link>
              </li>
              <li>
                  <router-link :to="{ name: 'blog'}">Blog</router-link>
              </li>
          </ul>
      </nav>
  </div>
</template>

<script>
export default {
    name: 'Header'
}
</script>

<style lang="scss" scoped>
   a {
       font-size: 20px;
       text-transform: uppercase;
       text-decoration: none;
       margin: 20px;
       padding: 10px;
       color: black;

       &:hover {
           background-color: #ea9f9f;
           color: white;
       }
   }
</style>

