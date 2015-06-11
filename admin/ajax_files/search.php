<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
		<div class="page-display-name"><h1>Search</h1></div>
			<center>
			<br>
				Search Keyword : <input type="text" id = "key" name="key"/>&nbsp;&nbsp;
				Search Category : <select id = "cat" name="cat">
				<option value="students">Student</option>
				<option value="faculty">Faculty</option>
				<option value="employees">Employees</option>
				<option value="news">News</option>
				<option value="eventst">Events</option>
				<option value="announcements">Announcements</option>
				<option value="alumni">Alumni</option>
				<option value="course">Academics</option>
				<option value="tenders">Tenders</option>
				<option value="projects">Projects</option>
				<option value="telephone">Telephone</option>
				</select>
				<br><br>
				<input onClick = searchkey(document.getElementById('key').value,document.getElementById('cat').value); type="submit" value="Search">
			</br>
			<div id = "result"></div>