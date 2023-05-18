<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Button style */
button {
  display: inline-block;
  padding: 10px 20px;
  font-size: 16px;
  text-align: center;
  text-decoration: none;
  background-color: #3498db;
  color: #fff;
  border-radius: 5px;
  box-shadow: 0 3px 0 #2980b9;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
}

/* Button hover state */
button:hover {
  background-color: #2980b9;
  box-shadow: 0 5px 0 #2980b9;
  transform: translateY(-2px);
}

/* Button active state */
button:active {
  background-color: #2980b9;
  box-shadow: none;
  transform: translateY(2px);
}

    </style>
</head>
<body>
    <div id='page'>
    <video id="vid" autoplay loop muted disablePictureInPicture>
            <source src="video/stars.mp4" />
        </video>
    <div id="content">
    <button>sign in</button>
    <button>sign up</button>
    <button>description</button>
    <button>demo</button>
    <button>Homepage</button>
    </div>
    </div>

    
</body>
</html>