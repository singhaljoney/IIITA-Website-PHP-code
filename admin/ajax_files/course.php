<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Courses</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('course');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('course');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('course');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('course');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('course');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>