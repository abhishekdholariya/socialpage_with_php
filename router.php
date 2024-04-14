<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$route = [
    '/' => 'controller/index.php',
    '/register'=>'controller/register.php',
    '/login'=>'controller/login.php',
    '/addpost'=>'controller/addpost.php',
    '/updatpost'=>'controller/updatepost.php',
    '/adduser'=>'controller/addUser.php',
    '/validate'=>'controller/validate.php',
    '/logout'=>'controller/logout.php',
    '/likes'=>'controller/likes.php',
];

function routeToController($uri, $route)
{
    if (array_key_exists($uri, $route)) {
        require $route[$uri];
    } else {
        abort();
    }
}
function abort($code = 404)
{
    http_response_code($code);
    require "view/{$code}.php";
    die();
}
routeToController($uri, $route);
?>