<template>
    <div class="w-full overflow-x-auto h-[500px]">
        <table class="table-fixed text-nowrap">
            <thead>
                <tr>
                    <th v-show="header !== 'id'" scope="col" class="px-3 font-bold py-3 text-start text-sm uppercase bg-gray-50 border-none" v-for="header in headerColumn" :key="header">
                        {{ header }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in tableData" :key="item.id">
                    <td v-show="col !== 'id'" class="text-sm px-3" v-for="col in headerColumn" :key="col" first:hidden>
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