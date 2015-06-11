<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Faculty</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('faculty');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('faculty');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('faculty');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('faculty');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('faculty');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>