<h1>logout</h1>
<?php
session_start();
session_destroy();
header ('location:http://localhost/newNormayna/index.php');
?>
