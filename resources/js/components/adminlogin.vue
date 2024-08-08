<template>
    <div class="login-container">
      <h2 class="login-title">Login</h2>
      <form @submit.prevent="handleLogin" class="login-form">
        <div class="form-group">
          <label for="username">Username</label>
          <input v-model="username" type="text" id="username" placeholder="Enter your username" />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input v-model="password" type="password" id="password" placeholder="Enter your password" />
        </div>
        <button type="submit" class="login-button">Login</button>
      </form>
      <p v-if="errorMessage" class="error-message">{{ errorMessage }}</p>
    </div>
  </template>

  <script>
import axios from 'axios';
import AdminDashboard from './AdminDashboard.vue';

  export default {
    name: 'adminlogin',
    data() {
      return {
        username: '',
        password: '',
        errorMessage: '',
        admindashboard:false,
      };
    },
    methods: {
      handleLogin() {
        if (this.username === '' || this.password === '') {
          this.errorMessage = 'Please enter username and password';
        } else {
          axios
            .post('/login', {
              username: this.username,
              password: this.password,
            })
            .then(response => {
                console.log(response)
              if (response.data.status === true) {
                this.$emit('login-success');  // Emit an event on successful login
              } else {
                console.log(response)
                this.errorMessage = 'Invalid username or password';
              }
            })
            .catch(() => {
              this.errorMessage = 'An error occurred. Please try again later.';
            });
        }
      },
    },
  };
  </script>


  <style scoped>

.login-container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  height: 100vh;
  background: #f7f7f7;
  padding: 2rem;
}

.login-title {
  font-size: 2rem;
  margin-bottom: 1rem;
  color: #333;
}

.login-form {
  background: #fff;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
}

.form-group {
  margin-bottom: 1rem;
}

label {
  display: block;
  margin-bottom: 0.5rem;
  font-weight: bold;
  color: #555;
}

input {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #ddd;
  border-radius: 4px;
  font-size: 1rem;
}

input:focus {
  border-color: #007bff;
  outline: none;
  box-shadow: 0 0 0 2px rgba(38, 143, 255, 0.25);
}

button {
  width: 100%;
  padding: 0.75rem;
  background-color: #007bff;
  color: white;
  border: none;
  border-radius: 4px;
  font-size: 1rem;
  cursor: pointer;
  transition: background-color 0.3s;
}

button:hover {
  background-color: #0056b3;
}

.error-message {
  margin-top: 1rem;
  color: #e74c3c;
  font-size: 0.875rem;
}
  </style>
