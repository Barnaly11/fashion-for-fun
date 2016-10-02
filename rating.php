<!DOCTYPE html>
<html >
<head>
	<title>Rating</title>
	<meta charset="utf-8"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
</head>

<style type="text/css">
fieldset, label 
{ 
	margin: 0; 
	padding: 0; 

}
body
{
	margin: 20px; 
}
h1 
{ 
	font-size: 1.5em; 
	margin: 10px; 

}

.rating { 
  border: none;
  float: left;

}
.rating input:after{
	display: none;
}

.rating  input 
{ 
	
	display: none;
	
} 
.rating  label:before { 
  
  font-size: 3.25em;
  font-family:none;
  display: inline-block;
  content: "";
  margin: 0em;
  padding: 0.2em;
  position: absolute;
}

.rating > .stars:before { 
  content: "\2726";
  position: relative;
  left: 0.5em;
  top: 0em;
  z-index: 1;
}

.rating > label { 
  color: #ddd; 
 float: right; 

}

.rating  input:checked ~ label, 
.rating:not(:checked) > label:hover, 
.rating:not(:checked) > label:hover ~ label 
{ 
	color: #FFD700;  /*yellow*/

} 





</style>

<body>

   <fieldset class="rating" method="post" id="fieldset" >
   
    <input type="radio" id="star5" name="rating" value="5"  /><label class = "stars" for="star5" title="5 stars" ></label>
    
    <input type="radio" id="star4" name="rating" value="4" /><label class = "stars" for="star4" title="4 stars" ></label>
    
    <input type="radio" id="star3" name="rating" value="3" /><label class = "stars" for="star3" title="3 stars" ></label>
    
    <input type="radio" id="star2" name="rating" value="2" /><label class = "stars" for="star2" title="2 stars"></label>
    
    <input type="radio" id="star1" name="rating" value="1" /><label class = "stars" for="star1" title="1 star"></label>
	</fieldset>

<p></p>



 <script type="text/javascript">
 $(document).ready(function(){
 	
 	$('input:radio').click(function(){
 	<?php
 		if(isset($_SESSION['user']))
 		{
 	?>	
 		var rating=this.value;
 		alert(rating);

 	<?php
 		}
 		else
 		echo 'alert("please log in !!")';

 	?>
 	});
 	
 	 });
 </script>
</body>
</html>
