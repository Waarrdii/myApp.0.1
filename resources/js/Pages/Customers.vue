<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
    customers : Array
})



</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
       <ul>
        <li v-for="customer in customers" :key="customer.id">
            {{ customer.id }} | {{ customer.nama }} | {{ customer.alamat }} 
        </li>
       </ul>
    </AuthenticatedLayout>
</template>
