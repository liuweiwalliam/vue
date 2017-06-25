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
<div id="app5">
    <p>{{message}}</p>
    <button v-on:click="reverse">翻转按钮</button>
</div>
<!---->
<div id="app6">
    <p>{{message}}</p>
    <input type="text" name="" id="" v-model="message">
</div>
<!--<script src="https://unpkg.com/vue"></script>-->
<script src="../lib/vue.js"></script>
<script>
    var app5 = new Vue({
        el: '#app5',
        data: {
            message: '会反转消息',
        },
        methods: {
            reverse: function () {
                this.message = this.message.split("").reverse().join("");
            }
        }
    });
    var app6 = new Vue({
        el:'#app6',
        data:{
            message:'hello Vue'
        }
    });
</script>
</body>
</html>
