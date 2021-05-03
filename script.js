new Vue({
  el: '#app',
  data: {
    searchReq: "",
    key: "163796f7f9173e8d72c4febb054e60ba", 
    object:{},
    check: false
  },
  methods: {
    getRequest(city){
      this.check = true
      fetch(`https://api.openweathermap.org/data/2.5/weather?q=${city}&units=metric&appid=163796f7f9173e8d72c4febb054e60ba`)
        .then(res =>{
          return(res.json()) 
        })
        .then(this.setResults)
    },
    setResults(results){
      this.object = results
      
      console.log(check)
    }

  }

})


