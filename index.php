<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="js/script.js" type="module"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <title>To Do List</title>
</head>

<body>

    <div id="app">

        <div class="container">

            <ul class="list-group list-group-flush">
                <li class="list-group-item" v-for="(task, index) in todoList" :key="index">{{ task.text }}</li>
            </ul>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="New task" aria-label="Recipient's username"
                    aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="addTask">Add</button>
            </div>

        </div>

    </div>

</body>

</html>