<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style type="text/css">
body{
	background-color:rgb(30,30,30);
}
/* #box{
	padding:10px;
	padding-right:20%;
	
	margin:auto;
	margin-top:100px;
	font-size:20px;
	width:600px;
	margin-left:20%;
	margin-top:-350px;	
} */
#login{
	background-color:rgb(255,255,255);
	padding:2px 30px;
	padding-bottom:3px;
	border:1px solid rgb(0,0,0);
	border-radius:20px;
	margin-left:120px;
	color:rgb(100,100,100);
	font-size:15px;

}

#main{
	margin-left:300px;
	
	margin-right:300px;
	padding-left:100px;
	padding-right:100px;
	border-radius:25px;
	
	background-color:rgb(240,240,240);
	padding-left:50px;
	padding-right:100px;
	margin-right:100px;
	border:1px solid rgb(220,255,220);
	margin-top:20px;
	margin-right:200px;
	border-width: thick;
	margin-top:50px;
	margin-bottom:50px;
	margin-right:270px;
}
#sign{
	border:1px solid rgb(220,255,220);
	background-color:rgb(250,250,250);
	padding:10px;
	border-radius:10px;
	margin-left: 630px;
	margin-right:630px;
	margin-top:20px;
	margin-bottom:50px;
	border-width:thick;

}
#signin{
	color:rgb(10,200,10);
	background-color:rgb(250,250,250);
	border:1px solid rgb(250,250,250);
	margin:auto;
}


</style>

<scipt >

</head>
<body>
<div id="main">
<p style="color:grey;"><h1>TRACKIT</h1></p>

<p style="color:grey;"><h2>ADMIN</h2></p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
<div id="box" class="line">
  <div class="form-group">
    <label for="exampleInputEmail1">Admin id</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
   
  </div>
<br>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
<br><br>
  

 <input type="submit" name="submit" value="Log in" id="login">
 <br>
 <br>
</div>
</form>
</div>

</body>
</html>





<?php
if(isset($_POST['submit']))

{		
		
	
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	
	if($email==""){
		echo '<script type="text/javascript">';
		echo 'alert("enter the email")';
		echo '</script>';
	}
	else{
	
		if($email=="admin123")
			{
			if($pass=="1234")
				{	$link = "<script>window.open(\"admin_homepage.php\",\"_self\")</script>";
					echo $link;
				}
			
			else{
				echo '<script type="text/javascript">';
				echo 'alert("password not correct")';
				echo '</script>';
				}
			}
		else{
			echo '<script type="text/javascript">';
			echo 'alert("id not correct")';
			echo '</script>';
		}
		

		

	}
}
?>