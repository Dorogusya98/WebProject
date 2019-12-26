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
  {
    path: '/watch',
    name: 'watch',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/Watch.vue')
  }
]

const router = new VueRouter({
  routes
})

export default router
