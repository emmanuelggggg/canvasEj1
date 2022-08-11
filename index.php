<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>canvas</title>
</head>
<style>
    canvas {
        
        background-color: tomato;
        
    }
</style>
<body>
    <canvas id="mycanvas" width="500" height="500">
        tu navegadore no soporta canvas
    </canvas>

    <script type ="text/javascript">
        var cv  =document.getElementById('mycanvas');
        var ctx  = cv.getContext('2d');
        // ctx.strokeStyle ="white";
        // ctx.strokeRect(50,50,150,150);

        // ctx.strokeStyle ="red";
        // ctx.strokeRect(150,150,150,150);
        // ctx.fillStyle ="red";
        // ctx.fillRect(10,10,55,50)

        // ctx.fillStyle ="rgba(0,0,200,0.5)";
        // ctx.fillRect(50,50,55,50);

        // ctx.fillStyle ="rgba(100,0,200,0.5)";
        // ctx.fillRect(90,90,55,50);

        // ctx.moveTo(400,100);
        // ctx.lineTo(250,250);
        // ctx.stroke();

        // ctx.moveTo(500,200);
        // ctx.lineTo(100,50);
        // ctx.lineTo(300,300);
        // ctx.lineTo(500,200);
        // ctx.stroke();
        // ctx.fill();
        // ctx.beginPath();
        // ctx.arc(100,100,50,0,2*Math.PI);
        // ctx.stroke();

        // ctx.beginPath();
        // ctx.arc(200,200,50,0,2*Math.PI);
        // ctx.fillStyle="rgba(100,0,200,0.5)";
        // ctx.fill();

        ctx.font ="30px Arial";
        ctx.fillText("Jesus Emmanuel",150,30);

        ctx.strokeText("Jesus Emmanuel",150,80);
    </script>
</body>
</html>