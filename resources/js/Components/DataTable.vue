<template>
    <div class="w-full border border-gray-400 overflow-x-scroll h-[500px] scrollbar rounded-lg ">
        <table class="table-fixed text-nowrap">
            <thead>
                <tr>
                    <th @click="sortColumn(header)"  v-show="header !== 'id' && header !== 'created_at' && header !== 'updated_at'" scope="col"
                        class="box-border sticky top-0 px-3 font-bold py-3 text-start text-sm uppercase bg-gray-300 border-none cursor-pointer select-none"
                        v-for="header in headerColumn" :key="header">
                        <div class="flex items-baseline">
                            <span>{{ header }}</span>
                            <div class="relative bg-slate-600">
                                <span class="triangle-up absolute bottom-0 left-0"
                                    :class="sortedColumn === header && ascendingOrder ? 'visible' : 'invisible'"></span>
                                <span class="triangle-down absolute -top-2 left-0"
                                    :class="sortedColumn === header && !ascendingOrder ? 'visible' : 'invisible'"></span>
                            </div>
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="item in tableData" :key="item.id" class="odd:bg-white even:bg-slate-200">
                    <td v-show="col !== 'id' && col !== 'created_at' && col !== 'updated_at'" class="text-sm px-3"
                        v-for="col in headerColumn" :key="col">
                        {{ item[col] }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</template>

<script setup>
import { ref, reactive } from 'vue';

const props = defineProps({
    tableData: Array,
    headerColumn: Array,
})

let ascendingOrder = ref(true);
let sortedColumn = ref(null);
const sortableData = ref(null);

const sortColumn = (header) => {
    ascendingOrder.value = !ascendingOrder.value;
    sortedColumn.value = header;
    sortableData.value = reactive(props.tableData);
    // console.log(ascendingOrder.value);
    // console.log(sortedColumn.value);
    // console.log(sortableData.value);
    sortData();
}

const compareValue = (a,b) => {
    if (typeof a === 'string' && typeof b === 'string'){
        return a.localeCompare(b);
    }else if (typeof a === 'number' && typeof b === 'number'){
        return a - b;
    }
    return 0;
}

const sortData = ()=> {
    sortableData.value.sort((a,b) =>{
        const dataA = a[sortedColumn.value];
        const dataB = b[sortedColumn.value];
        return ascendingOrder.value ? compareValue(dataA, dataB) : compareValue(dataB,dataA);
        // return ascendingOrder.value ? dataA.localeCompare(dataB) : dataB.localeCompare(dataA);
    })
}

</script>

<style lang="scss" scoped>
.triangle-up {
    content: "";
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 8px solid black;
    margin-left: 2px;
}

.triangle-down {
    content: "";
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 8px solid black;
    margin-left: 2px;
}
</style>