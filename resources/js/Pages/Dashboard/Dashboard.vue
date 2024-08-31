<!-- resources/js/Pages/Welcome.vue -->
<template>
  <div>
    <h1>Welcome to Inertia.js with Vue.js and Laravel!</h1>
    <p>{{ message }}</p>
  </div>
</template>

<script>
import Layout from '@Layouts/Dashboard/Layout.vue';


export default {
  props: {
    message: String,
  },
  layout: Layout , // Setting AppLayout as the layout for this page
};
</script>
