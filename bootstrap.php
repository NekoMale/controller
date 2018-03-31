<?php

use daniele\core\view\View;
use daniele\core\view\ViewLoader;
use daniele\core\router\Router;

require "config.php";
require "vendor/autoload.php";

$router = new Router();

$view = new View(new ViewLoader(BASEPATH."/template/view/"));