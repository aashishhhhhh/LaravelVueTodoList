<template>
      <aside class="sidebar">
        <h2>Admin Dashboard</h2>
        <nav>
          <ul>
            <li><a href="#">Home</a></li>
          <li><router-link to="/profile">profile</router-link></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </nav>
      </aside>
  </template>

  <script>

    export default {
      data() {
        return {
          menu: [
            {
              header: 'Main Navigation',
              hiddenOnCollapse: true,
            },
            {
              href: '/',
              title: 'Dashboard',
              icon: 'fa fa-user',
            },
            {
              href: '/charts',
              title: 'Charts',
              icon: 'fa fa-chart-area',
              child: [
                {
                  href: '/charts/sublink',
                  title: 'Sub Link',
                },
              ],
            },
          ],
        }
      },
    }
  </script>

  <style>

.sidebar {
    width: 250px;
    background-color: #333;
    color: #fff;
    padding: 20px;
    box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
  }

  .sidebar h2 {
    font-size: 1.5em;
    margin-bottom: 20px;
  }

  .sidebar nav ul {
    list-style: none;
    padding: 0;
  }

  .sidebar nav ul li {
    margin: 10px 0;
  }

  .sidebar nav ul li a {
    color: #fff;
    text-decoration: none;
    display: block;
    padding: 10px;
    transition: background 0.3s;
  }

</style>
