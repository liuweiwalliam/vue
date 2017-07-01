<template>
  <div id="app">
    <img src="./assets/logo.png">
    <ul>
      <li  v-for="(value,index) in items">{{item.label}}</li>
    </ul>
  </div>
</template>

<script>
  export default {
    data: function () {
      return {
        tittle: 'this is a todo list',
        items: [
          {label: 'task1', isfinished: false},
          {label: 'task2', isfinished: true},
          {label: 'task3', isfinished: true}]
      }
    },
  }
</script>

<style>
  #app {
    font-family: 'Avenir', Helvetica, Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
  }
</style>
