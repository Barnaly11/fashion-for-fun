<?php
	require 'fconfig.php';
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")	
	{
		$email=mysqli_real_escape_string($db,$_POST['email']);
		$password=mysqli_real_escape_string($db,$_POST['password']);
		$name=mysqli_real_escape_string($db,$_POST['name']);
	 	$sql = "SELECT email FROM flogin WHERE email = '".$email."'";
     	$result = mysqli_query($db,$sql);
     
      
     $c = mysqli_num_rows($result);
     if($c<1)
     {
     	 session_register("email");
         $_SESSION['login_user'] = $email;
         $sql=mysqli_query($db,"INSERT INTO flogin(name,email,password) values ('".$name."','".$email."','".$password."')");  
         if($sql)           
         header("location:f.html");
     }else ?>
      	<script>
      	<?php
         echo 'alert("Already registered!! Please Log In!!")';
      
   }
?>
</script>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>

<style type="text/css">
	body{
		background-image: url("http://s4.favim.com/orig/48/background-triangles-arrows-Favim.com-463856.jpg");
	}
	#signup{
		left: 38%;
		top:30%;
		position: absolute;
	}
	input{
		border-left:solid 10px black;
		border-radius:5px;
		padding: 8px;
		margin: 5%;
		display: block;
		position: relative;
		border:unset;
		border-bottom: solid 5px black;
		background-color:transparent;
		font-size: 15px;
		font-family:  "Lucida Handwriting", cursive;
		font-weight: bold;
	}
	
	#bg{
		left:5%;
		top:10%;
		right:5%;
		bottom:10%;
		position: absolute;
		background-color:  brown;
		opacity: 0.5;
		border-left:solid 260px black;
		/*border-right:solid 50px black;*/
		z-index: -1;
		border-bottom:solid 260px  brown;
		border-top:solid 260px  brown;
		border-radius: 5px;
		box-shadow: 0px 0px 5px black;
	}
	#s{
		border-radius: 50%;
		width:34%;
		height:31%;
		padding: 20px;
		border:unset;
		position: absolute;
		left: 100%;
		top: 40%;
		color: white;
		padding: 5px;
		border:solid 5px black;
		background-color: black;
		opacity: 0.8;
	}
	h1{
		margin-left: 5%;
		position: relative;
		font-family:  "Lucida Handwriting", cursive;
	}
	a{
		text-decoration: none;
		color: white;
	}
	#a{
		margin-left: 5%;
		font-size: 1.2em;
	}

</style>

<body>
<div id="bg"></div>
<div id="signup">
	
		
	
	<h1>Sign Up </h1>
	<form method="post" action="">
		<input type="text" name="name" placeholder="Full Name" required="" />
		<input type="text" name="email" placeholder="Email" required=""/>
		<input type="password" name="password" placeholder="password" required=""/>
		<input type="submit" value="Sign up" id="s" />
	</form>
	<p id="a">Already registered?<a href="flogin.php"><b>Log In</b></a></p>
</div>
</body>
</html>

