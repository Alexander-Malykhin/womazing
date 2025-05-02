<?php
function getPathImage($path,$image)
{
    $pathImage = $_SERVER['HTTPS'] ? 'https://' : "http://";
    return $pathImage . $_SERVER['SERVER_NAME'] . "/images" . "/$path" . "/$image" ;
}