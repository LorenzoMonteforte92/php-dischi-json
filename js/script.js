
const { createApp } = Vue;

createApp({
    data() {
        return {
           records: []
        };
    },
    methods: {
       getRecordsFromApi(){
        axios.get('server.php')
        .then((response) => {
        this.records = response.data
      })
       }
    },
    mounted() {
    this.getRecordsFromApi()
    }
}).mount('#app');