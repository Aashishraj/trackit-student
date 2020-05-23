<html>  
      <head>  
            
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  






           <script>

$(document).ready(function(){

  $(".img-hover-zoom--brightness").hover(function(){
    $(this).delay(100000000000).css({"box-shadow" : "0 8px 16px 0 rgba(255,255,255,0.2), 0 6px 20px 0 rgba(255,255,255,0.19)"})
    }, function(){
    $(this).delay(100000000000).css({"box-shadow" : ""}).delay(100000000000);
  });





});

</script>




           
<style>


body{
	background-color:rgb(0,0,0);
	font-size:20px;
	font-family:"arial";
}





#l1panel{
	background-color:rgb(240,240,240);
	color:black;
	border: 1px solid grey;
	
	display:none;
	z-index:1;
	
}

#l2panel{
	background-color:rgb(200,200,200);
	color:black;
	border: 1px solid grey;
	
	display:none;
	z-index:1;
}





li.hi{

	color:black;
	display:inline-table;
	
	padding-left:20px;
	

	
}






a{	color:black;
	text-decoration:none;
}

#box1{	background-color:#1A1A1A;
	 position:fixed;
	 width:100%;
	 
	 padding-top:0.5%;
      margin-bottom:100px;
	 
      padding-left:5%;
     
      z-index:15;
		
}
#home{
     text-decoration:none;
}

div.wrapper{
     
     display:none;
}





.img-hover-zoom--brightness div{
  transition: transform 0.5s, filter 0.5s ease-in-out;
  transform-origin: center center;
  transform: scale(1);
  filter: brightness(100%);
  overflow: hidden;
  filter: blur(0);
  
}
 

/* The Transformation */
.img-hover-zoom--brightness div:hover{
  filter: brightness(110%);
  transform: scale(1.3);
  filter: blur(0);
}


.img-hover-zoom--brightness div:not(:hover){
     filter: blur(0.5px);
}




</style>

      </head>  
      <body>  



      <div id="box1">

<ul class="upper">

<li class="hi" id="l3" style="padding-left:40%; padding-top:0.5%;">
     <!-- Search form -->
<form class="form-inline md-form form-sm mt-0">
<i class="fas fa-search" aria-hidden="true"></i>
<input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" style=" align-content: center;  border-color:#959595;background-color:rgb(40,40,40);"
aria-label="Search" >
</form>
  
</ul>
</div>






           <br /><br />  <br />  
           <div class="container" style="margin-left:13%; padding:auto;">        
                
                <hr style="color:grey;width:65%;">
                
                <p style="text-align: center;color:#959595;font-size:20px;"><img src="all_students3.jpg" height=25px style="  vertical-align: text-bottom;"> ALL STUDENTS</p>
                '
                <table >  
                     
                <?php  
                session_start();
                $con = mysqli_connect("https://www.db4free.net/phpMyAdmin", "aashishraj", "neopassword");  
                    if(!$con)
	                {die('could not connectr'.mysqli_error($con));}
                    mysqli_select_db($con,"trackit_student");
                $email=$_SESSION['email'];
                $query = "SELECT * FROM users";  
                $result = mysqli_query($con, $query);  
                $i=0;
                while($row = mysqli_fetch_array($result))  
                {  
                    
                    if($i%5==0){
                         echo '<tr>';
                    }
                    $col=$i*60;
                     echo '  
                               <td style="width:10%; padding:0.5%;  margin:10%; white-space:nowrap; border:none; "> 
                               <div class="img-hover-zoom img-hover-zoom--brightness"> 
                               <div id=myImg height=1% width=2% class="img-thumnail" style="background-color:rgb('.$col.',100,10);" /><h2 align="center">'.$row['uname'].'</h2></div>
                                   </div>  
                                     
                               </td>  
                          
                          
                     '
                     ;
                     $i=$i+1;
                     if($i%5==0){
                          echo '</tr>';
                     }

                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  

