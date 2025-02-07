<template>
    <MainLayout>
        <div class="text-center">
            <h1 class="text-4xl font-bold mb-6">{{ isEditing ? 'Edit Contact' : 'Contact Us' }}</h1>
            <p v-if="!isEditing" class="text-lg text-gray-600 mb-8">
                Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>
            <div class="max-w-lg mx-auto">
                <form @submit.prevent="submit" class="space-y-6">
                    <div>
                        <input
                            v-model="form.name"
                            type="text"
                            placeholder="Your Name"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                            :class="{ 'border-red-500': form.errors.name }"
                        >
                        <div v-if="form.errors.name" class="text-red-500 text-sm mt-1">{{ form.errors.name }}</div>
                    </div>
                    <div>
                        <input
                            v-model="form.email"
                            type="email"
                            placeholder="Your Email"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                            :class="{ 'border-red-500': form.errors.email }"
                        >
                        <div v-if="form.errors.email" class="text-red-500 text-sm mt-1">{{ form.errors.email }}</div>
                    </div>
                    <div>
                        <textarea
                            v-model="form.message"
                            placeholder="Your Message"
                            rows="5"
                            class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500"
                            :class="{ 'border-red-500': form.errors.message }"
                        ></textarea>
                        <div v-if="form.errors.message" class="text-red-500 text-sm mt-1">{{ form.errors.message }}</div>
                    </div>
                    <div class="flex justify-between gap-4">
                        <Link
                            v-if="isEditing"
                            href="/forms"
                            class="bg-gray-500 text-white py-2 px-4 rounded-lg hover:bg-gray-600 transition-colors"
                        >
                            Cancel
                        </Link>
                        <button
                            type="submit"
                            class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition-colors"
                            :class="{ 'w-auto': isEditing }"
                            :disabled="form.processing"
                        >
                            {{ form.processing ? 'Processing...' : (isEditing ? 'Update Message' : 'Send Message') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from '@/Layouts/MainLayout.vue';
import { Link, useForm } from '@inertiajs/vue3';
import { computed, watch } from 'vue';

const props = defineProps({
    contact: {
        type: Object,
        default: null
    },
    isEditing: {
        type: Boolean,
        default: false
    }
});

const form = useForm({
    name: props.contact?.name ?? '',
    email: props.contact?.email ?? '',
    message: props.contact?.message ?? ''
});

watch(() => props.contact, (newContact) => {
    form.name = newContact?.name ?? '';
    form.email = newContact?.email ?? '';
    form.message = newContact?.message ?? '';
});

const submit = () => {
    if (props.isEditing) {
        form.put(`/contact/${props.contact.id}`);
    } else {
        form.post('/contact', {
            onSuccess: () => form.reset()
        });
    }
};
</script>
