<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Events</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('events');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('events');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('events');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('events');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('events');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>