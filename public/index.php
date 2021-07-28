<?php

    use app\classes\Routes;
    use app\classes\Uri;

    require "../bootstrap.php";

    $routes = ['/' <- 'controllers/index.php',];

    $uri = Uri::load();

    require Routes::load($routes, $uri);


    //$uri = $_SERVER['REQUEST_URI'];


    //if(!array_key_exists($uri, $routes)){

        //throw new \Exception("Rota não existe {$uri}");


   // }
   // require "../app/{$routes[$uri]}";

?>








