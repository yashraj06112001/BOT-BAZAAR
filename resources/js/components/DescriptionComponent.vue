<template>
    <div id="description">
    <h1 style="color:white">Description about webpage</h1>
    <video id="vid" autoplay loop muted disablePictureInPicture>
            <source src="video/stars.mp4" />
        </video>
        <div id="content">
        <header>
    <h1>Description Page</h1>
  </header>
  <main>
    <section>
      <h2 class="line1">Motivation</h2>
      <p class="line2">The main incentive that drove us to do so was the need to find parking for our cars. We were thinking that even after so much advancement in technology, we still had to deal with the stress of parking, but we knew that technology could solve this problem as well, and this motivated us to build a parking guidance system, and after that, we were thinking about what other activities and problems we could solve using bots and technology, and all of these motivations led us to build this project.</p>
    </section>
    <section>
      <h2 class="line1">Objective</h2>
      <p class="line2">Our major goal is to learn the challenges that people experience on a daily basis and, if possible, create a bot that can fix the problem. We also want to make these bots simple to use, with a place on the internet where everyone can download bots to help them with daily chores like parking and security (similar to a play store, but we'll use a website). The Automatic Parking Guidance system is the bot that we will be creating. Our goal with this bot is to create a low-cost approach to make parking lots easier to navigate and use. As a result, the user's entire parking experience will be more convenient.</p>
    </section>
  </main>
  <footer>
    <p></p>
  </footer>
</div>
</div>
</template>
<script>


</script>
<style scoped>
#vid {
    height: 100%;
    width: 100%;
    z-index: -1;
    object-fit: fill;
}
#descrition{
    height:97vh;
    width: 99vw;
    /* overflow:hidden; */
    border-style: groove;
    border-color:black;
}


  .line1{
    font-size: 2em;
  }
  .line2{
    font-size: 1em;
  }
  header {
    background-color: transparent;
    color: #fff;
    padding: 20px;
    text-align: center;
  }
  
  /* h1 {
    margin: 0;
    color:white;
  }
   */
  /* main {
    padding: 20px;
    color:white;
  } */
  
  section {
    background-color: transparent;
    
    margin-bottom: 20px;
    padding: 20px;
    color:white;
  }
  
  /* h2 {
    margin-top: 0;
    color:white;
  } */
  
  footer {
    background-color: transparent;
    color: #fff;
    padding: 10px;
    text-align: center;
  }
  #content{
    position:absolute;
    top:100px;
    left:200px;

  }
</style>