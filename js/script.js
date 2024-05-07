
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

    
        axios.get('server.php')
        .then((response) => {
        this.records = response.data
        })
       },

       selectSingleRecord(index){
        const queryParams = {
            recordIndex: index
        };

        axios.get('server.php',{
        params: queryParams
        })
        .then((response) => {
        this.records = response.data
        })
        
        this.selectedRecord = response.data
       }
    },
    mounted() {
    this.getRecordsFromApi()
    }
}).mount('#app');