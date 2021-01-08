<template>
  <div id="app">
    <!-- {{msg}} -->
    <Header />
    <AddTodo v-on:add-todo="addTodo"/>
    <Todo v-bind:todos="todos" v-on:del-todo="deleteTodo" />
  </div>
</template>


<script>
// import HelloWorld from './components/HelloWorld.vue'
import Header from "./components/Layout/Header";
import Todo from './components/Todo';
import AddTodo from './components/AddTodo';
export default {
  name: 'App',
  components: {
    // HelloWorld
    Header,
    Todo,
    AddTodo
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
      this.todos = this.todos.filter(todo => todo.id !== id);
    },
    addTodo(newTodo){
      this.todos = [...this.todos, newTodo];
    }
  }
}
</script>


<style scoped>

      *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
      }

      body{
        font-family: Arial, Helvetica, sans-serif;
        line-height: 1.4;
      }

      .btn{
        display: inline-block;
        border: none;
        background: #555;
        color: #fff;
        padding: 7px 20px;
        cursor: pointer;
      }
      .btn:hover{
        background: #666;
      }
/* #app { */
  /* font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px; */
/* } */
</style>
