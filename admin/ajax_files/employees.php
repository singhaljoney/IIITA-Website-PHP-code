<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Employees</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('employees');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('employees');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('employees');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('employees');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('employees');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>