<?php
//Ejercicios de Lógica con Estructuras de Control y Funciones en PHP

//FUNCIONES
// 1. Problema de la serie Fibonacci
function generarFibonacci($n) {
    $serie = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $serie[] = $serie[$i - 1] + $serie[$i - 2];
    }
    return array_slice($serie, 0, $n);
}

// 2. Problema de Números Primos
function esPrimo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

// 3. Problema de Palíndromos
function esPalindromo($texto) {
    $texto = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $texto));
    return $texto === strrev($texto);
}

//4. Problema de Suma de Números Pares
function sumaPares($array) {
    $suma = 0;
    foreach ($array as $num) {
        if ($num % 2 == 0) {
            $suma += $num;
        }
    }
    return $suma;
}

// 5. Problema de Frecuencia de Caracteres
function frecuenciaCaracteres($cadena) {
    $frecuencia = [];
    foreach (str_split($cadena) as $char) {
        $frecuencia[$char] = ($frecuencia[$char] ?? 0) + 1;
    }
    return $frecuencia;
}

// 6. Problema de Bucle Anidado (Pirámide de Asteriscos)
function imprimirPiramide($altura) {
    for ($i = 1; $i <= $altura; $i++) {
        echo str_repeat(' ', $altura - $i) . str_repeat('*', 2 * $i - 1) . "\n";
    }
}

// EJECUCIÓN
echo "1. Serie Fibonacci: ";
print_r(generarFibonacci(20));

echo "\n2. ¿5 es primo? " . (esPrimo(5) ? "Sí" : "No");

echo "\n3. ¿Es palíndromo: 'Yo como hoy contigo'? " . (esPalindromo('Yo como hoy contigo') ? "Sí" : "No");

echo "\n4. Suma de pares en [8,16,77,25,60,63]: " . sumaPares( [8,16,77,25,60,63]);

echo "\n5. Frecuencia de caracteres en 'iguana': ";
print_r(frecuenciaCaracteres('iguana'));

echo "\n6. Pirámide con altura 8 líneas:\n";
imprimirPiramide(8);
?>
