<template>
    <table>
        
    </table>
    <span class="mx-3" v-for="header in headerColumn" :key="header">
        {{ header }}
    </span>
    <ul>
        <li v-for="item in tableData" :key="item.id">
            <span class="mx-3"  v-for="col in headerColumn" :key="col">
          {{ item[col] }} <!-- Ganti dengan kolom lain yang sesuai -->
          </span>
        </li>
    </ul>
</template>

<script setup>
import { ref, defineProps } from 'vue';

const props = defineProps({
    tableData: Array,
    headerColumn: Array,
})

</script>

<style lang="scss" scoped>

</style>