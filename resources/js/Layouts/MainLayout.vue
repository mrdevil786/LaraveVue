<template>
    <div class="min-h-screen flex flex-col">
        <Header />

        <main class="flex-grow container mx-auto px-4 py-8">
            <slot />
        </main>

        <Footer />
    </div>
</template>

<script setup>
import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';
</script>
