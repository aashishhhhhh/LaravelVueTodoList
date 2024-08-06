import { createApp } from 'vue';
import adminlogin from './components/adminlogin.vue';
import sidebar from './components/sidebar.vue';
import admindashboard from './components/AdminDashboard.vue';

import VueSidebarMenu from 'vue-sidebar-menu';
import 'vue-sidebar-menu/dist/vue-sidebar-menu.css';

const app = createApp({
  components: {
    adminlogin,
    sidebar,
    admindashboard
  },
  data() {
    return {
      sidebarVisible: false,  // Updated state name
      adminlogin:true,
      admindashboard:false,
    };
  },
  methods: {
    hideSidebar() {
      this.sidebarVisible = false;
    },
    showSidebar() {
      this.sidebarVisible = true;
      this.adminlogin=false;
      this.admindashboard=true;
    },
  },
});

app.use(VueSidebarMenu);
app.mount('#app');
