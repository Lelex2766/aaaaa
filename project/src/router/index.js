import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import profile from '@/components/profile'
import loggedin from '@/components/loggedin'
import carting from '@/components/carting'
import login from '@/components/login'
import register from '@/components/register'
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path:'/profile',
      name:'profile',
      component:profile
    },
    {
      path:'/loggedin',
      name:'loggedin',
      component:loggedin
    },
    {
      path:'/carting',
      name:'carting',
      component:carting
    },
    {
      path:'/login',
      name:'login',
      component:login
    },
    {
      path:'/register',
      name:'register',
      component:register
    },
  ]
})
