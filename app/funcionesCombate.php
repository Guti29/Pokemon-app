<?php

    function daño($pokemon1, $pokemon2){
        global $pokemon;

        $daño1 = ($pokemon[$pokemon1]["ataque"]) - ($pokemon[$pokemon2]["defensa"]);
        $daño2 = ($pokemon[$pokemon2]["ataque"]) - ($pokemon[$pokemon1]["defensa"]);
        if ($daño1 < 0) {
            $daño1 = 1;
        }
        if ($daño2 < 0) {
            $daño2 = 1;
        }
        return [$daño1, $daño2];
    }

    function velocidad($pokemon1, $pokemon2){
        global $pokemon;

        if(($pokemon[$pokemon1]["velocidad"]) < ($pokemon[$pokemon2]["velocidad"])){
            return $pokemon2;
        }else{
            return $pokemon1;
        }
    }