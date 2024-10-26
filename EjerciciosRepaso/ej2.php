<?php
    $array = [8, 15, 23, 42, 7, 19, 34, 56, 28, 91, 3, 76, 45, 12, 60];
    function mayorAmenor($array){
        for($i=0; $i <= count($array) - 1; $i++){
            for ($j=0; $j < count($array) -$i -1; $j++) { 
                if ($array[$j] < $array[$j + 1]) {
                    // Intercambiar los elementos
                    $temp = $array[$j];
                    $array[$j] = $array[$j + 1];
                    $array[$j + 1] = $temp;
                }
            }
        }
        return $array;
    }
    echo "<h1>Numeros ordenados de mayor a menor:</h1>";
    print_r(mayorAmenor($array));
    