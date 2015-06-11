<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>News</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('news');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('news');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('news');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('news');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('news');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>