<?php
$fp = fopen('register.log', 'a+');
fwrite($fp, 'GET' . PHP_EOL);
fwrite($fp, print_r($_GET, true));
fwrite($fp, 'POST' . PHP_EOL);
fwrite($fp, print_r($_POST, true));


https://redirect.wyelearning.com/config.xml?url=https%3A%2F%2Feditor.devroc.nl%2Feditor.php%3Flanguage%3Dhtml
