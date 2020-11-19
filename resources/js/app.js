
require('./bootstrap');


import Vue from 'vue';
import Router from 'vue-router';


import Home from './views/Home'
import Nosotros from './views/Nosotros'
import Contacto from './views/Contacto'
import clansShow from './views/clansShow'
import cuatro from './views/404'

import { required } from 'vuelidate/lib/validators';


Vue.use(Router);


const router = new Router({
    routes:[
        {
            path: '/',
            component: Home
        },
        {
            path: '/nosotros',
            component: Nosotros
        },
        {
            path: '/contacto',
            name:'contacto',
            component: Contacto
        },
        {
            path:'clan/:id',
            name:'clans_show',
            component:clansShow
        },
        {
            path:'*',
            component: cuatro
        }
    ]
});

const app = new Vue({
    el: '#app',
    router:router,

});









/*
import { required, minLength, maxLength,between } from 'vuelidate/lib/validators'
const app = new Vue({
    el: '#crearUser',
    data:{
        name:'',
        emai:'',
        password:'',
        mensajesName: [
            "El campo nombre es obligatorio",
            "El nombre no puede ser menor a 3 caracteres",
            "El nombre no puede ser mayor a 10 caracteres"
        ],
        nameValido:false
    },
    methods:{

    }
});
*/