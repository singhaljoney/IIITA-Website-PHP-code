<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Faculty and their Courses</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('faculty_course');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('faculty_course');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('faculty_course');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('faculty_course');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('faculty_course');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>