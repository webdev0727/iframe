<?php
$content = file_get_contents('https://chattraffic.com/users/signup/new');
$content = str_replace('</head>','<style>#header{display: none;}</style></head>', $content);
echo $content;
?>