<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>

<?php

$alm_records = array(9,"Roll No.","Name","Username","Batch","Branch","Course","Address","Contact","Email");
$anc_records = array(11,"Name","Details","Date","Time","Venue","Guests","Category","Brief Desc.","Full Description","Downloads","Pic");
$brc_records = array(6,"Code","Name","HOD","Brief desc.","Full Desc.","Remarks");
$course_records = array(9,"Code","Name","years","details","Brief Desc.","Full Desc.","URL","Head","Remarks");
$data_records = array(9,"Category","Name","Coverpic","Main Pic1","Main Pic2","Brief Desc.","Full Desc.","URL","remarks");
$emp_records = array(12,"Designation","Name","Username","Password","Daate of Joining","Salary","Branch","Address","Contact","Email ID","Pic","Website");
$evt_records = array(10,"Name","Date","Venue","Start","End","Guests","Brief Desc.","Full Desc.","Pic","Remarks");
$fac_records = array(12,"Batch","Name","Username","Password","Date of Joining","Branch","Designation","Contact","Address","Email ID","Pic","Website");
$faccourse_records = array(2,"Faculty ID","Sub ID1","Sub ID2","Sub ID3");
$news_records = array(10,"Name","Details","Time","Date","Venue","Guests","Brief Desc.","Full Desc.","Pic","Remarks");
$projects_records = array(16,"Name","About","Category","Platform","Tools","Techniques","Faulty","T Member1","T Member2","T Member3","T Member4","T Member5","Dated","URL","Pic","Remarks");
$stu_records = array(14,"Roll No.","Batch","Name","Username","Password","Date of Joining","Semester","Branch","Address","Hostel","Contact","Email","Pic","website","About");
$stucourse_records = array(9,"student ID","Course ID","Branch ID","Sub_ID1","Sub_ID2","Sub_ID3","Sub_ID4","Sub_ID5","Sub_ID6");
$subjects_records = array(8,"Code","Name","Branch ID","Course ID","Credits","Brief Desc.","Full Desc.","Remarks");
$telephone_records = array(9,"Name","Branch","Desc.","Residence1","Office1","Mobile1","Residence2","Office2","Mobile2");


?>

		<div class="page-display-name"><h1>Search</h1></div>
			<center>
			<br>
				Search Keyword : <input type="text" id = "key" name="key"/>&nbsp;&nbsp;
				<?php
					if(isset($_GET["key"]))
					{
					$table = $_GET["key"];
					}
				?>
				<input type='hidden' name = 'cat' id='cat' value =<?php echo $table;?> >
				<!--Search Category : <select id = "cat" name="cat">
				<option value="students">Name</option>
				<option value="faculty">Content</option>
				<option value="url">URL</option>
				<option value="news">Remarks</option>
				</select>
				!-->
				<br><br>
				<input onClick = searchdata2(document.getElementById('key').value,document.getElementById('cat').value); type="submit" value="Search">
			</br>
			<br>
			<div id = "result"></div>