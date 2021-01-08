<template>
    <div>
        <h1>Welcome Todo</h1>

        <div v-bind:key="todo.id" v-for="todo in todos">
            <!-- <h3>{{todo.id}}</h3>
            <h3>{{todo.title}}</h3> -->
            <Todoitem v-bind:todo="todo" />
        </div>

    </div>
</template>

<script>
import Todoitem from './Todoitems.vue';

export default {
    name: "Todo",
    components:{
        Todoitem
    },
    props: ["todos"]
}
</script>

<style scoped>

</style>