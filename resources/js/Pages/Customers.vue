<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import DataTable from '@/Components/DataTable.vue';

const tableData = defineProps({
    customers : Array,
})

const headerColumn = Object.keys(tableData.customers[0]);
</script>

<template>
    <Head title="Dashboard"/>

    <AuthenticatedLayout>
        <div class="w-1/2 border-gray-400 border rounded-lg mx-2 my-2">
            <DataTable  :tableData="customers" :headerColumn="headerColumn"></DataTable>
        </div>
       
    </AuthenticatedLayout>
</template>
