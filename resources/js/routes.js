// ALL VUE ROUTES ARE HERE......................

let welcome = require('./components/welcome.vue').default;
let test = require('./components/test.vue').default;

let about = require('./components/about.vue').default;
let privacy = require('./components/privacy.vue').default;



export const routes = [

  //AUTH ROUTE PATH

  { path: '/', component: welcome, name:'welcome' }, 
  { path: '/test', component: test, name: 'test' },
  { path: '/about', component: about, name: 'about' },
  { path: '/privacy', component: privacy, name: 'privacy' },

  ]
