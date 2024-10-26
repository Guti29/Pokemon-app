<?php
    $array = [1, 2, 0, 4, 4, 5, 6, 2, 7, 8, 9, 3];
    function secuenciaCreciente($array){
        $secuenciaActual = [$array[0]];
        $secuenciaMax = $secuenciaActual;
        for ($i=1; $i < count($array); $i++){
            if ($array[$i] >= $array[$i - 1]) {
                $secuenciaActual[] = $array[$i];
            }else{
                if (count($secuenciaActual) > count($secuenciaMax)) {
                    $secuenciaMax = $secuenciaActual;
                }
                $secuenciaActual = [$array[$i]];
            }
        }
        if (count($secuenciaActual) > count($secuenciaMax)) {
            $secuenciaMax = $secuenciaActual;
        }
        return implode($secuenciaMax);
    }
    echo secuenciaCreciente($array);
