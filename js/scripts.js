const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: './api.php',
            todos: [],
            newTodoText: '',
            
        };
    },
    methods: {
        fetchTodos() {
          axios.get(this.apiUrl)
            .then(response => {
              this.todos = response.data;
            })
            .catch(error => {
              console.error(error);
            });
        },
        addTodo() {
            const newTodo = {
              id: this.todos.length + 1,
              text: this.newTodoText,
              completed: false
            };
            this.todos.push(newTodo);
            this.newTodoText = '';
          },
    },
    mounted() {
        this.fetchTodos();
    }
}).mount('#app');
