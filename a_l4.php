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

            $sql2="SELECT * from multimedia m join format f on m.Cod_format=f.Cod_format join type t on m.Cod_type=t.Cod_type";

            if($conexion->query($sql1)===TRUE){
                echo "Entrada en films";
            }
            $resultado=$conexion->query($sql2);
            if($resultado->num_rows>0){
                while($registro=$resultado->fetch_assoc()){
                    echo "Cod_film: ".$registro["Cod_film"]." ".
                    "Cod_type: ".$registro["Cod_type"]." ".
                    "title: ".$registro["Title"]." ".
                    "Author: ".$registro["Author"]." ".
                    "Cod_format: ".$registro["Cod_format"]." ".
                    "Duration: ".$registro["Duration"]." ".
                    "Year: ".$registro["Year"]." ".
                    "Nombre-Formato: ".$registro["Nombre_f"]." ".
                    "Nombre-tipo: ".$registro["Nombre_t"]."<br>";
                }
            }

            $conexion->close();
        ?>

        <h1>Results</h1>
       
    </body>
</html>