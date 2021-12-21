

const app = new Vue({
    el: '#app',
    data: {
        users: null,
    },
    created() {
        this.getUsers();
        
    },

    methods: {
        getUsers() {
            console.log('GET DATA');

            axios.get('')
        }
    }
});