<?php
header("Content-type: text/css; charset: UTF-8");

$css = file_get_contents('https://raw.githubusercontent.com/justyn-revunit/r4/master/css/theme.css?v='.rand(100,999));

echo $css; 

?>