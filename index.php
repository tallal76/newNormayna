<?php

spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});

date_default_timezone_set('Europe/Paris');

require_once './functions/autoLoadFunction.php';

require_once './includes/head.php';
require_once './includes/nav.php';
require_once './includes/main.php';
require_once './includes/footer.php';