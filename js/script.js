const app = new Vue({
  el: '#app',

  data:{
    apiUrl: 'http://localhost/php-ajax-dischi/api.php',
    discs:[],
    
  },
  mounted() {
   this.getApi();
  },

  methods:{
    getApi(){
      axios.get(this.apiUrl)
      .then(res =>{
        this.discs = res.data;
        console.log(res.data);
      })
    }
  }
})