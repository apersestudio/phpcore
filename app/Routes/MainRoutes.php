<?php

use PC\Singletons\Routes;

$mainRoutes = new Routes();
$mainRoutes->onPrefixLoadRoutes("master", "MasterRoutes");
$mainRoutes->onPrefixLoadRoutes("client", "ClientRoutes");

?>