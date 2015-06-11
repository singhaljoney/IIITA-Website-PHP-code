<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Branch</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('branch');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('branch');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('branch');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('branch');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('branch');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>