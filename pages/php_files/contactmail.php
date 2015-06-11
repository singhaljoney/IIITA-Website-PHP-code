<?php

if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  
  //send email
  $name = $_REQUEST['sender'] ;
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;
  
  if($name && $email && $message)
  {
  mail("dean@iiita.ac.in", "Important Mail",
  $message, "From:" . $email);
?>
 <script type="text/javascript">
                        <!--
						alert("Sending Mail");
                        function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../query.php")', 100);
                        //-->
                        </script>
<?php 
  }
  else
  {
	?>
 <script type="text/javascript">
                        <!--
						alert("Fill All Entries");
                        function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../query.php")', 100);
                        //-->
                        </script>
<?php 

  
  }
  }
else
//if "email" is not filled out, display the form
  {
	
?> 
<script type="text/javascript">
                        <!--
						alert("Oversmart huhh!!!");
                        function Redirect(url) {
                            window.location= url;
                        }
                        setTimeout('Redirect("../query.php")', 100);
                        //-->
                        </script>
<?php 
  }
?>
