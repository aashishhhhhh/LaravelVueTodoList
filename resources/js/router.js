import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/profile",
        component: () => import("./components/profile.vue"),
    },
];

 const router= createRouter({
    history: createWebHistory(),
    routes,
});
export default router;
