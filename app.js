const app = new Vue({
    el: '#root',
    data: {
        cards:[],
    },
    methods: {
        fetchCard() {
            axios.get('http://localhost/php-ajax-dischi/php-ajax-dischi/api/db/api') 
                .then((res) => {
                    const { response } = res.data;
                    this.cards = response;
                    console.log(res);
                })
        }
    },
    created() {
      this.fetchCard()
    },
    mounted() {
    },
})
