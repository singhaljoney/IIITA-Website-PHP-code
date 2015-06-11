<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Students</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('students');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('students');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('students');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('students');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('students');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>