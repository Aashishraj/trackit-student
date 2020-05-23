<html>
    <head>
        <title>
            Student Page
        </title>
    </head>
    <style>
        body{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            background-color:rgb(0,0,0);
            overflow: auto;
        }
        td{
            text-align: center;
        }

        .student_details{
            /* width: 30%; */
            /* min-width: 20%; */
            display: table;
            min-width: fit-content;
            float: left;
            padding: 30px;
            
            margin:auto;
            /* border: 1px solid red; */
            border-radius: 25px;
            text-align: center;
            background-color: white;
            
        }
        #main_content{
            /* width: 70%; */
            min-width: fit-content;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            
            padding:5%;
             /* margin-right: 25%;  */
            margin:1%;
            
            /* border: 1px solid red; */
            border-radius: 25px;
            background-color: white;
        }  

        img{
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        .student_details .table{
        
            padding:15%;
            /*border: 1px solid red;*/
        }
        .iteration_box{
            width: 50%;
            padding: 15px;
            background-color: lightgray;
            border-radius: 50px;
            font-size: large;
        }
        .zone_box{
            width: 50%;
            padding: 15px;
            background-color: lightgray;
            border-radius: 50px;
            background-color: red;
            font-weight: 900;
            color : white;
            font-size: large;
        }
        iframe{
            border-radius: 25px;
        }
    </style>
    <body>


        <div class="student_details">
            <h1>STUDENT DETAILS</h1>
            <br>
            <!-- <img src="hackathon_student_image.jpg" alt="Student Image"> -->
            <br>
            <br>

            <table class="table" cellspace="0" cellpadding="25" style="border:none;white-space:nowrap;width:40%; padding:5%;">
            
            
            <?php  
                session_start();
                $con = mysqli_connect("db4free.net", "aashishraj", "hello123");  
                    if(!$con)
	                {die('could not connectr'.mysqli_error($con));}
                    mysqli_select_db($con,"trackit_student");
                $email=$_SESSION['email'];
                $query = "SELECT * FROM users where email=\"$email\"";  
                $result = mysqli_query($con, $query);  
                $i=0;
               while( $row = mysqli_fetch_array($result)){  
                echo'
                <tr>
                    <td>Student ID: </td>
                    <td>'.$row['uname'].'</td>
                </tr>
                
                <tr>
                    <td>email id: </td>
                    <td>'.$row['Email'].'</td>
                </tr>

                <tr>
                    <td>Course: </td>
                    <td>Web Technologies</td>
                </tr>
                <tr>
                    <td>Faculty: </td>
                    <td>Divya Udayan J.</td>
                </tr>

                ';
            }

                ?>
            </table>
        </div>


        <div id="main_content"><iframe src="http://localhost/track/admin_homepage.php" width="500" height="500"></iframe>
        <br>
        <br>
        <br>
        <table width=500>
            <tr>
                <td class="iteration_box">Iterations: 5</td>
                <td class="zone_box">Red Zone</td>
            </tr>
        </table>
        </div>

    </body>
</html>
