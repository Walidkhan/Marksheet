
<?php

include 'Marksheetprocess.php';

$user_name="";
$password="";
session_start();

            $db= new data_connection();
           
       if(isset($_POST["loginbtn"]))
       {
          
           $user_name     =    $_POST["username"];
           $password     =    $_POST["mypassword"];
           
         $query = "SELECT * from mlogin 
                      Where user_name='$user_name' 
                      and Password='$password' ";

           // include 'db_connect.php';

           
            $result = $db->getData($query);

            if( mysqli_num_rows($result) > 0 )
            {
              $row = mysqli_fetch_assoc($result);

              $_SESSION['user_id'] = $row['user_name'];
                $role=$row['Role'];
                
              // goto next page
              // redirect to other page
                if($role=='1')
                {
                     $_SESSION["PageId"]="1";
                     $_SESSION["TableID"]="0";
                     header("Location: wellcome.php");
                    
                }
                 else if($role=='2')
                {
                    //call student page 
                     header("Location: student_mainPage.php");
                }
                 else
                 {
                     echo ' <script> alert("Your role are not define");  </script> ';
                    break;
                 }
                 //echo ' <script> alert("User name and Password is correct");  </script> ';
                
              
            }
            else
            {
                 echo ' <script> alert("user name and password not exsits.");  </script> ';   
              
            }
          
       }
       
?>
                            <form method="POST">

<!DOCTYPE html>


                <html>
   
                <head>
                                       <meta charset="utf-8">
                                    <title>STUDENT  SCORE BOARD </title>
     
                              <link href="Marksheet.css" rel="stylesheet" type="text/css">
    
                 </head>
                    <style>
                        
                        body{
	margin:0;
	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;
                            
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	-webkit-transform:rotateY(180deg);
	        transform:rotateY(180deg);
	-webkit-backface-visibility:hidden;
	        backface-visibility:hidden;
	-webkit-transition:all .4s linear;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	-webkit-perspective:1000px;
	        perspective:1000px;
	-webkit-transform-style:preserve-3d;
	        transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}

.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	-webkit-transition:all .2s ease-in-out 0s;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	-webkit-transform:scale(0) rotate(0);
	        transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	-webkit-transform:scale(1) rotate(45deg);
	        transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	-webkit-transform:scale(1) rotate(-45deg);
	        transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	-webkit-transform:rotate(0);
	        transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}

                    
                    
                    </style>
    
    
                  <body>
                      <form method="POST">
                             
                          
                          
                              <div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Username/Reg_Num</label>
					<input id="user" type="text" name="username" name="username" placeholder="User_name/Reg_num" required class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" name="mypassword" placeholder="Enter password" required class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					
				</div>
				<div class="group">
					<input type="submit" value="Login" name="loginbtn" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					
                     <label for="tab-1">Abasyn University Islamabad Campus</label>
				</div>
		
			
				
				
				
			</div>
		</div>
	</div>
</div>
  
                      </form>
                  </body>
                  </html> 

