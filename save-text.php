<?php

require './src/backend/config.php';

$content = $_POST['content'];
$uri = $_POST['uri'];

$file = PAGES_PATH.$uri.'.txt';

file_put_contents($file, $content);
http_response_code(200);

?>