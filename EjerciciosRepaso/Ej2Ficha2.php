<?php
    $array = [1,1,2,0,4,2,2,1,2,2,2,7,8,8,9];
    function numeroMasRepetido($array){
        $numeroRepetido = $array[0];
        $maxRepeticiones = 1;
        $repeticionesActuales = 1;
        for ($i=1; $i < count($array); $i++) { 
            if ($array[$i] == $array[$i - 1]) {
                $repeticionesActuales++;
            }else{
                if ($repeticionesActuales > $maxRepeticiones) {
                    $maxRepeticiones = $repeticionesActuales;
                    $numeroRepetido = $array[$i - 1];
                }
                $repeticionesActuales = 1;
            }
        }
        if ($repeticionesActuales > $maxRepeticiones) {
            $numeroRepetido = $array[count($array) - 1];
        }
        return $numeroRepetido;
    }
    echo "El numero mas repetido de forma continua es el: " . numeroMasRepetido($array);