<template>
<div>
 

<div class="header">
     <div class="one"><img class="logo" src="./images/nazrin.jpg"> 
        <input type="text" class="searchbar"  placeholder="Search..."><button class='searchbutton'><img src="./images/searchbutton.png" class="loupe"> </button><a href="http://localhost:8080/#/carting" class="cartbutton"><img src="./images/cart.png" class="imgcart">Cart Items</a> <a href="http://localhost:8080/#/profile" class="profile" ><img  src="./images/profile.png" class="imgprofile"></a>
    </div>
    <div class="two">
        <div class="categories">
          <div class="menu">
            <div class="container-fluid">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">Electronics</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Clothings <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Furnitures <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Men</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Women</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Books</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Mobiles</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Tv's</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Computers</a>
                            </li>  
                          </ul>
                        </div>
                      <a class="myButton" href="http://localhost:8080/#/">Logout</a>         
                  </nav>
            </div>
        </div>
    </div>
  </div>
</div>
    <div class="three">
        <div class="categories">
          <div class="menu">
            <div class="container-fluidz">
              <nav class="navbar navbar-expand-lg navbar-light bg-white">
                        <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item">
                              <a class="nav-link" href="#">ACTUAL PAGE (category name) </a>
                            </li>  
                          </ul>
                        </div>
                        <button @click="getNote()"  class="register" >Refresh</button>
                        <button @click="createproduct()" id="create" class="register" >add a product</button>
                      <button class="register">SORT BY</button> 
                             
                  </nav>
            </div>
                  <div id="add" class="add">
                      <input type="text" v-model="nnomdeloffres" placeholder="Title">
                      <input type="text" v-model="ndescriptions" placeholder="description" >
                      <input type="numbers" v-model="nprices" placeholder="price(in euros)">
                      <input type="text" v-model="nlocations" placeholder="location"> 
                      <input type="image"> 
                      <button class="register" @click="sendnew()">confirm</button>
                  </div> 
        </div>
    </div>
  </div>
       <div class="wrapper">
            <div v-for="(nomdeloffre,index) in nomdeloffres" :key="nomdeloffre"  > 
              <img class="picture" src="./images/nazrin.jpg" alt="photo1">
              
              <div class="un">
              <p class="details1">{{nomdeloffre}}:{{descriptions[index]}}<img class="panier" src="./images/cart.png" alt="photo2"><br>
              {{prices[index]}}
              {{locations[index]}}</p>
              <button class="register" @click="modify()">Modify</button>
              <button class="register" @click="deletes(ids[index])">Delete</button>
            <div class="deux">
              <div class="star"> 
                <img class="rating" src="./images/star.png" alt="étoile pleine">
                <img class="rating" src="./images/star.png" alt="étoile pleine">
                <img class="rating" src="./images/star.png" alt="étoile pleine">
                <img class="rating" src="./images/star.png" alt="étoile pleine">
                <img class="rating" src="./images/star.png" alt="étoile pleine">
              </div>
              <div id="modify" class="modify">
                      <input type="text" v-model="n1" placeholder="Title">
                      <input type="text" v-model="n2" placeholder="description" >
                      <input type="numbers" v-model="n3" placeholder="price(in euros)">
                      <input type="text" v-model="n4" placeholder="location"> 
                      <input type="image"> 
                      <button class="register" @click="sendmodified(ids[index])">confirm</button>
                  </div> 

              </div>
              </div>
            </div>
  </div>
 <footer class="footer">

</footer> 
</div>
</template>

<script>
export default {
    data: function() {
        return{
            nomdeloffres:[],
            descriptions:[],
            prices:[],
            locations:[],
            ids:[],
            nnomdeloffres:[],
            ndescriptions:[],
            nprices:[],
            nlocations:[],
            n1:[],
            n2:[],
            n3:[],
            n4:[],
            classindex:["oui0","oui1","oui2","oui3","oui4","oui5","oui6","oui7"],
            limit:8
        }
    },
     
     beforeMount(){
    this.getNote();
   
  },
    computed:{
  computedObj(){
    return this.limit ? this.nomdeloffres.slice(0,this.limit) : this.nomdeloffres
  }
},
    methods: {
      async getNote(){
      const res = await fetch('http://127.0.0.1:8000/api/products');  
      const datas = await res.json();
      this.datas = datas;
      const yes = this.datas
      console.log(yes[0])
      var length = yes.length
      this.nomdeloffres = [];
       
           for (var i = 0; i < length; i++) {
    var hihi=yes[i].title;
    var hihie=yes[i].description;
    this.nomdeloffres.push(hihi)
     this.descriptions.push(hihie)
    var kek = yes[i].price
    var keke = yes[i].location
    this.prices.push(kek)
    this.locations.push(keke)
    var bebe=yes[i].id
    this.ids.push(bebe)
    console.log(yes)
    
}

},
async deletes(te) {
  // POST request using fetch with async/await
  const requestOptions = {
    method: "DELETE",
    headers: { 
      
      "Content-Type": "application/json" },
    body: JSON.stringify({ post: ""+this.modifiedNote,content:[""+this.modifiedInfo] })
  };
  const response = await fetch("http://127.0.0.1:8000/api/products/"+te, requestOptions);
  const data = await response.json();
  this.postId = data.id;
this.getNote()
},
    async sendmodified(te){
const requestOptions = {
    method: "PUT",
    headers: { 
     
      "Content-Type": "application/json" },
    body: JSON.stringify({ title: ""+this.n1,description:""+this.n2,location:""+this.n3,price:""+this.n4  })
  };
  const response = await fetch("http://127.0.0.1:8000/api/products/"+te, requestOptions);
  const data = await response.json();
  this.postId = data.id;
  
  
    },
      createproduct(){
          var x = document.getElementById("add");
          console.log(x)
          if (x.style.display == "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
  

      },
       modify(){
          var x = document.getElementById("modify");
          console.log(x)
          if (x.style.display == "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
  

      },
      async sendnew(){
        const requestOptions = {
    method: "POST",
    headers: { 
      
      "Content-Type": "application/json" },
    body: JSON.stringify({ title: ""+this.nnomdeloffres,description:""+this.ndescriptions,location:""+this.nlocations,price:""+this.nprices })
  };
  const response = await fetch("http://127.0.0.1:8000/api/products/", requestOptions);
  const data = await response.json();
  this.postId = data.id;
  var x = document.getElementById("add");
  
   
    
      },

      class(){
        if (this.classindex>8){
          classindex=classindex+1

        }
        return 'oui'+classindex
      }
    }
    
}
</script>

<style scoped>
.modify{
  display:none;
}
.add{
  display:none;
}
.header{
  background-color: transparent;
}

.searchbar{
  width: 50%;
    margin-bottom: auto;
    margin-top: 20px;
    height: 45px;
    background-color: #fff;
    padding: 15px;
    border-radius: 5px
}

.picture{
  max-width: 65%;
  margin-right: 75px;
}
.details1{
  background-color: transparent;
  text-align: left;
  padding-left: 43px;
}
.details2{
  background-color: teal;
}

.panier {
  width: 10%;
  margin-left: 150px;
}

.star{
  background-color: transparent;
  width: 68%;
}
.rating{
    margin-top:10px;
    margin-left:9px;
    max-width: 11%;
    max-height: 20%;
    display: inline-block;
    padding-right: 19px;
    text-align: left;
}


.deux{
  background-color: transparent;
}

.pagination {
  display: inline-block;
  margin-top: 40px;
  margin-bottom: 10px;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}


.pagination a:hover {
  background-color: lightgray;
  color: red;
  border-radius: 5px;
}
</style>