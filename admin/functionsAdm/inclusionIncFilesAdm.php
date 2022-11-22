<?php

function inclusionIncFileAdm(string $defaultPage): void
{
    $files = glob('./includesAdm/*.inc.php');
    $page = $_GET['page'] ?? $defaultPage;

    $pageTest = './includesAdm/' . $page . '.inc.php';

    if (!in_array($pageTest, $files)) 
        require './includesAdm/' . $defaultPage . '.inc.php';
    else
        require $pageTest;
}

