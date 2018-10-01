import Vue from 'vue';
import FBSignInButton from 'vue-facebook-signin-button';

import Router from 'vue-router';
import Hello from '@/components/Hello';
import Landing from '@/components/Landing';
import About from '@/components/About';
import Article from '@/components/Article';
import Map from '@/components/Map';
import PopOver from '@/components/PopOver';
import FBlogin from '@/components/FBlogin';
Vue.use(Router);

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/hello',
      name: 'Hello',
      component: Hello,
    },
    {
      path: '/',
      name: 'Landing',
      component: Landing,
    },
    {
      path: '/about',
      name: 'About',
      component: About
    },
    {
      path: '/posts/:postId',
      name: 'Article',
      component: Article
    },
    {
      path: '/bangladesh',
      name: 'Map',
      component: Map
    },
    {
      path: '/popover',
      name: 'PopOver',
      component: PopOver
    },

    {
      path: '*',
      component: {
        template: '<h1>Page not found</h1>'
      }
    }
  ],
});
