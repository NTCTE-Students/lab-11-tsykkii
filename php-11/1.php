<?php

$text = "Привет, мир!";

$pattern = "/мир/";
$result = preg_match($pattern, $text);
print('Найдено: ' . ($result ? 'да' : 'нет') . '<br>');

$pattern = "/^привет/";
$result = preg_match($pattern, $text);
print('Найдено в начале: ' . ($result ? 'да' : 'нет') . '<br>');

$pattern = "/конец$/";
$result = preg_match($pattern, $text);
print('Найдено в конце: ' . ($result ? 'да' : 'нет') . '<br>');