<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Alumni</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('alumni');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('alumni');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('alumni');" value="Add an Entry" />&nbsp;&nbsp;
				<input type="hidden" onClick = "updatedata('alumni');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input type="hidden" onClick = "deletedata('alumni');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>