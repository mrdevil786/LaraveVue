<template>
    <MainLayout>
        <div class="text-center px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-12 sm:py-16 mb-8 sm:mb-12 rounded-lg">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mb-4">About TechSolutions India</h1>
                <p class="text-lg sm:text-xl">Your Trusted Technology Partner</p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="mb-12">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-6">Our Story</h2>
                    <p class="text-gray-600 text-lg mb-6">
                        Founded in 2008, TechSolutions India has grown from a small startup to one of India's leading IT solutions providers. Our journey has been marked by continuous innovation, dedication to excellence, and a deep commitment to our clients' success.
                    </p>
                    <p class="text-gray-600 text-lg">
                        Today, we serve clients across the globe, delivering cutting-edge technology solutions that drive business growth and digital transformation.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <h3 class="text-xl font-bold mb-4 text-blue-600">Our Mission</h3>
                        <p class="text-gray-600">To empower businesses through innovative technology solutions, enabling their digital transformation journey with expertise and excellence.</p>
                    </div>
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <h3 class="text-xl font-bold mb-4 text-blue-600">Our Vision</h3>
                        <p class="text-gray-600">To be the most trusted technology partner for businesses worldwide, known for our innovation, reliability, and customer-centric approach.</p>
                    </div>
                </div>

                <div class="bg-gray-50 p-8 rounded-xl mb-12">
                    <h2 class="text-2xl sm:text-3xl font-bold mb-8">Our Values</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="font-bold mb-2">Excellence</h3>
                            <p class="text-gray-600">Striving for the highest quality in everything we do</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="font-bold mb-2">Innovation</h3>
                            <p class="text-gray-600">Embracing new technologies and creative solutions</p>
                        </div>
                        <div class="text-center">
                            <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            <h3 class="font-bold mb-2">Collaboration</h3>
                            <p class="text-gray-600">Working together to achieve shared success</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
</script>
