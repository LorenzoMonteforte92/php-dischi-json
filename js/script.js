
const { createApp } = Vue;

createApp({
    data() {
        return {
           records: [],
           selectedRecord: [],
        };
    },
    methods: {
       getRecordsFromApi(index){

        const queryParams = {
                recordIndex: index
            };

        axios.get('server.php',{
            params: queryParams
        })
        .then((response) => {
        this.records = response.data
        })
       },

       selectSingleRecord(index){
        this.selectedRecord = this.records[index];
       }
    },
    mounted() {
    this.getRecordsFromApi()
    }
}).mount('#app');