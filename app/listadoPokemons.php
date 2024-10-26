<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>  
    <link rel="stylesheet" href="listadoPokemon.css">
</head>
<body>
    <?php
        include "basePokemon.php";
        include "formularioPokemon.php";

        if (isset($_POST["empezarPVE"])) {
            $pokemonSeleccionados1 = $_POST["opciones"];
            $nombre = $_POST["jugador"];
            echo "<h1>Equipo " . $nombre . "</h1>";
            echo "<div class='contenedor'>";
            for ($i=0; $i < count($pokemonSeleccionados1); $i++) { 
                echo "<div class='cartaPokemon'>";
                echo "<img src='" . $pokemon[$pokemonSeleccionados1[$i]]['img'] . "'/>";
                echo "<h2>" . $pokemon[$pokemonSeleccionados1[$i]]['nombre'] . "</h2>";
                echo "</div>";
            }
            echo "</div>";

            echo "<h1>Equipo Maquina</h1>";
            echo "<div class='contenedor'>";
            $equipoMaquina = equipoMaquina($pokemon);
            foreach ($equipoMaquina as $pokemonSeleccionado ){
                echo "<div class='cartaPokemon'>";
                echo "<img src='" . $pokemonSeleccionado['img'] . "' alt='" . $pokemonSeleccionado['nombre'] . "'/>";
                echo "<h2>" . $pokemonSeleccionado['nombre'] . "</h2>";
                echo "</div>";
            }
            echo "</div>";
            echo "<button type='submit'>Empezar</button>";
        }else if (isset($_POST["empezarPVP"])){
            $pokemonSeleccionados1 = $_POST["opciones1"];
            $jugador1 = $_POST["jugador1"];
            echo "<h1>Equipo " . $jugador1 . "</h1>";
            echo "<div class='contenedor'>";
            for ($i=0; $i < count($pokemonSeleccionados1); $i++) { 
                echo "<div class='cartaPokemon'>";
                echo "<img src='" . $pokemon[$pokemonSeleccionados1[$i]]['img'] . "'/>";
                echo "<h2>" . $pokemon[$pokemonSeleccionados1[$i]]['nombre'] . "</h2>";
                echo "</div>";
            }
            echo "</div>";

            $pokemonSeleccionados2 = $_POST["opciones1"];
            $jugador2 = $_POST["jugador2"];
            echo "<h1>Equipo " . $jugador2 . "</h1>";
            echo "<div class='contenedor'>";
            for ($i=0; $i < count($pokemonSeleccionados2); $i++) { 
                echo "<div class='cartaPokemon'>";
                echo "<img src='" . $pokemon[$pokemonSeleccionados2[$i]]['img'] . "'/>";
                echo "<h2>" . $pokemon[$pokemonSeleccionados2[$i]]['nombre'] . "</h2>";
                echo "</div>";
            }
            echo "</div>";
        }
        

    ?>
</body>
</html>



    
    