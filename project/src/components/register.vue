<template>
    <div id="login">
        <h1>Register</h1>
        <input type="text" name="username" v-model="input.username" placeholder="Username" required />
         <input type="email" name="email" v-model="input.email" placeholder="Email" required />
        <input type="password" name="password" v-model="input.password" placeholder="Password"  required />
        <input type="password" name="c_password" v-model="input.c_password" placeholder="Confirm your password" required />
        <button type="button" v-on:click="register()">Register</button>
        <div id="message"></div>
    </div>
</template>
<script>
export default {
    
           name: 'register',
        data() {
            return {
                input: {
                    username: "",
                    email:"",
                    password: "",
                    c_password:""
                }
            }
        },
        methods :{
           async register() {
              
               const requestOptions = {
    
    method: "POST",
    headers: { 
      Authorization: "Bearer "+ "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOWMwMmRhZDNjNzRiMDA3ZTdkYmZmYzg3ZmU1MGQxNjgzOGQxZmY2MDZmMjMwYmJlZmYwYzlhZjEzMTNhMzcxOGMzZjNlYmY3YzJhMDdkNjEiLCJpYXQiOjE2MDc2MDU1NDgsIm5iZiI6MTYwNzYwNTU0OCwiZXhwIjoxNjM5MTQxNTQ4LCJzdWIiOiIxOSIsInNjb3BlcyI6W119.BUqoUUgsux-9upw_iLA0jQLUiGjxAT77-D6woUuWWwnGl1TdQn-kFAIee8cgMxYK0AE89g8MTLaTGfxsdVpbJLkkYwhOOPcuDLyP12bPVHwLbcyrXbyu3wZFZZjfQbzrmkNSMOCivsdM9kmYl4jbe6cacFcX-fX17rvbHZ8QCaIBm7GCl_LyKNs-26mQTrtrqnHUty0lt09nM8FaalCSBb1j5mI2oRWJECEB61pFbQ8gY9AZ_HgoZa5Y4sba_HT3fWr-Te6HPFPOOByGdR4rG9Q5VgKoh0aBTAzWJz7qn2E5pR8R4JzlpmkXrl3ZjaMGAERgh5cJkynq8VhnobaUTmi6Y2sR8Xrnz5XkU-UBBBhBWRlJ8YhvR77CaJHiX0bBMT_BDzagtJ6Vl4KO-berZBiBv9Wr_o3aI4smzE292JDjoopfdSc_GkUJjjlWEAbDumMGIkPez_PGgeGoVsxW6f7pYa0tmE64__M5W-ltnshXdED5GZmLAM_iR5f9N2e09oU4aTzIKj5SAApmy1vN7Tx6I7xXn4SrJ0yZRyEuNXAL5VqqqhluEhoW0kGBCLr6pWO6ovmFJVm7V8c0Ux_8gDu1kcjrYH6VhpO5vw_jq4kAGFw-ma9U3tN_zqmUNxahulJB22iDRWA7HzoK-COjTjqD3mu9cwhbvMwYczJZcCI",
      "Content-Type": "application/json" },
    body: JSON.stringify({ name: ""+this.input.username,email:""+this.input.email,password:""+this.input.password,c_password:""+this.input.c_password })
  };
  const response = await fetch("http://127.0.0.1:8000/api/register", requestOptions);
  const data = await response.json();
  console.log(data[0])
  
  
}
        }
}
    

</script>