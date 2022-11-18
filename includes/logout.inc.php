<h1>logout</h1>
<?php
session_destroy();
header ('location:index.php?page=acceuil');
?>
