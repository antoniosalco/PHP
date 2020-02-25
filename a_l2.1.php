<!DOCTYPE html>
<html>
    <head>

    </head>

    <body>

        <?php
            $servidor="localhost";
            $usuario="root";
            $conexion=new mysqli($servidor,$usuario);
            if($conexion->connect_error){
                die("Error de conexión:" .$conexion->connect_error);
            }
            $sql1="use films";
            
            $dato1=$_POST["in-codtype"];
            $dato2=$_POST["in-title"];
            $dato3=$_POST["in-author"];
            $dato4=$_POST["in-codformat"];
            $dato5=$_POST["in-duration"];
            $dato6=$_POST["in-year"];

            $sql2="insert into multimedia values($dato1,$dato2,$dato3,$dato4,$dato5,$dato6)";

            if($conexion->query($sql1)===TRUE){
                echo "Entrada en films";
            }
            if($conexion->query($sql2)===TRUE){
                echo "Registro completado";
            }
            else{
                echo "error";
            }
            $conexion->close();
        ?>

        <h1>Results</h1>
        <p>types: <br>1.Film <br> 2.Song <br> 3.Disc <br> 4.Image <br></p>
        <p>Formats: <br>1.wav <br>2.mp3 <br>3.mp4 <br>4.midi <br> 5.avi <br>6.mov <br>7.mpg <br>8.dvd <br>9.cdAudio <br>10.jpg <br>11.png <br>12.gif <br></p>

    </body>
</html>