<template>
    <div id="login">
        <h1>Login</h1>
        <input type="text" name="username" v-model="input.username" placeholder="Username" />
        <input type="password" name="password" v-model="input.password" placeholder="Password" />
        <button type="button" v-on:click="login()">Login</button>
    </div>
</template>

<script>
    export default {
        name: 'Login',
        data() {
            return {
                input: {
                    username: "",
                    password: ""
                }
            }
        },
       
        methods: {
           async login() {
               const requestOptions = {
    method: "POST",
    headers: { 
      
      "Content-Type": "application/json" },
    body: JSON.stringify({ title: ""+this.nnomdeloffres,description:""+this.ndescriptions,location:""+this.nlocations,price:""+this.nprices })
  };
  const response = await fetch("http://127.0.0.1:8000/api/users/", requestOptions);
  const data = await response.json();
  this.postId = data.id;
  console.log(data)


                
                if(this.input.username != "" && this.input.password != "") {
                    if(this.$parent.usernames.includes(this.input.username) == true && this.$parent.passwords.includes(this.input.password) == true) {
                        console.log("test")
                        this.$emit("authenticated", true);
                        this.$router.replace({ name: "loggedin" });
                    } else {
                        console.log("The username and / or password is incorrect");
                    }
                } else {
                    console.log("A username and password must be present");
                }
            }
        }
    }
</script>

<style scoped>
    #login {
        width: 500px;
        border: 1px solid #CCCCCC;
        background-color: #FFFFFF;
        margin: auto;
        margin-top: 200px;
        padding: 20px;
    }
</style>