<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Tenders</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('tenders');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('tenders');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('tenders');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('tenders');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('tenders');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>