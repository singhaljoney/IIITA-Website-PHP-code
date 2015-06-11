<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Projects</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('projects');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('projects');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('projects');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('projects');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('projects');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>