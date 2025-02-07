<template>
    <MainLayout>
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold mb-8">Contact Form Submissions</h1>

            <div v-if="forms.length === 0" class="bg-white shadow-lg rounded-lg p-8 text-center">
                <p class="text-gray-500 text-lg">No form submissions available</p>
            </div>

            <div v-else class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr v-for="form in forms" :key="form.id">
                                <td class="px-6 py-4 whitespace-nowrap">{{ forms.indexOf(form) + 1 }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ form.name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ form.email }}</td>
                                <td class="px-6 py-4">
                                    <div class="max-w-xs overflow-hidden text-ellipsis">
                                        {{ form.message }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ new Date(form.created_at).toLocaleDateString() }}</td>
                                <td class="px-6 py-4 whitespace-nowrap space-x-2">
                                    <Link
                                        :href="`/contact/${form.id}/edit`"
                                        class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                                    >
                                        Edit
                                    </Link>
                                    <Link
                                        :href="`/contact/${form.id}`"
                                        method="delete"
                                        as="button"
                                        preserve-scroll
                                        class="inline-flex items-center px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                                    >
                                        Delete
                                    </Link>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    forms: {
        type: Array,
        required: true
    }
});
</script>
