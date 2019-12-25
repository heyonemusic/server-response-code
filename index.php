<?php

//Массив с сайтами
$url = array(
    'https://vk.com',
    'https://yandex.ru',
    'https://www.lamoda.ru',
    'https://www.youtube.com',
    'https://habr.com/ru',
    'https://nemcd.com',
    'https://php.ru',
    'http://hi.ru/?md81'
);
//Цикл перебора списка сайтов
foreach($url as $site){
    $headers = get_headers($site);
    $status = $headers[0];
    echo "$site - $status\n";
}

?>