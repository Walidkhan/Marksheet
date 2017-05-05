<?php
session_start();
?>
<!DOCTYPE html>

<html>

<head>
    
    <title>Student result</title>
    
                        <link href="Marksheet.css" rel="stylesheet" type="text/css">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

                               <!-- jQuery library -->
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

                             <!-- Latest compiled JavaScript -->
                              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    
    

    
              </head>
             <style>
body  {
           background-image: url("flwer.jpg");
           background-color: darksalmon;
      }
                 
 h1  {
           background : burlywood;
           color: aquamarine;
            font-family: verdana;
            font-size: 200%;
          border: 1px solid powderblue;
         padding: 20px;
         margin: 50px;
        text-align: center;
        text-decoration-line: underline;
        border-radius: 20px;
                                 
      }
                 
         </style>
    
           <body> 
    
    
                                     <h1>Student Marksheet</h1>
    

    
                              <div class="container">
     <form method="post">
                                      
                                      
                                      <input type="submit" class="btn btn-primary" name="DBMSButton" value="DBMS">
                                      <input type="submit" class="btn btn-primary" name="webButton" value="Web Programming Language">
                                      <input type="submit" class="btn btn-primary" name="OOPButton" value="OOP">
     <div class="container">
  
  
     <div class="btn-group btn-group-justified">
  
         </div>
         </div>
        </div>
        
        
    <div class="container">
                                         
    <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> student------Assignments
    
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <li><a href="assignment.php">show student Assignments</a></li>
        <li><a href="addassignment.php">Add student Assignments Marks</a></li>
      
        </ul>
        </div>
        </div>
        <div class="container">
        </div>

        <nav class="navbar navbar-inverse">
        <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="Addstudents.php">Add New Student Marks</a>
        <a class="navbar-brand" href="MarksheetIndex.php">logout</a>
        </div>
        <ul class="nav navbar-nav">
        </ul>
       </div>
       </nav>
                                  
                                  
                                  
                                  
       <table class="vitamins">
        
      <thead>
         
            <tr>
                 
                <th>Reg_Num</th>
                <th>Student_name</th>
                <th>A1 </th>
                <th>A2 </th>
                <th>A3 </th>
                <th>A4 </th>
                 <th>A5 </th>
                <th>Assignments </th>
                <th>Assignments (AVG)</th>
                 <th>Q1</th>
                <th>Q2</th>
                <th>Q3</th>
                <th>Q4</th>
                <th>Q5</th>
                 <th>Quizes</th>
                <th>Quizes (AVG)</th>
                <th>Project   (10)</th>
                <th>MidTerm(30)</th>
                <th>Sessional(50)</th>
                <th>Finalterm (50)</th>
                <th>Bonus marks </th>
                <th>Total marks </th>   
                
            </tr>
           </thead>
  

 
         <?php
         
         $SESSIONLOCKID = $_SESSION["PageId"];
          $astotal="";
         $qtotal="";
          if($SESSIONLOCKID=="")
         {
            
              header("Location: MarksheetIndex.php");
         }
         else{
          
            include 'Marksheetprocess.php';
         
         $result="";
         $query= "Select id, Reg_Num, 
                             Student_name,a1,a2,a3,a4,a5,
                            Assignments,q1,q2,q3,q4,q5,
                             	Quizes,Project,Mid_term,Sessional,Final_term,Bonus

                      From ";
         $dbmstalename="student_marksheet1";
         $webtalename="web_programming";
         $ooptalename="OOPTABLE";
         $SESSIONID = $_SESSION["TableID"];
         
        
        $db= new data_connection();
         
        if(isset($_POST["DBMSButton"]))
         {
             $_SESSION["SessionTableName"]="student_marksheet1";
             $_SESSION["ButtonId"]="1";
             $query =$query.$dbmstalename;
              $result = $db->getData($query);
            

         }
         else if(isset($_POST["webButton"]))
         {
             
             $_SESSION["SessionTableName"]="web_programming";
             $_SESSION["ButtonId"]="2";
             $query =$query.$webtalename;
              $result = $db->getData($query);

         }
         else if(isset($_POST["OOPButton"]))
         {
             
             $_SESSION["SessionTableName"]="OOPTABLE";
             $_SESSION["ButtonId"]="3";
             $query =$query.$ooptalename;
              $result = $db->getData($query);

         }
         else if($SESSIONID=="1")
         {
              $query =$query.$dbmstalename;
              $result = $db->getData($query);
         }
         else if($SESSIONID=="2")
         {
              $query =$query.$webtalename;
              $result = $db->getData($query);
         }
         else if($SESSIONID=="3")
         {
             $query =$query.$ooptalename;
              $result = $db->getData($query);
         }
         
            
            
         if($result!="")
         {
             
           
            while( $row = mysqli_fetch_assoc($result) )
            {
              ?>
              <tr>
                <td>
                  <?php 
                    echo $row['Reg_Num'] ;  
                  ?>
                </td>

                <td>
                  <?php 
                    echo $row['Student_name'] ;  
                  ?>
                </td>
                <td>
                  <?php 
                    echo $row['a1'] ;  
                  ?>
                </td>
                  <td>
                  <?php 
                    echo $row['a2'] ;  
                  ?>
                </td>
                  <td>
                  <?php 
                    echo $row['a3'] ;  
                  ?>
                </td>
                  <td>
                  <?php 
                    echo $row['a4'] ;  
                  ?>
                </td>
                  <td>
                  <?php 
                    echo $row['a5'] ;  
                  ?>
                </td>
                  <td>
                  <?php 
                    echo $row['Assignments'] ;  
                  ?>
                </td>
                         <td>
                  <?php 
             $astotal= $row['a1']+$row['a2']+$row['a3']+$row['a4']+$row['a5']+$row['Assignments']/6;
                echo $astotal;
                
                  ?>
                </td>

                   <td>
                  <?php 
                    echo $row['q1'] ;
               
                  ?>
                </td>
                   <td>
                  <?php 
                    echo $row['q2'] ;
               
                  ?>
                </td>
                   <td>
                  <?php 
                    echo $row['q3'] ;
               
                  ?>
                </td>
                   <td>
                  <?php 
                    echo $row['q4'] ;
               
                  ?>
                </td>
                   <td>
                  <?php 
                    echo $row['q5'] ;
               
                  ?>
                </td>
                <td>
                  <?php 
                    echo $row['Quizes'] ;
               
                  ?>
                </td>
                           <td>
                  <?php 
             $qtotal= $row['q1']+$row['q2']+$row['q3']+$row['q4']+$row['q5']+$row['Quizes']/6;
                echo $qtotal;
                
                  ?>
                </td>
                  
                  <td>
                  <?php 
                    echo $row['Project'] ;
                  ?>
                </td>
                  <td>
                  <?php 
                    echo $row['Mid_term'] ;
                  ?>
                </td>
                  <td>
                  <?php 
                    echo $row['Sessional'] ;
                  ?>
                </td>
                  <td>
                  <?php 
                    echo $row['Final_term'] ;
                  ?>
                </td>
                   <td>
                  <?php 
                    echo $row['Bonus'] ;
                  ?>
                </td>
                  
                   <td>
                  <?php 
                    $total=$astotal+$qtotal+$row['Project']+$row['Mid_term']+$row['Sessional']+$row['Final_term']+$row['Bonus'] ;
                echo $total;
                  ?>
                </td>

                <td>
                   <a href="Editstudentdata.php?id=<?php echo $row['id'] ; ?>"> Edit </a>
                   | 
                   <a href="DeleteData.php?id=<?php echo $row['id']; ?>"> Delete </a>
                </td>
              </tr>

              <?php
            } // end of while

         }//end of if 
             
                
         }//end of else 
        ?>
           
           

    
       
    
    
    

        
    </table> 
    </div>
    
    </body>

   </html>