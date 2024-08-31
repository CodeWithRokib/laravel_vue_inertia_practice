<template>
  <div>
    <!-- Topbar -->
    <Topbar />

    <!-- Sidebar -->
    <Sidebar />

    <!-- Main Content -->
    <main>
      <slot />
    </main>

    <!-- Footer (optional) -->
    <footer>
      <!-- Footer content here -->
    </footer>
  </div>
</template>

<script setup>
import Topbar from '@/Components/Topbar.vue';
import Sidebar from '@/Components/Sidebar.vue';


</script>
