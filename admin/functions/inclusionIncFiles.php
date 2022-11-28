<?php
function inclusionIncFile(string $defaultPage): void
{
    $files = glob('./includes/*.inc.php');
    $page = $_GET['page'] ?? $defaultPage;

    $pageDefaut = './includes/' . $page . '.inc.php';

    if (!in_array($pageDefaut, $files)) 
        require './includes/' . $defaultPage . '.inc.php';
    else
        require $pageDefaut;
}
?>