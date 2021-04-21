<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <img  src="c1.jpg"id="image" width="300" height="200" alt="">
        <button onclick="myImage()">click here</button>
        <script>
            var images = ["c1.jpg","c2.jpg", "c3.jpg", "c4.jpg", "c5.jpg", "c6.jpg"]
            function myImage() {
                var x = Math.floor((Math.random()*6));
                console.log(x)
                document.getElementById("image").src = images[x];
                }
        </script>
    </body>
</html>
