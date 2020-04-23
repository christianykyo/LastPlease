<?php
session_start();

session_destroy();
header("Location: http://localhost/sweet/sweett/index.php");

?>
