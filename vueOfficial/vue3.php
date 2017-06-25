<?php
/**
 * Created by IntelliJ IDEA.
 * User: walliam
 * Date: 2017/4/27
 * Time: 20:34
 */ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="app-7">
    <ol>
        <!-- 现在我们为每个todo-item提供待办项对象    -->
        <!-- 待办项对象是变量，即其内容可以是动态的 -->
        <todo-item v-for="item in groceryList" v-bind:todo="item"></todo-item>
    </ol>
</div>
<!--<script src="https://unpkg.com/vue"></script>-->
<script src="../lib/vue.js"></script>
<script>
    Vue.component('todo-item', {
        props: ['todo'],
        template: '<li>{{ todo.text }}</li>'
    });
    var app7 = new Vue({
        el: '#app-7',
        data : {
            groceryList: [
                { text: '蔬菜' },
                { text: '奶酪' },
                { text: '随便其他什么人吃的东西' }
            ]
        }
    });
</script>
</body>
</html>
