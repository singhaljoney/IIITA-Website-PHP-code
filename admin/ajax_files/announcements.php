<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Announcements</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('announcements');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('announcements');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('announcements');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('announcements');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('announcements');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>