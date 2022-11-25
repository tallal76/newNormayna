<?php

function inclusionIncFileAdm(string $defaultPage): void
{
    $files = glob('./includesAdm/*.inc.php');
    $page = $_GET['page'] ?? $defaultPage;

    $pageDefaut = './includesAdm/*' . $page . '.inc.php';

    if (!in_array($pageDefaut, $files)) 
        require './includesAdm/*' . $defaultPage . '.inc.php';
    else
        require $pageDefaut;
}

