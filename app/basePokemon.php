<?php
    $pokemon = [
        ["Pokedex" => 150, "nombre" => "Mewtwo","ataque" => 110,"defensa" => 90,"ps" => 106,"velocidad" => 130, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/7/7c/latest/20230319130947/Mewtwo_icono_HOME.png"],
        ["Pokedex" => 571, "nombre" => "Zoroark","ataque" => 105,"defensa" => 60,"ps" => 60,"velocidad" => 105, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/f/fe/latest/20230319132258/Zoroark_icono_HOME.png"],
        ["Pokedex" => 658, "nombre" => "Garchomp","ataque" => 130,"defensa" => 95,"ps" => 108,"velocidad" => 102, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/b/b4/latest/20230319132705/Garchomp_icono_HOME.png"],
        ["Pokedex" => 491, "nombre" => "Darkrai","ataque" => 90,"defensa" => 90,"ps" => 70,"velocidad" => 120, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/d/dd/latest/20230917181238/Darkrai_icono_HOME.png"],
        ["Pokedex" => 386, "nombre" => "Milotic","ataque" => 60,"defensa" => 79,"ps" => 95,"velocidad" => 81 , "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/f/f2/latest/20230319124256/Milotic_icono_HOME.png"],
        ["Pokedex" => 448, "nombre" => "Lucario","ataque" => 110,"defensa" => 70,"ps" => 70,"velocidad" => 90, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/3/32/latest/20230319125141/Lucario_icono_HOME.png"],
        ["Pokedex" => 384, "nombre" => "Rayquaza","ataque" => 150,"defensa" => 90,"ps" => 105,"velocidad" => 95, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/9/95/latest/20230319131121/Rayquaza_icono_HOME.png"],
        ["Pokedex" => 395, "nombre" => "Empoleon","ataque" => 86,"defensa" => 88,"ps" => 84,"velocidad" => 60, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/6/69/latest/20230319131820/Empoleon_icono_HOME.png"],
        ["Pokedex" => 478, "nombre" => "Dragonite","ataque" => 134,"defensa" => 95,"ps" => 91,"velocidad" => 80, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/e/e1/latest/20230319131027/Dragonite_icono_HOME.png"],
        ["Pokedex" => 493, "nombre" => "Arceus","ataque" => 120,"defensa" => 120,"ps" => 120,"velocidad" => 120, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/e/ee/latest/20230319132201/Arceus_icono_HOME.png"],
        ["Pokedex" => 248, "nombre" => "Tyranitar","ataque" => 134,"defensa" => 110,"ps" => 100,"velocidad" => 61, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/9/91/latest/20230319124252/Tyranitar_icono_HOME.png"],
        ["Pokedex" => 130, "nombre" => "Gyarados","ataque" => 125,"defensa" => 79,"ps" => 95,"velocidad" => 81, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/4/48/latest/20230319131139/Gyarados_icono_HOME.png"],
        ["Pokedex" => 243, "nombre" => "Raikou","ataque" => 85,"defensa" => 75,"ps" => 95,"velocidad" => 115, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/2/27/latest/20231230143657/Raikou_icono_HOME.png"],
        ["Pokedex" => 643, "nombre" => "Reshiram","ataque" => 120,"defensa" => 100,"ps" => 100,"velocidad" => 90, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/1/1e/latest/20230319132351/Reshiram_icono_HOME.png"],
        ["Pokedex" => 644, "nombre" => "Zekrom","ataque" => 150,"defensa" => 120,"ps" => 100,"velocidad" => 90, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/0/0d/latest/20231230143604/Zekrom_icono_HOME.png"],
        ["Pokedex" => 807, "nombre" => "Zeraora","ataque" => 112,"defensa" => 75,"ps" => 88,"velocidad" => 143, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/4/40/latest/20230319125533/Zeraora_icono_HOME.png"],
        ["Pokedex" => 006, "nombre" => "Charizard","ataque" => 84,"defensa" => 78,"ps" => 78,"velocidad" => 100, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/b/b7/latest/20230319124610/Charizard_icono_HOME.png"],
        ["Pokedex" => 123, "nombre" => "Scyther","ataque" => 110,"defensa" => 80,"ps" => 70,"velocidad" => 105, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/3/30/latest/20230319125341/Scyther_icono_HOME.png"],
        ["Pokedex" => 144, "nombre" => "Articuno","ataque" => 85,"defensa" => 100,"ps" => 90,"velocidad" => 85, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/e/e7/latest/20230319125620/Articuno_icono_HOME.png"],
        ["Pokedex" => 194, "nombre" => "Jolteon","ataque" => 65,"defensa" => 60,"ps" => 65,"velocidad" => 130, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/a/a8/latest/20230319130359/Jolteon_icono_HOME.png"],
    ];

    function equipoMaquina($pokemon){
        $pokemonElegidos = [];
        $indicesSeleccionados = [];

        while (count($pokemonElegidos) < 6) {
            $indiceAleatorio = mt_rand(0, count($pokemon) - 1);

            if (!isset($indicesSeleccionados[$indiceAleatorio])) {
                $indicesSeleccionados[$indiceAleatorio] = true; 
                $pokemonElegidos[] = $pokemon[$indiceAleatorio];
            }
        }

        return $pokemonElegidos;
    }