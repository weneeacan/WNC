import { createRouter, createWebHashHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Plate from '../views/Plate.vue'
import Calculator from '../components/Calculator.vue'
import Computed from '../components/Computed.vue'
import Weather from '../components/Weather.vue'
const routes = [
  {
    path: '/',
    name: 'Home',
    // alias: ['/home', '/homepage'], 別名 這些名字都可搜到同一個畫面
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/Calculator',
    name: 'Calculator',
    component: Calculator,
    // redirect: '/about' 重新導向， 點下去後直接導向這個路徑
    // redirect: About
  },
  {
    path: '/Computed',
    name: 'Computed',
    component: Computed,
  },
  {
    path: '/Weather',
    name: 'Weather',
    component: Weather,
  },
  {
    path: '/Plate',
    name: 'Plate',
    component: Plate,
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
