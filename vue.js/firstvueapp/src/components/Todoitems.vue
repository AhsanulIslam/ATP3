<template>
    <div class="todo_item" v-bind:class="{'is_complete':todo.completed}">
        <p>
            <input type="checkbox" v-on:change="markComplete" >
            {{todo.title}}</p>
    </div>
</template>


<script>
export default {
    name: "Todoitem",
    props: ["todo"],
    methods: {
        markComplete(){
            // console.log(123)
            this.todo.completed = !this.todo.completed;
        }
    }
}
</script>



<style scoped>
        .todo_item{
            background: #908c9c;
            padding: 10px;
            border-bottom : 1px #ccc dotted;
        }

        .is_complete{
            text-decoration: line-through;
        }

        .del{
            background: #ff0000;
            color:#ffff;
            border:none;
            padding: 5px;
            border-radius:50%;
            cursor : pointer;
            float: right;
        }
</style>