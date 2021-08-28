import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import MemoIndex from "./components/MemoIndex.vue";
import MemoCreate from "./components/MemoCreate.vue";
import MemoShow from "./components/MemoShow.vue";

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
        },
        {
            path: "/task/{id}",
            name: "memo.sbow",
            component: MemoShow,
        }
    ]
});

export default router;