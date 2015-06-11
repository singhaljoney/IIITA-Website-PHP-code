<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Site Content</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('data');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('data');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('data');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('data');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('data');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>