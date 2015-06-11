<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Subjects</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('subjects');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('subjects');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('subjects');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('subjects');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('subjects');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>