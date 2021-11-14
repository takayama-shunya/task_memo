import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(VueRouter);

import MemoIndex from "./components/MemoIndex.vue";
import MemoCreate from "./components/MemoCreate.vue";
import MemoShow from "./components/MemoShow.vue";
// import MemoEdit from "./components/MemoEdit.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/task-index",
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
            name: "memo.show",
            component: MemoShow,
        },
        {
            path: "/task/{id}/edit",
            name: "memo.edit",
            component: MemoEdit,
        },
        {
            path: "/task/{id}/destroy",
            name: "memo.destroy",
            component: MemoDestroy,
        },
    ]
});

export default router;