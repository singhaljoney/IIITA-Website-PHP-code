<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Links</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('links');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('links');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('links');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('links');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('links');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>