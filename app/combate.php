<?php

    include "basePokemon.php";
    include "funcionesCombate.php";
    
    if (isset($_POST["enviarC"])) {
        $pokemonsJugador = [];
        $pokemonsAdversario = [];
        $lstPokemonJugador = explode(';', $_POST["pokemonsJugador"]);
        $lstPokemonAdversario = explode(';', $_POST["pokemonsAdversario"]);
        print_r($lstPokemonAdversario);
        for ($i=0; $i < count($lstPokemonJugador); $i++) { 
            $pokemonsJugador[] = "<img src='" . $pokemon[$lstPokemonJugador[$i]]['img'] . "'/>";
        } 
        for ($i=0; $i < count($lstPokemonAdversario); $i++) { 
            $pokemonsAdversario[] = "<img src='" . $pokemon[$lstPokemonAdversario[$i]]['img'] . "'/>";
        } 
        echo implode(" ", $pokemonsJugador);
        echo implode(" ", $pokemonsAdversario);
    }