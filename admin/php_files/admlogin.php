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
                        setTimeout('Redirect("../../index.php")', 100);
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
                        setTimeout('Redirect("../admin.php")', 100);
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
			if($name && $pass)
			{
				
				$query = "select role_passwd,role_role from roles where role_username = '$name'";
				$res = mysql_query($query) or die(mysql_error());
				$row = mysql_fetch_array($res);
				$pass = md5($pass);
				if($row["role_role"]=="admin" && $pass==$row["role_passwd"])
					{
						$_SESSION["logged"] = "admin";
						$_SESSION["user"] = "-1";
				?>
						<script type="text/javascript">
                        <!--
                        function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../admin.php")', 100);
                        //-->
                        </script>
				<?php
					}
				else
					{
					?>
						<script type="text/javascript">
                        <!--
                        alert("Wrong ID or Password");
						function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../admin.php")', 100);
                        //-->
                        </script>
				<?php
					}
			}
			else
			{?>
						<script type="text/javascript">
                        <!--
						alert("Fill Both the Entries");
                        function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../admin.php")', 100);
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
                        setTimeout('Redirect("../admin.php")', 100);
                        //-->
                        </script>
				<?php
					}
	}
?>