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
    path: '/watch/:id',
    name: 'article',
    component: () => import('../views/Article.vue')
  }
]

const router = new VueRouter({
  routes
})

export default router
