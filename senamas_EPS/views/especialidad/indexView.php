<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            if(isset($allEspecialidades)){
                foreach($allEspecialidades as $item){
                    echo "<br><hr>";
                    echo "Codigo:".$item->cod_especialidad;
                    echo "Nombre:".$item->nombre;
                    echo "Descripcion:".$item->descripcion;
                }
            }
        ?>
    </div>
</body>
</html>