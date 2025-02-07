<template>
    <header class="bg-gradient-to-r from-gray-900 to-gray-800 text-white shadow-lg">
        <nav class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-extrabold tracking-tight hover:text-blue-300 transition-colors duration-200">
                    <Link href="/" class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838l-2.727 1.17 3.727 1.51a1 1 0 00.788 0l7-3a1 1 0 000-1.84l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zm3.108 7.034a1 1 0 00-.788 1.838l3.727 1.51a1 1 0 00.788 0l7-3a1 1 0 000-1.84l-7-3a1 1 0 00-.788 0l-3.727 1.51z"/>
                        </svg>
                        <span>LaraDesk</span>
                    </Link>
                </div>

                <!-- Mobile menu button -->
                <button
                    @click="isOpen = !isOpen"
                    class="md:hidden rounded-lg focus:outline-none focus:shadow-outline"
                >
                    <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6 transform transition-transform duration-200" :class="{ 'rotate-180': isOpen }">
                        <path
                            v-if="!isOpen"
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        ></path>
                        <path
                            v-if="isOpen"
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        ></path>
                    </svg>
                </button>

                <!-- Desktop menu -->
                <div class="hidden md:block space-x-6">
                    <Link
                        href="/"
                        class="hover:text-blue-400 transition-colors font-medium"
                        :class="{ 'text-blue-400': $page.url === '/' }"
                    >
                        Home
                    </Link>
                    <Link
                        href="/about"
                        class="hover:text-blue-400 transition-colors font-medium"
                        :class="{ 'text-blue-400': $page.url === '/about' }"
                    >
                        About
                    </Link>
                    <Link
                        href="/contact"
                        class="hover:text-blue-400 transition-colors font-medium"
                        :class="{ 'text-blue-400': $page.url === '/contact' }"
                    >
                        Contact
                    </Link>
                    <Link
                        href="/forms"
                        class="hover:text-blue-400 transition-colors font-medium"
                        :class="{ 'text-blue-400': $page.url === '/forms' }"
                    >
                        Forms
                    </Link>
                </div>
            </div>

            <!-- Mobile menu -->
            <div
                :class="isOpen ? 'block' : 'hidden'"
                class="md:hidden mt-4 space-y-4 transform transition-all duration-200 origin-top"
                :style="{ opacity: isOpen ? '1' : '0', transform: isOpen ? 'scaleY(1)' : 'scaleY(0)' }"
            >
                <Link
                    href="/"
                    class="block hover:text-blue-400 transition-colors font-medium"
                    :class="{ 'text-blue-400': $page.url === '/' }"
                >
                    Home
                </Link>
                <Link
                    href="/about"
                    class="block hover:text-blue-400 transition-colors font-medium"
                    :class="{ 'text-blue-400': $page.url === '/about' }"
                >
                    About
                </Link>
                <Link
                    href="/contact"
                    class="block hover:text-blue-400 transition-colors font-medium"
                    :class="{ 'text-blue-400': $page.url === '/contact' }"
                >
                    Contact
                </Link>
                <Link
                    href="/forms"
                    class="block hover:text-blue-400 transition-colors font-medium"
                    :class="{ 'text-blue-400': $page.url === '/forms' }"
                >
                    Forms
                </Link>
            </div>
        </nav>
    </header>
    <div v-if="$page.props.flash?.success" class="container mx-auto px-6 mt-4">
        <div class="p-4 bg-green-100 text-green-700 rounded-lg">
            {{ $page.props.flash.success }}
        </div>
    </div>
    <div v-if="$page.props.flash?.error" class="container mx-auto px-6 mt-4">
        <div class="p-4 bg-red-100 text-red-700 rounded-lg">
            {{ $page.props.flash.error }}
        </div>
    </div>
    <div v-if="$page.props.flash?.warning" class="container mx-auto px-6 mt-4">
        <div class="p-4 bg-yellow-100 text-yellow-700 rounded-lg">
            {{ $page.props.flash.warning }}
        </div>
    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
import { ref } from 'vue';

const isOpen = ref(false);
</script>
