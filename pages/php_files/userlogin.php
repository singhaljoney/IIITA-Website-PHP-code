<?php
	include('conn.php');
	if(!isset($_SESSION))session_start();
	if(isset($_SESSION["logged"]))
	{
		if($_SESSION["logged"]=="user")
		{
?>
				<script type="text/javascript">
                        <!--
                        function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../myiiita.php")', 100);
                        //-->
                        </script>
<?php
		}
		else if($_SESSION["logged"]=="admin")
		{
?>
		<script type="text/javascript">
                        <!--
                        function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../../admin/")', 100);
                        //-->
                        </script>
<?php
		}
	}
	else
	{
		
		if(isset($_POST["name"]) && isset($_POST["pass"]))
		{
			$name = mysql_escape_string($_POST["name"]);
			$pass = mysql_escape_string($_POST["pass"]);
			$designation = mysql_escape_string($_POST["desg"]);
			if($designation == 'students')$prefix = "stu";
			else if($designation == 'employees')$prefix = "emp";
			else if($designation == 'faculty')$prefix = "fac";
			
			if($name && $pass)
			{
				$pass = md5($pass);
				
				$query = "select * from ".$designation." where ".$prefix."_username = '$name' and ".$prefix."_passwd = '$pass'";
				//$query = "select * from students where stu_username = '$name' and stu_passwd = '$pass'";
				
				$res = mysql_query($query) or die(mysql_error());
				if(mysql_num_rows($res)==0)
				{
					?>
						<script type="text/javascript">
                        <!--
                        alert("Wrong username or Password");
						function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../myiiita.php")', 100);
                        //-->
                        </script>
				<?php
				
				}
				else
				{
				$row = mysql_fetch_array($res);
				$_SESSION["logged"] = 'user';
				$_SESSION["userid"] = $row[$prefix."_id"];
				$_SESSION["role"] = $designation;
				$_SESSION["pre"] = $prefix;
				?>
						<script type="text/javascript">
                        <!--
                        function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../myiiita.php")', 100);
                        //-->
                        </script>
				
				<?php
					}
				}
			else
			{
			?>
						<script type="text/javascript">
                        <!--
						alert("Fill Both the Entries");
                        function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../myiiita.php")', 100);
                        //-->
                        </script>
				<?php
					}
	
		}
		else
		{
			?>
						<script type="text/javascript">
                        <!--
                        alert("Don't Try to Be Oversmart");
						function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../myiiita.php")', 100);
                        //-->
                        </script>
				<?php
					}
	}
?>