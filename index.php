 y<!DOCTYPE html>
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


        <img src="https://placekitten.com/408/287" id="imagen"alt="">
    </canvas>

    <script type ="text/javascript">
        var cv  =document.getElementById('mycanvas');
        var ctx  = cv.getContext('2d');
        var color='red';
        var fig='arc';
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

        // ctx.font ="30px Arial";
        // ctx.fillText("Jesus Emmanuel",150,30);

        // ctx.strokeText("Jesus Emmanuel",150,80);


        // gradiantre
        // var  grad = ctx.createLinearGradient(0,0,200,0);
        // grad.addColorStop(0,"red");
        // grad.addColorStop(0.5,"yellow");
        // grad.addColorStop(1,"blue");
        // ctx.fillStyle =grad;
        // ctx.fillRect(0,400,200,80);

        //greadiante con  circulo
        // grad= ctx.createRadialGradient(75,50,5,90,60,100);
        //  grad.addColorStop(0,"green");
        //  grad.addColorStop(0.5,"white");
        //  grad.addColorStop(1,"red");

        // ctx.fillStyle = grad;
        // ctx.fillRect(0,40,200,80);

        //imagen
        // var img = document.getElementById('imagen');
        // ctx.drawImage(img,100,100);

        // evento
        // cv.addEventListener('click', function(e){
        //     ctx.beginPath();
        //     ctx.arc(e.offsetX-20,e.offsetY-20,50,0,2*Math.PI);
        //     ctx.fillStyle="rgba(100,0,200,0.5)";
        //     ctx.fill();
        //     ctx.stroke();
        // });
        
        //evento con distintos colores
        cv.addEventListener('click', function(e){
            console.log(e);
            ctx.fillStyle=color;
        if(fig=='rec'){
            ctx.fillRect(e.offsetX-20,e.offsetY-20,40,40);
            ctx.strokeRect(e.offsetX-20,e.offsetY-20,40,40);
        }else{
            ctx.beginPath();
            ctx.arc(e.offsetX-20,e.offsetY-20, 30, 0, 2 * Math.PI);
            ctx.fill();
            ctx.stroke();
        }
        });
        
        cv.addEventListener('mouseover',function(e){
            color=rbgaRand();
        });
        cv.addEventListener('mouseout',function(e){
            fig=(fig=='arc')?'rec':'arc';
        });
        function rbgaRand() {
        var o = Math.round, r = Math.random, s = 255;
        return 'rgba(' + o(r()*s) + ',' + o(r()*s) + ',' + o(r()*s) + ',' + r().toFixed(1) + ')';
    }



    </script>
</body>
</html>