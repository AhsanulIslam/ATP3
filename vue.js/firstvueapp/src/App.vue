<template>
  <div id="app">
    <!-- {{msg}} -->
    <Todo v-bind:todos="todos" v-on:del-todo="deleteTodo" />
  </div>
</template>


<script>
// import HelloWorld from './components/HelloWorld.vue'
import Todo from './components/Todo.vue';
export default {
  name: 'App',
  components: {
    // HelloWorld
    Todo
  },

  data(){
    return{
      // msg: 'Hello'
      todos:[
        {
          id:1,
          title: "Todo One",
          completed: false
        },
        {
          id:2,
          title: "Todo two",
          completed: true
        },
        {
          id:3,
          title: "Todo three",
          completed: false
        }
      ]
    }
  },
  methods:{
    deleteTodo(id){
      this.todos = this.todos.filter(todo => todo.id !== id)
    }
  }
}
</script>


<style>
#app {
  /* font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px; */
}
</style>
