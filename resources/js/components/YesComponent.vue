<template>
  <div id="first">
    <video id="vid" autoplay loop muted disablePictureInPicture>
      <source src="video/stars.mp4" />
    </video>
    <p id="zetra">zetra</p>
    <br>
    <i id="bundle">a bundle of bots</i>
    <br>
    <p id="question">do you want bots?</p>
    <form id="fo">
      <button id="yes">yes</button>
      <button id="no">no</button>
    </form>
  </div>
</template>
<style scoped>
#zetra{
  color:white;
  position:relative;
  
  font-family:fantasy;

}
#bundle{
  color:white;
  position:relative;

}
#vid{
    position:absolute;
    z-index:-1;
    height:100%;
    width:100%;
    object-fit:fill;
}
#fo {
  z-index: 1;
  position: absolute;
  left:500px;
  background-color:transparent;
  top:600px;
  
  }
  #question{
    z-index: 1;
    color:white;
    background-color:transparent;
    font-size:5em;
    font-weight: 500;
    position: absolute;
    border-color: black;
    left:400px;
    top:500px;
  }
  #yes{
    color:rgb(247, 7, 55);
    width:100px;
    position:relative;
    height:100px;
    font-size:1em;
    right:200px;
  }
  #no{
    color:rgb(61, 246, 4);
    width:100px;
    position:relative;
    height:100px;
    font-size: 1em;
    left:200px;
  }
 #first{
 
  height:95vh;
  width:98vw;
  border-style: groove;
  border-color:brown;
  overflow:hidden;
 }

</style>