<template>
    <div>
        <!-- Include the Navbar -->
        <Navbar />

        <!-- Main Content -->
        <main class="container">
            <slot />
        </main>

        <!-- Include the Footer -->
        <Footer />
    </div>
</template>

<script>
import Navbar from "@/Components/Navbar.vue";
import Footer from "@/Components/Footer.vue";

export default {
    name: "AppLayout",
    components: {
        Navbar,
        Footer,
    },
};
</script>

<style>
/* Global styles can be added here */
body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
        "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji",
        "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
}

/* Other global styles can go here */
</style>
