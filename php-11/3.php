<?php

$text = 'Пароль: P@ssw0rd<br>Email: test@example.com<br>Телефон: +7(999)123-45-67';

$pattern = "/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";
$password = "P@ssw0rd";
print('Пароль ' . ($password ? 'соответствует' : 'не соответствует') . ' требованиям<br>');

$pattern = "/[\w.-]+@[\w.-]+\.\w+/";
$emails = [];
preg_match_all($pattern, $text, $emails);
print('Найдены email: ' . implode(', ', $emails[0]) . '<br>');

$pattern = "/\+7\(\d{3}\)\d{3}-\d{2}-\d{2}/";
$new_text = preg_replace($pattern, 'Номер скрыт', $text);
print('<br>Текст после замены телефонов:<br>');
print($new_text);