<template>
<div id="first">
    
    <video id="vid" autoplay loop muted disablePictureInPicture>
        <source src="video/stars.mp4" />
    </video>
     <div id="intro">
        <p style="font-family: Colonna MT; color:aqua; font-size: 120px; position:relative; left:500px;" >Zetra</p>
       
    </div>
    <div id="question">
        <p style="color:white;">Do you want the bot?</p>
        <form> 
            <button style="color:green; font-size:50px; position: relative; left:100px;" v-on:click.prevent="pressyes">Yes</button>
            
            <button style="color:red; left:270px; position: relative; font-size:50px;">No</button>
        </form>
    </div> 
</div>

</template>
<script>
import axios from 'axios'
export default{
    methods:{
        pressyes:async function()
        {
            var result=await axios.post('http://127.0.0.1:8000/api/yespage').then(response => {
        if(response.data.success)
        {
            window.location.href = '/second';
        }
      });
        }
    }
}
</script>

<style scoped>
#vid{
    z-index:-1;
    height:100%;
    width:100%;
    
}
#question{
    position:absolute;
    top:300px;
    left:400px;
    font-size: 50px;
    background-color: transparent;
    border-style:none; 
}
#intro{
    position:absolute;
    top:10px;
    left:100px;
    
    background-color: transparent;
}
#first{
height:97vh;
width:98vw;

}
</style>