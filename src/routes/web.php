<?php
$router->addRoute("GET", "/index", "HomeController@index");
$router->addRoute("GET","/register", "UserController@register");
$router->addRoute("GET","/movies", "MoviesController@movies");

?>