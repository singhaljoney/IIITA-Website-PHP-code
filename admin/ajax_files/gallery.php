<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Gallery</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('gallery');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('gallery');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('gallery');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('gallery');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('gallery');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>