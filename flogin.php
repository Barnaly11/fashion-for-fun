<?php
	include 'fconfig.php';
	
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
       
      $email = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT name FROM flogin WHERE email = '".$email."' and password = '".$password."'";
      $result = mysqli_query($db,$sql);
      $c = mysqli_num_rows($result);
     
      if($c == 1) {
         
         $_SESSION['login_user'] = $email;
         
         header("location: f.html");
      }else 
      ?>
      	<script>
      	<?php
         echo 'alert("Your Email or Password is invalid")';
      
   }
?>
</script>
<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<style>
body{
		background-image: url("http://s4.favim.com/orig/48/background-triangles-arrows-Favim.com-463856.jpg");
		
	}
	#login{
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
		background-color:  #99ff99;
		opacity: 0.5;
		border-left:solid 260px black;
		/*border-right:solid 50px black;*/
		z-index: -1;
		border-bottom:solid 260px  #99ff99;
		border-top:solid 260px  #99ff99;
		border-radius: 5px;
		box-shadow: 0px 0px 5px black;
	}
	#s{
		border-radius: 50%;
		width:30%;
		height:35%;
		padding: 20px;
		border:unset;
		position: absolute;
		left: 100%;
		top: 45%;
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
</style>

<body>
<div id="bg"></div>
<div id="login">
	
		
	
	<h1>Log In </h1>
	<form method="post" action="">
		<input type="text" name="email" placeholder="Email" required=""/>
		<input type="password" name="password" placeholder="password" required=""/>
		<input type="submit" value="Log In" id="s" />
	</form>
</div>
</body>
</html>