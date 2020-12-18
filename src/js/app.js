import Vue from 'vue';
import axios from 'axios';

const app =new Vue({
    el: '#app',

    data: {
        database: [],
    },

    created() {
        axios.get('http://localhost:3000/php-ajax-dischi/partials/script.php')
        .then(response => {
            // handle success
            // console.log(response.data)
            this.database = response.data;

        })
        .catch(error => {
            // handle error
            console.log(error);
        });
       
    }
});