const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: './api.php',
            apiAdd:'./create.php',
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
              text: this.newTodoText,
              completed: false
            };
            axios.post(this.apiAdd, { newTodoText: newTodo.text })
             .then(response => {
               // aggiungiamo il nuovo todo alla lista
               this.todos.push(newTodo);
               // puliamo il campo di input
               this.newTodoText = '';
            })
             .catch(error => {
               console.error(error);
           });
          },
    },
    mounted() {
        this.fetchTodos();
    }
}).mount('#app');
