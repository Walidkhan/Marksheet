<?php

            session_start();

            include 'Marksheetprocess.php';
               $db= new data_connection();
            $tableName=$_SESSION["SessionTableName"];
            $id = $_GET['id'];

            if($tableName=="student_marksheet1")
            {
               $query = "Delete FROM student_marksheet1 WHERE id='".$id."'";


                $db->DeleteData($query);
                $_SESSION["TableID"]="1";

             Header("Location: ./StudentMarks.php"); 
            }
            else if($tableName=="web_programming")
            {
               $query = "Delete FROM web_programming WHERE id='".$id."'";
                $db->DeleteData($query);
                $_SESSION["TableID"]="2";

             Header("Location: ./StudentMarks.php"); 
            }
            else if($tableName=="OOPTABLE")
            {
               $query = "Delete FROM OOPTABLE WHERE id='".$id."'";
                $db->DeleteData($query);
                $_SESSION["TableID"]="3";

             Header("Location: ./StudentMarks.php"); 
            }




            ?> 