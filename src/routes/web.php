<?php
$router->addRoute("GET", "/main", "HomeController@index");
$router->addRoute("GET","/register", "UserController@register");
$router->addRoute("GET","/movies", "MoviesController@movies");

?>