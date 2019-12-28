import Vue from 'vue'
import VueRouter from 'vue-router'
import Content from '../views/Content.vue'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'content',
    component: Content
  },
  // {
  //   path: '/watch',
  //   name: 'watch',
  //   component: () => import('../views/Watch.vue')
  // },
  {
    path: '/contents/:id',
    name: 'contents',
    component: () => import('../views/Watch.vue')
  }
]

const router = new VueRouter({
  routes
})

export default router
