<template>
  <div id="app">
    
    <router-view/>
  </div>
</template>

<script>
export default {
        name: 'App',
        data() {
            return {
                authenticated: false,
                
                    usernames:["nraboy","dab"],
                    passwords: ["password","dab"]
               
            }
        },
       
        methods: {
            setAuthenticated(status) {
                this.authenticated = status;
            },
            logout() {
                this.authenticated = false;
            }
        }
    }
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  
}
.push{
    margin-left:100px;
}
.inputprofile{
    height:30px;
    width:35%
}
.profilepage{
    
    font-size:40px
}
.gridingbis{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 10px;
    grid-auto-rows: minmax(50px, auto); 
    font-weight:bold; 
    font-size:20px;
    padding-top:20px;
    
}
.grid1bis{
    grid-column:  1/5 ;
    grid-row: 1;
    background-color:purple;
}
.grid2bis{
    grid-column:  1/5 ;
    grid-row: 2;
    background-color:red;
}
.grid{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 10px;
    grid-auto-rows: minmax(200px, auto); 
     
    font-size:15px;
}
.grid1{
    grid-column:  1/1 ;
    grid-row: 1;
    background-color:purple;
}
.grid2{
    grid-column:  2/2 ;
    grid-row: 1;
    background-color:orange;
}
.grid3{
    grid-column:  3/3 ;
    grid-row: 1;
    background-color:crimson;
}
.grid4{
    grid-column:  4/4 ;
    grid-row: 1;
    background-color:rgb(128, 87, 0);
}
.grid5{
    grid-column:  1/1 ;
    grid-row: auto;
    background-color:rgb(13, 0, 128);
}
.grid6{
    grid-column:  2/2 ;
    grid-row: 2;
    background-color:rgb(255, 0, 76);
}
.grid7{
    grid-column:  3/3 ;
    grid-row: 2;
    background-color:rgb(0, 0, 0);
}
.grid8{
    grid-column:  4/4 ;
    grid-row: 2;
    background-color:rgb(144, 93, 160);
}
.griding{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 10px;
    grid-auto-rows: minmax(100px, auto); 
    font-weight:bold; 
    font-size:20px;
    padding-top:20px;
}
.griding1{
    background-color:red;
    grid-column:  1/1 ;
  grid-row: 1;
  text-align:right;
     
}
.griding2{
    background-color:orange;
    grid-column:  3/3 ;
  grid-row: 1;
  text-align:left; 
 
}
.carting{
    text-align:center;
    font-size:30px;
    font-weight:bold;
  
}
.swaggy{
    height:80px;
    
}
.bottom{
text-align:center;
}
.header{
background-color:lightgray;
margin:0;
padding:0;
width:100%;
}
.one{
    padding-top:10px;
    padding-left:40px
}
.searchbar{
margin-left:80px;
padding-right:50%;
border-radius: 30px;
margin-bottom:30px;
}
.searchbar::placeholder {
    padding-left:20px
    }
.searchbutton{
    margin-left: -50px;
    border-radius: 30px;
    width: 50px;
    
    color: white;
    border: 0;
    -webkit-appearance: none;
}
.myButton {
    
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
	background-color:#ededed;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#777777;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
    text-shadow:0px 1px 0px #ffffff;
    margin-left:50%;
}
.myButton:hover {
	background:linear-gradient(to bottom, #dfdfdf 5%, #ededed 100%);
	background-color:#dfdfdf;
}
.myButton:active {
	position:relative;
	top:1px;
}
.loupe{
    height:10px;
}
.imgcart{
    height:15px;
}
.imgprofile{
    height:40px;
    mix-blend-mode: multiply;
}
.cartbutton{
    margin-left:120px;
}
.profile{
    padding: 0;
border: none;
background: none;
margin-left:80px;
}
.logo{
    height: 40px;
    padding-top:10px
}
.categories{
    text-align:center;
}
.register {
    
	box-shadow:inset 0px 1px 0px 0px #ffffff;
	background:linear-gradient(to bottom, #ededed 5%, #dfdfdf 100%);
	background-color:#ededed;
	border-radius:6px;
	border:1px solid #dcdcdc;
	display:inline-block;
	cursor:pointer;
	color:#777777;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
    text-shadow:0px 1px 0px #ffffff;
    
}
.title{
    font-size:35px;
    
}
.wrapper{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 10px;
    grid-auto-rows: minmax(325px, auto);  
}
.oui0{
    background-color:transparent;
    grid-column:  1/1 ;
  grid-row: 1;
}
.oui1{
    background-color:transparent;
    grid-column:  2/2 ;
  grid-row: 1;
}
.oui2{
    background-color:transparent;
    grid-column:  3/3 ;
  grid-row: 1;
}
.category{
    background-color:transparent;
    margin-left:100%
}
.oui3{
    background-color: transparent;
    grid-column:  4/4 ;
  grid-row: 1;
}
.oui4{
    background-color:transparent;
    grid-column:  1/1 ;
  grid-row: 2;
}
.oui5{
    background-color:transparent;
    grid-column:  2/2 ;
  grid-row: 2;
}
.oui6{
    background-color:transparent;
    grid-column:  3/3 ;
  grid-row: 2;
}
.oui7{
    background-color:transparent;
    grid-column:  4/4 ;
  grid-row: 2;
}

</style>
