<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #message {
            color: white;
            position: absolute;
            left: 200px;

            font-size: larger;
        }

        html,
        body {
            margin: 0;
            padding: 0;
        }

        #vid {
            z-index: -1;
            height: 100%;
            width: 100%;
            object-fit: cover;
            position: absolute;

        }

        body {
            height: 100vh;
            width: 100vw;
        }
    </style>
</head>

<body>

    <video id="vid" autoplay loop muted disablePictureInPicture>
        <source src="video/stars.mp4" />
    </video>
    <p id="message">please enterwrite credentials or if not a member then please first signup the </p>

</body>

</html>