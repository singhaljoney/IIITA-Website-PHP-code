<?php
session_start();
unset($_SESSION["logged"]);
unset($_SESSION["user"]);
session_destroy();
header("location:../index.php");
?>
