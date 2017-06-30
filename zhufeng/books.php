<?php
/**
 * Created by IntelliJ IDEA.
 * User: walliam
 * Date: 2017/6/23
 * Time: 22:20
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>books</title>
    <link rel="stylesheet" href="../node_modules/_bootstrap@3.3.7@bootstrap/dist/css/bootstrap.css">
</head>
<body>
<div id="test" class="container" style="margin-top:20px;">
    <table class="table table-bordered">
        <tr>
            <th>书名</th>
            <th>价格</th>
            <th>数量</th>
            <th>库存</th>
            <th>小计</th>
            <th>删除</th>
        </tr>
        <tr v-for="book in books">
            <td>{{book.name}}</td>
            <td>{{book.price}}</td>
<!--            <td><input type="text" v-model="book.count"></td>-->
<!--            <td v-text="book.count"></td>-->
<!--            <td>{{(book.num?book.num:0)*book.price}}</td>-->
            <td></td>
        </tr>
    </table>
</div>
<script src="../node_modules/_vue@2.3.4@vue/dist/vue.js"></script>
<script>
    var Books = new Vue({
        el: '#test',
        data: {
            books: [
                {name: 'js', price: 1, count: 1},
                {name: 'jq', price: 2, count: 2},
                {name: 'vue', price: 3, count: 3},
                {name: 'ng', price: 4, count: 4},
                {name: 'react', price: 5, count: 5}
            ]
        }
    });
</script>
</body>
</html>