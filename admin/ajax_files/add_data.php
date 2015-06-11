<?php
if(!isset($_SESSION))session_start();
include('../php_files/conn.php');
?>
<br><br>
		<div class="page-display-name"><h1>Add an Entry</h1></div>
<?php

$alm_records = array(9,"RollNo","Name","Username","Batch","Branch","Course","Address","Contact","Email");
$anc_records = array(11,"Name","Details","Date","Time","Venue","Guests","Category","BriefDesc","FullDescription","Downloads","Pic");
$brc_records = array(6,"Code","Name","HOD","Briefdesc","FullDesc","Remarks");
$course_records = array(9,"Code","Name","years","details","Brief Desc.","Full Desc.","URL","Head","Remarks");
$data_records = array(9,"Category","Name","Coverpic","MainPic1","MainPic2","BriefDesc","FullDesc","URL","remarks");
$emp_records = array(12,"Designation","Name","Username","Password","Daate of Joining","Salary","Branch","Address","Contact","EmailID","Pic","Website");
$evt_records = array(10,"Name","Date","Venue","Start","End","Guests","BriefDesc","FullDesc","Pic","Remarks");
$fac_records = array(12,"Batch","Name","Username","Password","DateofJoining","Branch","Designation","Contact","Address","EmailID","Pic","Website");
$faccourse_records = array(4,"FacultyID","SubID1","SubID2","SubID3");
$news_records = array(10,"Name","Details","Time","Date","Venue","Guests","BriefDesc","FullDesc","Pic","Remarks");
$projects_records = array(16,"Name","About","Category","Platform","Tools","Techniques","Faulty","TMember1","TMember2","TMember3","TMember4","TMember5","Dated","URL","Pic","Remarks");
$stu_records = array(14,"RollNo","Batch","Name","Username","Password","DateofJoining","Semester","Branch","Address","Hostel","Contact","Email","Pic","website","About");
$stucourse_records = array(9,"studentID","CourseID","BranchID","Sub_ID1","Sub_ID2","Sub_ID3","Sub_ID4","Sub_ID5","Sub_ID6");
$subjects_records = array(8,"Code","Name","BranchID","CourseID","Credits","BriefDesc","FullDesc","Remarks");
$telephone_records = array(9,"Name","Branch","Desc.","Residence1","Office1","Mobile1","Residence2","Office2","Mobile2");

?>
<?php
				
				if(isset($_GET["key"]))
				{
					$table = $_GET["key"];
					switch ($table)
					{
						case "alumni":
							$fetch = $alm_records;
							break;
						case "announcements":
							$fetch = $anc_records;
							break;
						case "branch":
							$fetch = $brc_records;
							break;
						case "course":
							$fetch = $course_records;
							break;
						case "data":
							$fetch = $data_records;
							break;
						case "employees":
							$fetch = $emp_records;
							break;
						case "faculty":
							$fetch = $fac_records;
							break;
						case "faculty_course":
							$fetch = $faccourse_records;
							break;
						case "events":
							$fetch = $evt_records;
							break;
						case "news":
							$fetch = $news_records;
							break;
						case "projects":
							$fetch = $projects_records;
							break;
						case "students":
							$fetch = $stu_records;
							break;
						case "student_course":
							$fetch = $stucourse_records;
							break;
						case "subjects":
							$fetch = $subjects_records;
							break;
						case "telephone":
							$fetch = $telephone_records;
							break;
						default:
							$fetch = array(4,"Name","About","Date","Time");
							break;
					}
					$cnt = $fetch[0];					
					if($table == 'data')
					{
					 $qry = "select max(data_id) from data";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 
					 $qry = "insert into data values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".$_POST["$fetch[4]"]."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					if($table == 'news')
					{
					 $qry = "select max(news_id) from news";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 
					 $qry = "insert into news values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".$_POST["$fetch[4]"]."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					if($table == 'events')
					{
					 $qry = "select max(evt_id) from events";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 
					 $qry = "insert into events values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".$_POST["$fetch[4]"]."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					if($table == 'announcements')
					{
					 $qry = "select max(anc_id) from announcements";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 
					 $qry = "insert into announcements values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".$_POST["$fetch[4]"]."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."','".$_POST["$fetch[11]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					if($table == 'projects')
					{
					 $qry = "select max(prj_id) from projects";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 
					 $qry = "insert into projects values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".$_POST["$fetch[4]"]."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."','".$_POST["$fetch[11]"]."','".$_POST["$fetch[12]"]."','".$_POST["$fetch[13]"]."','".$_POST["$fetch[14]"]."','".$_POST["$fetch[15]"]."','".$_POST["$fetch[16]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					if($table == 'students')
					{
					 $qry = "select max(stu_id) from students";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 $qry = "insert into students values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".mysql_escape_string(STRIPSLASHES(TRIM($_POST["$fetch[4]"])))."','".md5(mysql_escape_string(STRIPSLASHES(TRIM($_POST["$fetch[5]"]))))."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."','".$_POST["$fetch[11]"]."','".$_POST["$fetch[12]"]."','".$_POST["$fetch[13]"]."','".$_POST["$fetch[14]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					if($table == 'faculty')
					{
					 $qry = "select max(fac_id) from faculty";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 $qry = "insert into faculty values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".mysql_escape_string(STRIPSLASHES(TRIM($_POST["$fetch[3]"])))."','".md5(mysql_escape_string(STRIPSLASHES(TRIM($_POST["$fetch[4]"]))))."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."','".$_POST["$fetch[11]"]."','".$_POST["$fetch[12]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					/*if($table = 'events')
					{
					 $qry = "select max(evt_id) from events";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 
					 $qry = "insert into events values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".$_POST["$fetch[4]"]."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					if($table = 'events')
					{
					 $qry = "select max(evt_id) from events";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 
					 $qry = "insert into events values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".$_POST["$fetch[4]"]."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					if($table = 'events')
					{
					 $qry = "select max(evt_id) from events";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 
					 $qry = "insert into events values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".$_POST["$fetch[4]"]."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					if($table = 'events')
					{
					 $qry = "select max(evt_id) from events";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 
					 $qry = "insert into events values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".$_POST["$fetch[4]"]."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					if($table = 'events')
					{
					 $qry = "select max(evt_id) from events";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 
					 $qry = "insert into events values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".$_POST["$fetch[4]"]."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					if($table = 'events')
					{
					 $qry = "select max(evt_id) from events";
					 $res = mysql_query($qry) or die(mysql_error());
					 $row = mysql_fetch_array($res);
					 $id = $row[0] + 1;
					 
					 $qry = "insert into events values($id,'".$_POST["$fetch[1]"]."','".$_POST["$fetch[2]"]."','".$_POST["$fetch[3]"]."','".$_POST["$fetch[4]"]."','".$_POST["$fetch[5]"]."','".$_POST["$fetch[6]"]."','".$_POST["$fetch[7]"]."','".$_POST["$fetch[8]"]."','".$_POST["$fetch[9]"]."','".$_POST["$fetch[10]"]."')";
					 $res = mysql_query($qry) or die(mysql_error());
					}
					*/
					?>
				<script type="text/javascript">
                        <!--
                        function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../index.php")', 100);
						//-->
                        </script>
						
	<?php
		  }
				
				

		