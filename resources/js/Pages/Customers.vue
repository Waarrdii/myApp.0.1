<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import DataTable from '@/Components/DataTable.vue';

const tableData = defineProps({
    customers: Array,
})

const headerColumn = Object.keys(tableData.customers[0]);
</script>

<template>
        <Head title="Dashboard" />
        <AuthenticatedLayout>
            <div class="h-[calc(100vh-65px)] flex flex-col">
                <DataTable :tableData="customers" :headerColumn="headerColumn"></DataTable>
            </div>
        </AuthenticatedLayout>



</template>
