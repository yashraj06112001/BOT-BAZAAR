<template>
  <div id="download">
    <video id="vid" autoplay loop muted disablePictureInPicture>
      <source src="video/stars.mp4" />
    </video>
    <div id="file">
        <img src="photo/bot.jfif">
        <div id="link">
            <a href="file/bot.docs" download="bot.docs">Download BOT</a>
        </div>
      
    </div>
  </div>
</template>
<style scoped>
#vid {
  z-index: -1;
  height: 100%;
  width: 100%;
}
#download {
  height: 97vh;
  width: 98vw;
}
#file {
  color: white;
  font-size: 100px;
  position: absolute;
  top: 100px;
  left:100px;
}
a{position:absolute;
    left:100px;
    color:white;
    text-decoration: none;
 
}
img{
    position:absolute;
    left:0px;
    top:100px;
}
#link{
    border-style:groove;
    border-radius: 1em;
    border-color:black;
    background-color: black;
 width:600px;
 height:275px;
align-content: center;
position:absolute;
    left:500px;
    top:100px;
}
</style>