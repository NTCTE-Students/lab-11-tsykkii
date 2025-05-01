<?php

$html = '<div>Всем кукусики, сегодня 2 апреля</div>';

$pattern = "/<[^>]+>/";
$tags = [];
preg_match_all($pattern, $html, $tags);
print('Найдены HTML-теги: ' . implode(', ', $tags[0]) . '<br>');
