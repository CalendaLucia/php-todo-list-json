<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP ToDo List JSON</title>
</head>
<body>
  <div id="app">
    <div class="container w75">
      <div class="title text-center">
        <h1 class="text-white">Todo List</h1>
      </div>
      <div class="todos-list mx-auto w-50">
        <ul class="list-group">
          <li class="list-group-item" v-for="todo in todos" :key="todo.id">
            <span :class="{ completed: todo.completed }">{{ todo.text }}</span>
          </li>
        </ul>
      </div>
      <div class="input-group w-50 mx-auto d-flex justify-content-center p-3">
        <input type="text" v-model="newTodoText" class="form-control" placeholder="Inserisci il testo qui">
        <button class="btn btn-outline-warning" type="button" @click="addTodo">Inserisci</button>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
