import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import MemoIndex from "./components/MemoIndex.vue";
import MemoCreate from "./components/MemoCreate.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/tasks",
            name: "memo.index",
            component: MemoIndex
        },
        {
            path: "/task/create",
            name: "memo.create",
            component: MemoCreate,
        }
    ]
});

export default router;