<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
<body >
  <div class="app" id="app" >
    <header>
      <input 
      type="text" 
      class="searchbox" 
      autocomplete="off" 
      placeholder="Search for a city..." v-model="searchReq" 
      @keypress.Enter="getRequest(searchReq)">
    </header>
    <main v-if="check == true">
     <section class="location">
       <div class="city"> {{object.sys?.country}},{{object.name}}</div>
       <div class="data"> Sunday 23 January 2021</div>
     </section>
     <div class="temperature">{{object.main?.temp}} <span>C°</span></div>
     <div class="weather">{{object.weather?.length && object.weather[0]?.main}}  </div>
     <div class="low-high">{{object.main?.temp_min}} C°/ {{object.main?.temp_max}} C°</div>
    </main>
  </div>

  
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  <script src="script.js"></script>
</body>
</html>
