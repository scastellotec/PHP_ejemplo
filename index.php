<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Mi tienda</h1>
    <?php
        $mysqli = new mysqli("remotemysql.com", "TrQErL2HLW", "M8xBqzA8Ns", "TrQErL2HLW");
        $sql = "SELECT * FROM productos";
        $result = $mysqli->query($sql);

        while($row = $result->fetch_assoc()) {
            echo "<ul>";
            echo "<li>ID: ".$row["id"]."</li>";
            echo "<li>Nombre: ".$row["nombre"]."</li>";
            echo "<li>Descripcion: ".$row["descripcion"]."</li>";
            echo "<li>Precio: ".$row["precio"]."</li>";
            echo "<li>Imagen: ".$row["imagen"]."</li>";
            echo "<li><a href='carrito.php?id=".$row["id"]."&nombre=".$row["nombre"]."&precio=".$row["precio"]."'>Comprar</a></li>";
            echo "</ul>";
        }
        $mysqli->close();
    ?>

    <h1>Mi carrito</h1>
    <p><a href="vaciarcarrito.php">Vaciar carrito</a></p>
    <?php
        session_start();

        echo "<h2>Lo que tienes en el carro</h2>";
        if(empty($_SESSION)){
            echo "<p>Esta vacio</p>";
        }
        echo "<table>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nombre</th>";
            echo "<th>Precio</th>";
        echo "</tr>";
        foreach ($_SESSION as $result){
            echo "<tr>";
            echo "<td>".$result[0]."</td>";
            echo "<td>".$result[1]."</td>";
            echo "<td>".$result[2]."</td>";
            echo "</tr>";           
        }
        echo "</table>";

        //if($_SESSION.size)
    ?>
</body>
</html>