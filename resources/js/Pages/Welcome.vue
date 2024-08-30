<!-- resources/js/Pages/Welcome.vue -->
<template>
  <div>
    <h1>Welcome to Inertia.js with Vue.js and Laravel!</h1>
    <p>{{ message }}</p>
  </div>
</template>

<script>
export default {
  props: {
    message: String,
  },
};
</script>
