<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Students Courses</h1></div>
			<center>
			<br>
				<input type="button" onClick = "alldata('students_course');" value="All Entries" />&nbsp;&nbsp;
				<input type="button" onClick = "searchdata('students_course');" value="Search" />&nbsp;&nbsp;
				<input type="button"  onClick = "adddata('students_course');" value="Add an Entry" />&nbsp;&nbsp;
				<input onClick = "updatedata('students_course');" value="Update an Entry" type="hidden" />&nbsp;&nbsp;
				<input onClick = "deletedata('students_course');" value="Delete an Entry" type="hidden" />&nbsp;&nbsp;
			</br>
			<div id = "internal_div"></div>