

const app = new Vue({
    el: '#app',
    data: {
        albums: null,
    },
    created() {
        this.getCds();     
    },

    methods: {
        getCds() {
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