<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- <script src="main.js"></script> -->
    <script src="vue.js"></script>

</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <!-- <div class="container" id="test">
        <div class="form-group">
            <label for="inputDate">Введите дату начала:</label>
            <input type="date" class="form-control" id="start" v-model="min">
        </div>
        <div class="form-group">
            <label for="inputDate">Введите дату конца:</label>
            <input type="date" class="form-control" id="end" v-model="max">
        </div>
        <button class="btn btn-primary" v-on:click="chart">Проверка</button>
        <canvas id="myChart" width="200" height="200"></canvas></div> -->
    <div id="test">
        <form action="/auth" method="post">
            <label for="email">Email</label>
            <input type="email" name="emai" id="email" v-on:change="print_em" v-model:value="email">
            <input type="password" name="password" id="pas" >
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <script>
    //Работаем  с данными и с DOM страницы через vue.js, это дает рекативность и удобный доступ к слушателям onclikc и т.д.
    var data = new Vue({
        el: '#test',
        data:{
            email:"",
            password:"",
        },
        methods: {
            print_em:function (){
                console.log(this.email)
            }
        }
    })
    </script>

</body>

</html>