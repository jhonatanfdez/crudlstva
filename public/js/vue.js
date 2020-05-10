var app = new Vue({
    el: '#app',
    data: {
      datos:[],  
      mensaje: ''
    },
    methods:{
        getDatos(){
            let url = '/api/datosp';
            axios.get(url).then(response=>{
                console.log(response.data);
                this.datos=response.data;
            });
        }

    },
    mounted(){
         this.getDatos();   
    }

})