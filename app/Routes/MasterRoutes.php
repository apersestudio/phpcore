<?php

use App\Controllers\UserController;
use PC\Singletons\Routes;

$masterRoutes = new Routes();
$masterRoutes->prefix("master", function($prefix) {

    $this->get("/user/{id}/{command}", [UserController::class, "command"]);
    
    $this->prefix("company", function($subprefix) {
        echo $subprefix." was found\r\n";
    });

    $this->resource("user", UserController::class);

    $this->prefix("user", function($subprefix) {
        echo $subprefix." was found\r\n";
    });
    
});