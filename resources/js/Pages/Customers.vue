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
        <div class="mx-2 my-2 flex flex-col">
            <div class=" bg-gray-100">
                filter dan search bar
            </div>
            <div class="h-[500px] bg-gray-100">
                <DataTable  :tableData="customers" :headerColumn="headerColumn"></DataTable>
            </div>
            <div class=" bg-gry">
                ini footer
            </div>
            
        </div>
       
    </AuthenticatedLayout>
</template>
