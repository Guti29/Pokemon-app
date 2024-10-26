<?php
    if (isset($_POST["pve"])) {
        echo "<form action='listadoPokemons.php' method='post'>
            <label for='nombre'>Introduce tu nombre: <input name='jugador' type='text'></label>
            <br><br>";
            for ($i=1; $i <= 6; $i++) { 
                echo "Pokemon $i: ";
                echo "<select name='opciones[]'>";
                for ($j=0; $j < count($pokemon); $j++) { 
                    echo "<option value=$j name='pokemons[]'>" . $pokemon[$j]["nombre"] . "</option>";
                }
                echo "</select>";
                echo "<br>";    
            }
            echo "<button name='empezarPVE' type='submit'>EMPEZAR</button>
            
        </form>";

    }else if(isset($_POST["pvp"])){
        echo "<form action='listadoPokemons.php' method='post'>
        <h1>Jugador 1</h1>
        <label for='nombre1'>Introduce tu nombre: <input name='jugador1' type='text'></label>
        <br><br>";
        for ($i=1; $i <= 6; $i++) { 
            echo "Pokemon $i: ";
            echo "<select name='opciones1[]'>";
            for ($j=0; $j < count($pokemon); $j++) { 
                echo "<option value=$j name='pokemons1[]'>" . $pokemon[$j]["nombre"] . "</option>";
            }
            echo "</select>";                
            echo "<br>";    
        }
        echo "<h1>Jugador 2 </h1>
        <label for='nombre2'>Introduce tu nombre: <input name='jugador2' type='text'></label>";
        for ($i=1; $i <= 6; $i++) { 
            echo "Pokemon $i: ";
            echo "<select name='opciones2[]'>";
            for ($j=0; $j < count($pokemon); $j++) { 
                echo "<option value=$j name='pokemons2[]'>" . $pokemon[$j]["nombre"] . "</option>";
            }
            echo "</select>";                
            echo "<br>";   
        } 
        echo "<button name='empezarPVP' type='submit'>EMPEZAR</button>
        
        </form>";
    }