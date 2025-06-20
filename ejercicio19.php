<?php

// Ejercicio: Escribe una función que reciba un arreglo de números y un número umbral. La función debe devolver un nuevo arreglo solo con los números mayores que el umbral.
// Complejidad: MEDIA (2 puntos)

function obtenerMayoresQue($numeros, $umbral)
{
    $numerosmay = [];
    foreach ($numeros as $numero) {
        if ($numero > $umbral) {
            $numerosmay[] = $numero;
        }
    }
    return $numerosmay;
}
