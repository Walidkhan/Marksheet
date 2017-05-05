<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Students Here</title>
                              <link href="Marksheet.css" rel="stylesheet" type="text/css">
</head>
                       
<body>
    
    
    
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
         
          $astotal="";
         $qtotal="";
         
          
            include 'Marksheetprocess.php';
         
         $result="";
         $dbmstalename="student_marksheet1";
         $webtalename="web_programming";
         $ooptalename="OOPTABLE";
         $userId = $_SESSION['user_id'];
         
          if($userId=="")
         {
            
              header("Location: MarksheetIndex.php");
         }
         else{
         //$userId="555";
         $query= "SELECT * FROM ".$dbmstalename." where Reg_Num=".$userId." union all SELECT * FROM ".$webtalename." where Reg_Num=".$userId." union all SELECT * FROM ".$ooptalename." where Reg_Num=".$userId;
         
        
        $db= new data_connection();
         $result = $db->getData($query);
         
         
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
             
             
         }
        ?>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </table>

</body>
</html>