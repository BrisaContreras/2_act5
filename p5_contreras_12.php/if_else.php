<html>
<head>
    <title>IF-ELSE</title>
    <link rel="stylesheet" href="es.css">
</head>
    <body>
      <?php
            $dia=date("d");
            if($dia<=10){
            echo "Sitio activo";
            }   
            else{
            echo "Sitio fuera de servicio";
            }
        ?>
    </body>
</html>

