<?php
    $cadena = "holaa";
    function reverse($cadena){
        $array_cadena = mb_str_split($cadena);
        foreach ($array_cadena as $letra) {
            $letra = array_pop($array_cadena);
            echo $letra;
        }
    }
    echo "<h1>Primera forma de reverse</h1>";
    reverse($cadena);
    echo "<br><br>";

    function reverse2($cadena){
        $array_cadena = mb_str_split($cadena);
        for ($i=count($array_cadena) - 1; $i >= 0; $i--) { 
            $resultado[] = $array_cadena[$i];
        }
        return implode("", $resultado);
    }
    echo "<h1>Segunda forma de reverse</h1>";
    echo reverse2($cadena);
    echo "<br><br>";

    function mode($cadena){
        $array_cadena = mb_str_split($cadena);
        $conteo = array_count_values($array_cadena);
        $letra = "";
        $cantidad = 0;
        foreach ($conteo as $key => $rep){
            if($rep > $cantidad){
                $cantidad = $rep;
                $letra = $key;
            }
        }
        return $letra;
    }
    echo "<h1>Caracter mas repetido</h1>";
    echo "El caracter mas repetido de $cadena es: " . mode($cadena);
