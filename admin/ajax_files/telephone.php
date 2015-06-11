<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Telephone</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('telephone');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('telephone');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('telephone');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('telephone');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('telephone');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>