import { createApp } from 'vue';
import adminlogin from './components/adminlogin.vue';
import router from "./router";  // Import the router
import sidebar from './components/sidebar.vue';
import admindashboard from './components/AdminDashboard.vue';
import profile from './components/profile.vue';


import VueSidebarMenu from 'vue-sidebar-menu';
import 'vue-sidebar-menu/dist/vue-sidebar-menu.css';

const app = createApp({
  components: {
    adminlogin,
    sidebar,
    admindashboard,
    profile,
  },
  data() {
    return {
      sidebarVisible: false,  // Updated state name
      adminlogin:true,
      admindashboard:false,
      userSession: window.userSession,
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

  mounted() {
    if (this.userSession) {
        this.showSidebar();
    }
}

});

app.use(VueSidebarMenu);
app.use(router).mount('#app');
