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
            
            $dato1=$_POST["d-nombre"];


            $sql2="delete from multimedia where title=$dato1";

            if($conexion->query($sql1)===TRUE){
                echo "Entrada en films";
            }
            if($conexion->query($sql2)===TRUE){
                echo "Eliminación completada";
            }
            else{
                echo "error";
            }
            $conexion->close();
        ?>

        <h1>Results</h1>
       
    </body>
</html>