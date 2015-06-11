<?php
session_start();
unset($_SESSION["logged"]);
unset($_SESSION["user"]);
unset($_SESSION["pre"]);
unset($_SESSION["role"]);
session_destroy();
header("location:../myiiita.php");

?>
