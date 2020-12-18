import Vue from 'vue';
import axios from 'axios';

const app =new Vue({
    el: '#app',

    data: {},

    created() {
        axios.get('/user?ID=12345')
        .then(response => {
            // handle success
            console.log(response.data);
        })
        .catch(error => {
            // handle error
            console.log(error);
        });
       
    }
});