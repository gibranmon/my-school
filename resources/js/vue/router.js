import { createRouter, createWebHistory } from "vue-router";

import ListStudent from './resources/vue/components/ListStudent.vue';
import SaveStudent from './resources/vue/components/SaveStudent.vue';

const routes = [{
    name: 'listStudent',
    path: '/vue',
    component: ListStudent
},
{
    name: 'saveStudent',
    path: '/vue/save',
    component: SaveStudent
} 
]

const router = createRouter({
    history:  createWebHistory(), 
    routes: routes
})

export default router