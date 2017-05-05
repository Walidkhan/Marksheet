<!DOCTYPE html>

<html>

<head>
    
    <title>Student Assignments</title>
        
<link href="Marksheet.css" rel="stylesheet" type="text/css">
    

    
    </head>
       <style>
body  {
    background-image: url("sea.jpg");
    background-color: darksalmon;
}
  h1 {
     background : burlywood;
    color: aquamarine;
    font-family: verdana;
    font-size: 200%;
     border: 1px solid powderblue;
    font-style: italic;
    padding: 20px;
     margin: 50px;
  text-align: center;
 text-decoration-line: underline;
      border-radius: 25px;
                      
            
}         
</style>
<body>
    <h1>Assignments DATA</h1>
    
    
    <table class="vitamins">
        
        <thead>
            <tr>
                <th>Reg_Num</th>
                <th>Student_name</th>
                <th>Assignment 1</th>
                <th>Assignment 2</th>
                <th>Assignment 3</th>
                <th>Assignment 4</th>
                <th>Assignment 5</th>
                <th>Assignment 6</th>
                <th>Assignment 7</th>
                <th>Assignment 8</th>
                <th>Assignment 9 </th>
                <th>Assignment 10 </th>
                <th>Assignment(AVG) </th>
                
               
              
                 
                
            </tr>
        </thead>
  

 
         <?php

            include 'Marksheetprocess.php';

                $db= new data_connection();

            $query = "Select id,Reg_Num,Student_name,a1,a2,a3,a4,a5,a6,a7,a8,a9,a10 
                            

                      From assignment";

            $result = $db->getData($query);
        
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
                    echo $row['a6'] ;
                  ?>
                </td>
                  <td>
                  <?php 
                    echo $row['a7'] ;
                  ?>
                </td>
                  <td>
                  <?php 
                    echo $row['a8'] ;
                  ?>
                </td>
                   <td>
                  <?php 
                    echo $row['a9'] ;
                
                  ?>
                </td>
                    <td>
                  <?php 
                    echo $row['a10'] ;
                
                  ?>
                </td>
                      <td>
                  <?php 
             $total= $row['a1']+$row['a2']+$row['a3']+$row['a4']+$row['a5']+$row['a6']+$row['a7']+$row['a8']+$row['a9']+$row['a10'];
                echo $total/10;
                
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

       
             
                
     
        ?>
        
        
        
    </table> 

    </body>

   </html>