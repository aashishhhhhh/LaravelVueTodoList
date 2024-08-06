<template>
    <div class="dashboard-container">
      <sidebar />
      <main class="main-content">
        <header>
          <h1>Dashboard</h1>
          <p>Welcome to the your todo list</p>
        </header>
        <section class="content">
          <!-- Add your dashboard content here -->
          <div class="card">
            <h3></h3>
            <p>Card content goes here.</p>
          </div>
          <div class="card">
            <h3>Card Title</h3>
            <p>Card content goes here.</p>
          </div>
          <div class="card">
            <h3>Card Title</h3>
            <p>Card content goes here.</p>
          </div>
        </section>
      </main>
    </div>
  </template>

  <script>
  import Sidebar from './sidebar.vue';

  export default {
    name: 'AdminDashboard',
    components: {
      Sidebar
    }
  };
  </script>

  <style scoped>
  .dashboard-container {
    display: flex;
    height: 100vh;
    font-family: Arial, sans-serif;
  }

  /* Add the styles for the sidebar here or keep them in sidebar.vue */
  .main-content {
    flex: 1;
    padding: 20px;
    background-color: #f5f5f5;
  }

  .main-content header {
    margin-bottom: 20px;
  }

  .main-content header h1 {
    margin: 0;
    font-size: 2em;
    color: #333;
  }

  .main-content header p {
    color: #666;
    font-size: 1.2em;
  }

  .content {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
  }

  .card {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    flex: 1 1 calc(33.333% - 20px);
  }

  .card h3 {
    margin-top: 0;
    color: #333;
  }

  .card p {
    color: #666;
  }

  @media (max-width: 768px) {
    .sidebar {
      width: 200px;
    }

    .main-content header h1 {
      font-size: 1.5em;
    }

    .main-content header p {
      font-size: 1em;
    }

    .card {
      flex: 1 1 calc(50% - 20px);
    }
  }

  @media (max-width: 480px) {
    .sidebar {
      width: 100px;
    }

    .main-content header h1 {
      font-size: 1.2em;
    }

    .main-content header p {
      font-size: 0.8em;
    }

    .card {
      flex: 1 1 100%;
    }
  }
  </style>
