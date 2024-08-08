<template>
    <div>
      <nav>
        <router-link to="/admin/dashboard">Dashboard</router-link>
        <router-link to="/admin/login">Login</router-link>
      </nav>
      <router-view></router-view>
    </div>
  </template>

  <script>
  export default {
    name: 'profile'
  };
  </script>

  <style scoped>
  /* Add your styles here */
  </style>
