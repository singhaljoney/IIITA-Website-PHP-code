<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');

if(isset($_GET["key"]))
{
	$id = $_GET["key"];
	$table = $_GET["cat"];
	$qry = "show columns from $table";
	$res = mysql_query($qry) or die(mysql_error());
	$row = mysql_fetch_array($res);
	echo $row[0];
	$qry = "delete from $table where $row[0]=$id";
	$res = mysql_query($qry) or die(mysql_error());
}
?>
				<script type="text/javascript">
                        <!--
                        function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../index.php")', 10);
                        //-->
                        </script>


		