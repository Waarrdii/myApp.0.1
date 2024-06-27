<template>
    <div class="w-full border border-gray-400 overflow-x-scroll h-[500px] scrollbar rounded-lg ">
        <table class="table-fixed text-nowrap">
            <thead>
                <tr>
                    <th v-show="header !== 'id' && header !== 'created_at' && header !== 'updated_at'" scope="col" class="sticky top-0 px-3 font-bold py-3 text-start text-sm uppercase bg-gray-300 border-none" v-for="header in headerColumn" :key="header">
                        {{ header }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in tableData" :key="item.id" class="odd:bg-white even:bg-slate-200">
                    <td v-show="col !== 'id' && col !== 'created_at' && col !== 'updated_at'" class="text-sm px-3" v-for="col in headerColumn" :key="col" >
                        {{ item[col] }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</template>

<script setup>
import { ref, defineProps } from 'vue';

const props = defineProps({
    tableData: Array,
    headerColumn: Array,
})

</script>

<style lang="scss" scoped></style>