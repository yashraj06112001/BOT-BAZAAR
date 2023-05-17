<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Demo Page</title>
  <link rel="stylesheet" href="demopage.css">
  <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
  }
  
  header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
  }
  
  h1 {
    margin: 0;
  }
  
  main {
    padding: 20px;
  }
  
  section {
    background-color: #fff;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    padding: 20px;
  }
  
  h2 {
    margin-top: 0;
  }
  
  .video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 30px;
    height: 0;
    overflow: hidden;
  }
  
  .video-container iframe,  
  .video-container object,  
  .video-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  
  footer {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
  }
  
  </style>
</head>

<body>
  <header>
    <h1>Demo Page</h1>
  </header>
  <main>
    <section>
      <h2>Steps for operating the bot</h2>
      <p>The bot uses OpenCV and CVZone in combination to detect parking spots and also for checking the presence of Car in the spot. The OpenCV module of python is used to read and preprocess the image. The CVZone module is used to detect the vehicle in the mapped parking spot.,<br><br>The parking spots are mapped and stored in Pickle file which can be retrieved multiple times once it has been created and saved.<br><br>Python Modules used :-<ul><li>OpenCV</li><li>CV Zone</li><li>Pickle</li></ul></p>
      <h4>Parking Spot Detection</h4>
      <p>The first step would be deciding the bounds of the box used to map the parking spot in the image. After that we need to left click on each of the parking spots to select the area and save the coordinates in the pickle file. We can delete the wrongly selected places by right clicking in the box.</p>
      <h4>Vehicle Detection using video and image</h4>
      <p>First the marked spots are separated and then we apply Gaussian Blur and adaptive thresholding to the image to reduce the noise which might be there in the image or the video and separate the pixels into the background or foreground. Then using pixel count for the foreground pixels, we determine whether the spot has a vehicle or not.</p>
    </section>
    <section>
      <h2>Demonstration Video</h2>
      <div class="video-container">
        <iframe width="560" height="315" src="{{ asset('video/demo.mp4') }} "frameborder="0" allowfullscreen></iframe>
      </div>
    </section>
  </main>
</body>
</html>
