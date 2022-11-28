<?php

spl_autoload_register(function ($className) {
    require_once './classes/' . $className . '.php';
});

date_default_timezone_set('Europe/Paris');

require_once './functions/autoLoadFunction.php';

require_once './includes/base/head.php';
require_once './includes/base/nav.php';
require_once './includes/main.php';
require_once './includes/base/footer.php';