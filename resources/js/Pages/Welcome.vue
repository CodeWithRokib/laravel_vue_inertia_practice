<!-- resources/js/Pages/Welcome.vue -->
<template>
  <div>
    <h1>Welcome to Inertia.js with Vue.js and Laravel!</h1>
    <p>{{ message }}</p>
  </div>
</template>

<script>
import AppLayout from '@Layouts/AppLayout.vue';


export default {
  props: {
    message: String,
  },
  layout: AppLayout , // Setting AppLayout as the layout for this page
};
</script>
