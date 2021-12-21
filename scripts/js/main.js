

const app = new Vue({
    el: '#app',
    data: {
        database: null,
    },
    created() {
        this.getCds();
        
    },

    methods: {
        getCds() {
            console.log('GET DATA');

            axios.get('http://localhost/php-ajax-dischi/scripts/api-users.php')
            .then(response => {
                console.log(response.data);
                this.database = response.data;
            })
            .catch(err => {
                console.log(err);
            });
        },
    },
});