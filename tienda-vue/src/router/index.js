import { createRouter, createWebHistory } from 'vue-router'
//import Home from '../views/Home.vue'
import Inicio from '../views/Inicio.vue'
import Create from '../views/Create.vue'
import Edit from '../views/Edit.vue'

const routes = [
  {
    path: '/',
    name: 'inicio',
    component: Inicio
  },
/*
  {
    path: '/inicio',
    name: 'inicio',
    component:Inicio
  },
  
*/
{
  path: '/create',
  name: 'create',
  component:Create
},
{
  path: '/edit',
  name: 'edit',
  component:Edit
},
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
