<template>
<div>
 <div class="header">
    <div class="one"><img class="logo" src="./images/nazrin.jpg"> 
        <input type="text" class="searchbar"  placeholder="Search..."><button class='searchbutton'><img src="./images/searchbutton.png" class="loupe"> </button><a href="http://localhost:8080/#/carting" class="cartbutton"><img src="./images/cart.png" class="imgcart">Cart Items</a><a href="http://localhost:8080/#/profile" class="profile"><img src="./images/profile.png" class="imgprofile"></a>
    </div>
    <div class="two">
        <div class="categories">Categories<a class="myButton" href="http://localhost:8080/#/">Logout</a> </div>
    </div>
    
</div>

<div class="carting">
    <img class="swaggy" src="./images/cart (1).png">
   
</div>
<div class="carting">Your articles</div>
    <div class="griding">
            <div class="griding1"><h1 class="t1">Articles</h1></div>
            <div class="griding2"><h1 class="t1">Price</h1></div>
            
    </div>
    <div  class="grid">    
         <div class="grid1"><img class="fit-picture" src="./images/nazrin.jpg" alt="photo1"></div>
         <div class="grid2"><p class="productdetails">Ceci est la première description je vais mettre la définition du mot conne Familier Qui signifie "idiot, sans jugeote, antipathique". Féminin singulier du mot con. Exemple : Non, mais quelle conne, s'écria-t-il, elle a oublié de fermer le portail, si bien que toutes les poules se sont sauvées !</p></div> 
         <div class="grid3"><p class="Price">30£</p></div> 
         <div class="grid4">
            <button type="button" class="bouton"><p class="Remove">Remove</p></button> 
        </div> 
         <div class="grid5"><img class="fit-picture" src="./images/nazrin.jpg" alt="photo1"></div>  
         <div class="grid6"><p class="productdetails">Ceci est la deuxième description je vais mettre la définition du mot  péripatéticienne , nom féminin
    Terme familier pour nommer une prostituée, et ce sur le ton de la plaisanterie. Personne qui a pour métier la prostitution, qui livre son corps aux plaisirs sexuels d'autrui pour gagner de l'argent.
 </p></div> 
         <div class="grid7"><p class="Price">400000000£</p></div> 
         <div class="grid8">
            <button type="button" class="bouton"><p class="Remove">Remove</p></button>
        </div> 
    </div>
<div class="gridingbis">
        <div class="grid1bis"><p class="totalprice">Total Price</p>
        <p class="prix">10000$</p>
        </div>

        <div class="grid2bis"> 
            <button type="button" class="bouton"><p class="order">Order</p></button>
        </div>
</div> 
</div>
</template>
<script>
export default {
    data: function() {
        return{
            nomdeloffres:['offre','superoffre']
        }
    }
    
}
</script>

<style scoped>
.griding1{
    background-color: transparent;
}
.griding2{
    background-color: transparent;
}
.grid1{
    background-color: transparent;
} 
.grid2{
    background-color: transparent;
}
.productdetails{
    font-size: 20px;
}
.grid3{
    background-color: transparent;
}

.grid4{
    background-color: transparent;
}

.grid5{
    background-color: transparent;
} 

.grid6{
    background-color: transparent;
}

.grid7{
    background-color: transparent;
}

.grid8{
    background-color: transparent;
}

.grid1bis{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 20px 2em;
    margin-top: 40px;
     background-color:transparent

}
.t1{
    text-align: center;
    }
.grid2bis{
    width: 0%;
    margin: auto;
    background-color: transparent;
}

.Price
{
   font-size: 30px; 
}

.Remove{
color: Black;
text-align: center;
display: inline-block;
font-size: 16px;
font-size: 18px;
padding: 5px 15px;

}


.totalprice{
    margin-right: 58px;
    font-size: 40px;
}

.prix {
    width: 40%;
    height: 60%;
    box-sizing: border-box;
    text-align: bottom;
    background-color:lightgray;
    border-radius: 10px;
    border: 3.4px solid black;
    margin-left: 250px;
    text-align:left;
    font-size: 30px;
    padding: 15px;

}
.bouton:hover{
    background-color: grey; 
    color: white;
    transition-duration: 0.2s;

}
.order {
    font-size: 18px;
    padding: 5px 50px;
    text-align: center;
}

.fit-picture{
    width: 250px;
}
</style>