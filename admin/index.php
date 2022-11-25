<?php

spl_autoload_register(function ($className) {
    require_once './classesAdm/' . $className . '.php';
});

date_default_timezone_set('Europe/Paris');

require_once './functionsAdm/autoLoadFunctionAdm.php';

require_once './includesAdm/base/head.php';
require_once './includesAdm/base/nav.php';
require_once './includesAdm/main.php';
require_once './includesAdm/base/footer.php';