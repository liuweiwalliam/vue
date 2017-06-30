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
<div id="app">{{message}}</div>
<div id="app2" v-bind:title="message">
    鼠标悬停几秒钟查看此处动态绑定的提示信息！
</div>
<div id="app3" v-if="seen">
    <p>现在你看到我了</p>
</div>
<div id="app4">
    <ul>
        <li v-for="item in list">{{item}}</li>
    </ul>
    <ol v-for="item in objList">
        <li>{{item.str || item.srt}}</li>
    </ol>
</div>
<!--<script src="https://unpkg.com/vue"></script>-->
<script src="../lib/vue.js"></script>
<script>
    var app = new Vue({
        el: "#app",
        data: {
            message: 'hello vue'
        }
    });
    var app2 = new Vue({
        'el': '#app2',
        'data': {
            'message': 'time=' + new Date()
        }
    });
    var app3 = new Vue({
        el: '#app3',
        data: {seen: true}
    });
    setTimeout(function () {
        app3.seen = false;
    }, 2000);
    var app4 = new Vue({
        el:'#app4',
        data:{
            list:[1,2,3],
            objList:[{'str':'aaa'},{'srt':'bbb'}]
        }
    });
</script>
</body>
</html>
