import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import MemoIndex from "./components/MemoIndex.vue";
// import About from "./components/About.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/test",
            name: "test",
            component: MemoIndex
        },
        // {
        //     path: "/about",
        //     name: "About",
        //     component: About,
        // }
    ]
});

export default router;