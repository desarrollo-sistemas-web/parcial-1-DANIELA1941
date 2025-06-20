<?php

//Ejercicio 17: Escribe una función llamada calcularPromedio que tome un arreglo de números como parámetro y devuelva el promedio de esos números. Por ejemplo, si se pasa el arreglo [5, 10, 15, 20], la función debe devolver el valor 12.5.
//Complejidad: MEDIA (2 puntos)

// 🧠 Pista: Existe array_sum para sumar y count para obtener la cantidad de elementos.

function calcularPromedio($numeros) {
    $suma=array_sum($numeros);
    $count=count($numeros);
    if ($count==0) {
        return 0;
    }
    $promedio=$suma/$count;
    return $promedio;
}
