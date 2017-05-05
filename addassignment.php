
<?php
include 'Marksheetprocess.php';


$Reg_Num="";
$Student_name="";
$courseID="";
$a1="";
$a2="";
$a3="";
$a4="";
$a5="";
$a6="";
$a7="";
$a8="";
$a9="";
$a10="";


            $db= new data_connection ();
            
       if(isset($_POST["addButton"]))
       {
           $Reg_Num      =    $_POST["Reg_Num"];
           $Student_name   =    $_POST["Student_name"];
           $courseID=$_POST[""];
          
           $a1      =    $_POST["a1"];
           $a2      =    $_POST["a2"];
           $a3     =    $_POST["a3"];
           $a4     =    $_POST["a4"];
          $a5      =    $_POST["a5"];
           $a6     =    $_POST["a6"];
           $a7    =    $_POST["a7"];
           $a8    =    $_POST["a8"];
           $a9    =    $_POST["a9"];
           $a10    =    $_POST["a10"];
           
           


     $query = "INSERT INTO assignment (Reg_Num,Student_name,courseId,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10)
     
           VALUES ('$Reg_Num','$Student_name','$courseID','$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";
           
             $db->insertData($query);
            //Redirect("./automobile.php");
           header('Location:assignment.php');

       }

?>


<!DOCTYPE html>
<html>
<head>
<title>Add Students Here</title>
                              <link href="Marksheet.css" rel="stylesheet" type="text/css">
</head>
                        <style>
                    input[type=text], select {
                        width: 100%;
                        padding: 12px 20px;
                        margin: 8px 0;
                        display: inline-block;
                        border: 1px solid #ccc;
                        border-radius: 4px;
                        box-sizing: border-box;
                    }

                    input[type=submit] {
                        width: 100%;
                        background-color:grey;
                        color: white;
                        padding: 14px 20px;
                        margin: 8px 0;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                    }

                    input[type=submit]:hover {
                        background-color: green;
                    }

                    div {
                        border-radius: 5px;
                        background-color:darkslategray;
                        padding: 20px;
                    }
                    </style>
<body>
    
    
<div class="container">
<h1>Enter Marks of Student  </h1>
                                                <form method="post">
            Reg_Num:

                                           <input type="text" name="Reg_Num"  required />
            Student_name:

                                           <input type="text" name="Student_name"  required />
             Assignments 1:

                                           <input type="text" name="a1"  required />
             Assignments 2:

                                           <input type="text" name="a2"  required />
              Assignments 3 :

                                            <input type="text" name="a3"  required />
             Assignments 4:
    
                                             <input type="text" name="a4" required/>
           Assignments 5:
    
                                              <input type="text" name="a5" required />
             Assignments 6:
    
                                              <input type="text" name="a6"  required />
            Assignments 7:
    
                                               <input type="text" name="a7"  required />
                                                    
            Assignments 8:
                                               <input type="text" name="a8" required />
            Assignments 9:
                                               <input type="text" name="a9"  required />
          Assignments 10:
                                               <input type="text" name="a10" required />
                                              
    


<input type="submit" name="addButton" value="Add">

</form>

</div>
</body>
</html>