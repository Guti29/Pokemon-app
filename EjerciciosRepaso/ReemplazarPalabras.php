<?php
    $cadena = "Hola ciudad";

    function reemplazar($cadena, $palabraVieja, $palabraNueva){
        $letraEncontrada = [];
        $palabras = mb_str_split($cadena);
        $palabrasViejas = mb_str_split($palabraVieja);
        for ($i=0; $i < count($palabras); $i++) { 
            $encontrado = true;
            for ($j=0; $j < count($palabrasViejas); $j++) { 
                if (count($palabras) - $i < count($palabrasViejas) || $palabras[$i + $j] != $palabrasViejas[$j]) {
                    $encontrado = false;
                    break;
                }
            }
            if ($encontrado){
                array_splice($palabras, $i, count($palabrasViejas), $palabraNueva);
            }

        }        
        return implode($palabras);
    }

    echo reemplazar($cadena, "ciudad", "mundo");
    