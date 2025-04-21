<?php

function findPerfectNumber(array $array): mixed {
    foreach ($array as $number) {
        if ($number <= 0) continue; // Только положительные целые числа

        $sum = 0;
        for ($i = 1; $i < $number; $i++) { 
            if ($number % $i == 0) {
                $sum += $i;
            }
        }
        
        if ($sum == $number) {
            return $number;
        }
    }
    
    return null; // Если идеальное число не найдено
}

// Пример использования
$numbers = [6, 28, 496, 8128];
$perfectNumber = findPerfectNumber($numbers);
if ($perfectNumber !== null) {
    echo "Идеальное число: " . $perfectNumber . "\n";
} else {
    echo "Идеального числа в массиве нет.\n";
}