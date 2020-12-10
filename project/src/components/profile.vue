<template>
<div>
    <div class="header">
    <div class="one"><img class="logo" src="./images/nazrin.jpg"> 
        <input type="text" class="searchbar"  placeholder="Search..."><button class='searchbutton'><img src="./images/searchbutton.png" class="loupe"> </button><a class="cartbutton" href="http://localhost:8080/#/carting"><img src="./images/cart.png" class="imgcart"> Cart Items</a><button class="profile"><img src="./images/profile.png" class="imgprofile"></button>
    </div>
    <div class="two">
        <div class="categories">Categories<a class="myButton" href='http://localhost:8080/#/'>Logout</a> </div>
    </div>
</div>
    <div class="carting"><img class="swaggy" src="./images/profile.png">My profile</div>

        
                <div class="profilepage">Firstname:</div>
                <div class="profilepage"><input class="inputprofile" type="text"></div>
                <div class="profilepage">Lastname:</div>
                <div class="profilepage"><input class="inputprofile" type="text"></div>
                <div class="profilepage">Email:</div>
                <div class="profilepage"><input class="inputprofile" type="text"></div>
                <div class="profilepage">Password:</div>
                <div class="profilepage"><input type="text" class="inputprofile"></div>
                <div class="profilepage"><button >Edit Profile</button><button class="push" >My orders</button><button class="push">Delete</button></div>
                
                 
            

</div>

</template>
<script>
export default {
    mounted() {
            if(!this.authenticated) {
                this.$router.replace({ name: "login" });
            }
        },
    
}
</script>