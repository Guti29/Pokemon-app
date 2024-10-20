<link rel="stylesheet" href="pokemon.css">
<?php
    include "basePokemon.php";

    if (isset($_POST["pve"])) {
        echo "<form action='combatePokemon.php' method='post'>
            <label for='nombre'>Introduce tu nombre: <input type='text'></label>
            <br><br>";
            for ($i=1; $i <= 6; $i++) { 
                echo "Pokemon $i: ";
                echo "<select name='opciones['Equipo 1'][]'>";
                for ($j=0; $j < count($pokemon); $j++) { 
                    echo "<option value=$j name='opciones['primera'][]'>" . $pokemon[$j]["nombre"] . "</option>";
                }
                echo "</select>";
                echo "<br>";    
            }
            echo "<button type='submit'>EMPEZAR</button>
            
        </form>";
    }else if(isset($_POST["pvp"])){
        echo "<form action='combatePokemon.php' method='post'>
        <h1>Jugador 1</h1>
        <label for='nombre1'>Introduce tu nombre: <input type='text'></label>
        <br><br>";
        for ($i=1; $i <= 6; $i++) { 
            echo "Pokemon $i: ";
            echo "<select name='opciones['Equipo 1'][]'>";
            for ($j=0; $j < count($pokemon); $j++) { 
                echo "<option value=$j name='opciones['Equipo 1'][]'>" . $pokemon[$j]["nombre"] . "</option>";
            }
            echo "</select>";                
            echo "<br>";    
        }
        echo "<h1>Jugador 2 </h1>
        <label for='nombre2'>Introduce tu nombre: <input type='text'></label>
        <br><br>";
        for ($i=1; $i <= 6; $i++) { 
            echo "Pokemon $i: ";
            echo "<select name='opciones['Equipo 2'][]'>";
            for ($j=0; $j < count($pokemon); $j++) { 
                echo "<option value=$j name='opciones['Equipo 2'][]'>" . $pokemon[$j]["nombre"] . "</option>";
            }
            echo "</select>";                
            echo "<br>";   
        } 
        echo "<button type='submit'>EMPEZAR</button>
        
    </form>";
    }