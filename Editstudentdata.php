
<?php
session_start();
?>

<!DOCTYPE html>
    <html>

    <head>
                     <title>Editing </title>
    
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
        <h1>Edit student data </h1>
       
        
  <form method="post">
        
        Reg_Num:

                                           <input type="text" name="Reg_Num" placeholder="Enter Reg_num" required />
            Student_name:

                                           <input type="text" name="Student_name" placeholder="Enter Student Name" required />
                                                     Assignments 1 Marks :

                                            <input type="text" name="a1" placeholder="Enter Assignments Marks 1" required />
                                                      Assignments 2 Marks :

                                            <input type="text" name="a2" placeholder="Enter Assignments Marks 2" required />
                                                      Assignments 3 Marks :

                                            <input type="text" name="a3" placeholder="Enter Assignments Marks 3" required />
                                                      Assignments 4 Marks :

                                            <input type="text" name="a4" placeholder="Enter Assignments Marks 4" required />
                                                      Assignments 5 Marks :

                                            <input type="text" name="a5" placeholder="Enter Assignments Marks 5" required />
              Assignments Marks  :

                                            <input type="text" name="Assignments" placeholder="Enter Assignments Marks" required />
                                             
                                                    Quizes Marks 1:
    
                                             <input type="text" name="q1" placeholder="Enter Quizes Marks 1" required/>
                                                    Quizes Marks 2:
    
                                             <input type="text" name="q2" placeholder="Enter Quizes Marks 2" required/>
                                                    Quizes Marks 3:
    
                                             <input type="text" name="q3" placeholder="Enter Quizes Marks 3" required/>
                                                    Quizes Marks 4:
    
                                             <input type="text" name="q4" placeholder="Enter Quizes Marks 4" required/>
                                                    Quizes Marks 5:
    
                                             <input type="text" name="q5" placeholder="Enter Quizes Marks 5" required/>
             Quizes Marks:
    
                                             <input type="text" name="Quizes" placeholder="Enter Quizes Marks" required/>
             Project Marks:
    
                                              <input type="text" name="Project" placeholder="Enter Project Marks" required />
            Mid_term Marks:
    
                                              <input type="text" name="Mid_term" placeholder="Enter Mid Term  Marks" required />
            Sessional Marks:
    
                                               <input type="text" name="Sessional" placeholder="Enter Sessionals Marks" required />
                                                    
            Final_term Marks:
                                               <input type="text" name="Final_term" placeholder="Enter Final Term Marks" required />
            Bonus Marks:
                                               <input type="text" name="Bonus" placeholder="Enter Bonus Marks" required />
                                                    

        
        <input type="submit" value="save" name="loginbtn">
         
      </form>
        
    
        
        </div>
        
        
        </body>
</html>


            <?php

            include 'Marksheetprocess.php';
          
            $TableId = $_SESSION["ButtonId"];

            $db = new data_connection();

            $id = $_GET['id'];



             if(isset($_POST["loginbtn"]))
             {

           $Reg_Num          =    $_POST["Reg_Num"];
           $Student_name     =    $_POST["Student_name"];
                   $a1      =    $_POST["a1"];
                   $a2     =    $_POST["a2"];
                   $a3      =    $_POST["a3"];
                   $a4      =    $_POST["a4"];
                   $a5      =    $_POST["a5"];
            $Assignments      =    $_POST["Assignments"];
           
                $q1      =    $_POST["q1"];
                $q2     =    $_POST["q2"];
                $q3      =    $_POST["q3"];
                $q4      =    $_POST["q4"];
                $q5      =    $_POST["q5"];
               
          
           $Quizes           =    $_POST["Quizes"];
            $Project         =    $_POST["Project"];
            $Mid_term        =    $_POST["Mid_term"];
            $Sessional       =    $_POST["Sessional"];
            $Final_term      =    $_POST["Final_term"];
              $Bonus         =    $_POST["Bonus"];
     
     if($TableId=="1")
           {
               $_SESSION["TableID"]="1";
                $query = "UPDATE student_marksheet1 (Reg_Num,Student_name,a1,a2,a3,a4,a5,Assignments,q1,q2,q3,q4,q5,Quizes,Project,Mid_term,Sessional,Final_term,Bonus)
     
           VALUES (' $Reg_Num ','$Student_name','$a1','$a2','$a3','$a4','$a5',
           '$Assignments ','$q1','$q2','$q3','$q4','$q5',' $Quizes ','$Project ',' $Mid_term','$Sessional','$Final_term','$Bonus')";
           
           }
           else if($TableId=="2"){
               $_SESSION["TableID"]="2";
                $query = "UPDATE web_programming (Reg_Num,Student_name,a1,a2,a3,a4,a5,Assignments,q1,q2,q3,q4,q5,Quizes,Project,Mid_term,Sessional,Final_term,Bonus)
     
           VALUES (' $Reg_Num ','$Student_name','$a1','$a2','$a3','$a4','$a5',
           '$Assignments ','$q1','$q2','$q3','$q4','$q5',' $Quizes ','$Project',' $Mid_term ','$Sessional','$Final_term','$Bonus')";
           
           }
           else if($TableId=="3"){
               $_SESSION["TableID"]="3";
                $query = "UPDATE ooptable (Reg_Num,Student_name,a1,a2,a3,a4,a5,Assignments,q1,q2,q3,q4,q5,Quizes,Project,Mid_term,Sessional,Final_term,Bonus)
     
           VALUES (' $Reg_Num ','$Student_name','$a1','$a2','$a3','$a4','$a5',
           ' $Assignments ','$q1','$q2','$q3','$q4','$q5',' $Quizes ','$Project ',' $Mid_term','$Sessional','$Final_term','$Bonus')";
           
           }
    
             $result=$db->UPDATEDATA($query);
            echo $result;
            
           header('Location:StudentMarks.php');

       }

?>


     
     
     
     
     
     
     
     
     
    