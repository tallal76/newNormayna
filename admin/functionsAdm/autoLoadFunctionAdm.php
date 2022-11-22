<?php 

$functionFiles = glob('./functionsAdm/*.php');

for ($i = 0 ; $i < count($functionFiles) ; $i++) {
    if ($functionFiles[$i] !== './functionsAdm/autoLoadFunctionAdm.php')
        require_once $functionFiles[$i];
}
