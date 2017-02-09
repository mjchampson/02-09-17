<html>
      <head>
        <meta http-equip="Content-Type" content="text/html"; charset=ISO-8859>
        <link rel="stylesheet" type="text/css" href="style/style.css">
        <title>Any Co.: $title</title>
      </head>
<?php
$c = oci_connect("hr","hr","localhost/xe");
?>
<form method="post" align= "center" action="#">
	<h1> LOG-IN </h1>
	<label class="w3-margin-left">Username :</label>
	<input type="text", name="username", placeholder="Enter Username"/> <br>
	<label class="w3-margin-left">Password :</label>
	<input type="password", name="password", placeholder="Enter Password"/> <br>
	<input class="w3-margin-left" type="submit" name="submit" value="GO"/> <br>
	</form>

<?php
	if(isset($_POST['submit'])){
	
		$c_user = addslashes($_POST['username']);
		$c_pass =addslashes ($_POST['password']);
		$sel_c = "select * from EMPLOYEES where EMAIL ='".$c_pass."' AND EMPLOYEE_ID='".$c_user."'";
		$run_c = oci_parse($c, $sel_c);
		$ex = oci_execute($run_c);
		$a = oci_fetch_array($run_c);
		$check=oci_num_rows($run_c);
		echo $check;
		while(($row=oci_fetch_array($run_c, OCI_ASSOC + OCI_RETURN_NULLS))!=False){
		
	}
		if($check == 0){
			echo "<script>alert('password or email is incorrect!')</script>";
		}else{
			header("Location: anyco.php");
		}
		
		
	}
?>
</html>