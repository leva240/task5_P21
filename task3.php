<?php

// Функция для нахождения самого частого слова в тексте
function mostRecent($text)
{

    if (strlen($text) > 1000) {
        return 'Ошибка! Длина текста превышает допустимый лимит.';
    }
    
    $words = preg_split('/\s+/', strtolower(trim($text)));
    
    $wordCount = array_count_values($words);
    
    arsort($wordCount);
    
    reset($wordCount); 
    return key($wordCount); 
}

echo "Введите текст:";
$text = readline();
echo mostRecent($text); 