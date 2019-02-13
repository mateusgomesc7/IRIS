<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src='js/jquery-1.8.3.min.js'></script>
	<script src='js/jquery.elevateZoom-3.0.8.min.js'></script>
</head>
<body>
    <h1>Basic Zoom Example</h1>
    <img id="zoom_01" src='img/grandeIR.jpg' data-zoom-image="img/grandeIR.png"/>

    <br />
    see more examples online <a href="http://www.elevateweb.co.uk/image-zoom/examples">http://www.elevateweb.co.uk/image-zoom/examples</a>
    <script>
        $('#zoom_01').elevateZoom({
        zoomType: "inner",
    cursor: "crosshair",
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 750
    }); 
    </script>
</body>
</html>