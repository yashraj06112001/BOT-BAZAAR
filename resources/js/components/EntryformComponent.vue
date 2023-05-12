<template>
    <div>
       
        
    <form>
        <div class="form-heading">
            <p>SIGN UP</p>
        </div>
        <label for="name">name</label>
        <input type="text" id="name" class="form-input" v-model="name" placeholder="name" >
        <label for="password">password</label>
        <input  placeholder="password" id="password" class="form-input" v-model="password" type="password">
        <label for="email">email id</label>
        <input type="email" id="email" class="form-input" v-model="email" placeholder="email id">
        <br>
        <br>
        <input type="submit" v-on:click.prevent="addResult" class="form-input" value="submit">
    </form>
    <div id="error">
        <p v-if="checkout" style="color:red;">please enter correct name</p>
    </div>
</div>
</template>
<script>
 export default{
    data:function()
    {
        return {
            name:" ",
            password:12345,
            email:"yash.raj2020@gmail.com",
            checkout:false
        }
    },
    methods:{
        check:function()
        {
           var n= this.name.length;
           for(var i=0;i<n;i++)
           {
            if(this.name[i].charCodeAt(0)>64&&this.name[i].charCodeAt(0)<91)
            {
               this.checkout=false;
               continue;
            }
            else if(this.name[i].charCodeAt(0)===32){
                this.checkout=false;
            }
            else{
                this.checkout=true;
            }
           }
        },
         addResult:async function()
        {
            let result=await axios.post("http://127.0.0.1:8000/api/signin",{
                email:this.email,
                name:this.name,
                password:this.password
            })
        }
    }
 }


</script>
<style>
form{
    color:white;
}
.form-input{
    padding: 10px;
  border-radius: 5px;
  border: none;
  margin-bottom: 10px;
  width: 100%;
}
.form-heading {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  text-align: center;
}

#error{
    color:red;
}
</style>
