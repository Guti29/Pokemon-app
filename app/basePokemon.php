<?php
    $pokemon = [
        ["Pokedex" => 150, "nombre" => "Mewtwo","ataque" => 110,"defensa" => 90,"ps" => 106,"spd" => 130, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/7/7c/latest/20230319130947/Mewtwo_icono_HOME.png"],
        ["Pokedex" => 571, "nombre" => "Zoroark","atk" => 105,"def" => 60,"ps" => 60,"spd" => 105, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/f/fe/latest/20230319132258/Zoroark_icono_HOME.png"],
        ["Pokedex" => 658, "nombre" => "Garchomp","atk" => 130,"def" => 95,"ps" => 108,"spd" => 102, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/b/b4/latest/20230319132705/Garchomp_icono_HOME.png"],
        ["Pokedex" => 491, "nombre" => "Darkrai","atk" => 90,"def" => 90,"ps" => 70,"spd" => 120, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/d/dd/latest/20230917181238/Darkrai_icono_HOME.png"],
        ["Pokedex" => 386, "nombre" => "Milotic","atk" => 60,"def" => 79,"ps" => 95,"spd" => 81 , "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/f/f2/latest/20230319124256/Milotic_icono_HOME.png"],
        ["Pokedex" => 448, "nombre" => "Lucario","atk" => 110,"def" => 70,"ps" => 70,"spd" => 90, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/3/32/latest/20230319125141/Lucario_icono_HOME.png"],
        ["Pokedex" => 384, "nombre" => "Rayquaza","atk" => 150,"def" => 90,"ps" => 105,"spd" => 95, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/9/95/latest/20230319131121/Rayquaza_icono_HOME.png"],
        ["Pokedex" => 395, "nombre" => "Empoleon","atk" => 86,"def" => 88,"ps" => 84,"spd" => 60, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/6/69/latest/20230319131820/Empoleon_icono_HOME.png"],
        ["Pokedex" => 478, "nombre" => "Dragonite","atk" => 134,"def" => 95,"ps" => 91,"spd" => 80, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/e/e1/latest/20230319131027/Dragonite_icono_HOME.png"],
        ["Pokedex" => 493, "nombre" => "Arceus","atk" => 120,"def" => 120,"ps" => 120,"spd" => 120, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/e/ee/latest/20230319132201/Arceus_icono_HOME.png"],
        ["Pokedex" => 248, "nombre" => "Tyranitar","atk" => 134,"def" => 110,"ps" => 100,"spd" => 61, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/9/91/latest/20230319124252/Tyranitar_icono_HOME.png"],
        ["Pokedex" => 130, "nombre" => "Gyarados","atk" => 125,"def" => 79,"ps" => 95,"spd" => 81, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/4/48/latest/20230319131139/Gyarados_icono_HOME.png"],
        ["Pokedex" => 243, "nombre" => "Raikou","atk" => 85,"def" => 75,"ps" => 95,"spd" => 115, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/2/27/latest/20231230143657/Raikou_icono_HOME.png"],
        ["Pokedex" => 643, "nombre" => "Reshiram","atk" => 120,"def" => 100,"ps" => 100,"spd" => 90, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/1/1e/latest/20230319132351/Reshiram_icono_HOME.png"],
        ["Pokedex" => 644, "nombre" => "Zekrom","atk" => 150,"def" => 120,"ps" => 100,"spd" => 90, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/0/0d/latest/20231230143604/Zekrom_icono_HOME.png"],
        ["Pokedex" => 807, "nombre" => "Zeraora","atk" => 112,"def" => 75,"ps" => 88,"spd" => 143, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/4/40/latest/20230319125533/Zeraora_icono_HOME.png"],
        ["Pokedex" => 006, "nombre" => "Charizard","atk" => 84,"def" => 78,"ps" => 78,"spd" => 100, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/b/b7/latest/20230319124610/Charizard_icono_HOME.png"],
        ["Pokedex" => 123, "nombre" => "Scyther","atk" => 110,"def" => 80,"ps" => 70,"spd" => 105, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/3/30/latest/20230319125341/Scyther_icono_HOME.png"],
        ["Pokedex" => 144, "nombre" => "Articuno","atk" => 85,"def" => 100,"ps" => 90,"spd" => 85, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/e/e7/latest/20230319125620/Articuno_icono_HOME.png"],
        ["Pokedex" => 194, "nombre" => "Jolteon","atk" => 65,"def" => 60,"ps" => 65,"spd" => 130, "img" => "https://images.wikidexcdn.net/mwuploads/wikidex/a/a8/latest/20230319130359/Jolteon_icono_HOME.png"],
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