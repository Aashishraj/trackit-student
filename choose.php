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


#main{
	border-radius:25px;
	
	background-color:rgb(240,240,240);
	border:1px solid rgb(220,255,220);
	
	border-width: thick;
	margin:5%;
	padding:2%;
}

#signin{
	color:rgb(10,200,10);
	background-color:rgb(250,250,250);
	border:1px solid rgb(250,250,250);
	
	padding-left:4%;
	padding-right:4%;
	
	margin:auto;
	margin-top:2%;
}


</style>



</head>
<body>
<div id="main">
<p style="color:grey; padding:2%;"><h1 align="center">TRACKIT</h1></p>


<p align="center"><button  onclick="admin()" id="signin"><h2 align="center">Admin</h2></button></p>
<p align="center"><button  onclick="student()" id="signin"><h2 align="center">Student</h2></button></p>

</div>

<script >
	function admin(){
		window.open("admin_login.php","_self");
	}
    function student(){
		window.open("student_login.php","_self");
	}


</script>

</body>
</html>


