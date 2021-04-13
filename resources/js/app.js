
require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'  

Vue.use(VueRouter) 
window.Vue = require('vue').default; 

import JQuery from 'jquery'

    // import './assets/js/jquery.js'
    // import './assets/js/theme.js'

    // import './assets/js/libs/bootstrap.min.js'
    // import './assets/js/libs/jquery.fancybox.js'
    // import './assets/js/libs/jquery-ui.min.js' 
    // import './assets/js/libs/owl.carousel.js'
    // import './assets/js/libs/jquery.mCustomScrollbar.js'
    // import './assets/js/libs/flipclock.js'
   
    // import './assets/js/libs/jquery.elevatezoom.js'
    // import './assets/js/libs/TimeCircles.js'
    // import './assets/js/libs/wow.js'
    // import './assets/js/libs/jquery.jcarousellite.js'


// ROUTES IMPORT
import {routes} from './routes';




// IMPORT ALL CSS AND JS FILE


// import notification class

import Notification from './Helper/Notification';
window.Notification = Notification  

// import sweet alert

import Swal from 'sweetalert2'
import { template } from 'lodash';
window.Swal = Swal ;

const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,

  didOpen: (toast) => {

    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)

  }

});

window.Toast = Toast;

window.Reload = new Vue();

  Vue.prototype.$getData = document.querySelector("meta[name='user-id']").getAttribute('content'); 
  window.auth = document.querySelector("meta[name='user-id']").getAttribute('content'); 
  window.gblData = "something";

  window.cartItem = 0; 


const router = new VueRouter({
    routes ,
    mode: 'history'
  })
 
const app = new Vue({ 
    el: '#app', 
    router,

    created(){
      
    },
                          
    data(){
      return{ 
        
      }
    },
    created(){
      alert('alert'); 
        console.log('App js created function called');
    },

    methods:{
      
    }
});
