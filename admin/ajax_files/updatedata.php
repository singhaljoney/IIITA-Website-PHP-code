<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
<?php
echo $_SESSION["table"]." ".$_GET["key"];

?>

<div id = "result"></div>