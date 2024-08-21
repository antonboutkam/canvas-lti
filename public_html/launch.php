<?php
$fp = fopen('../data/request.log', 'a+');

echo "<h1>GET</h1>";
echo "<pre>" . print_r($_GET, true) . "</pre>";
fwrite($fp, 'GET');
fwrite($fp, print_r($_GET, true));


echo "<h1>POST</h1>";
echo "<pre>" . print_r($_POST, true) . "</pre>";
fwrite($fp, 'POST');
fwrite($fp, print_r($_POST, true));

echo "<h1>COOKIE</h1>";
echo "<pre>" . print_r($_COOKIE, true) . "</pre>";
fwrite($fp, 'COOKIE');
fwrite($fp, print_r($_COOKIE, true));


