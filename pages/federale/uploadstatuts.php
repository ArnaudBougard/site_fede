<?php
    if(isset($_POST["btnSubmit"])){     
        $errors = array();
        
        $extension = array("pdf");
        
        $bytes = 1024;
        $allowedKB = 1024;
        $totalBytes = $allowedKB * $bytes;
        
        if(isset($_FILES["files"])==false)
        {
            echo "<b>Please, Select the file to upload!!!</b>";
            return;
        }
        
        $conn = mysqli_connect("localhost","root","","bdd_site_fede");   
        
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
        {
            $uploadThisFile = true;
            
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
            
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);

            if(!in_array(strtolower($ext),$extension))
            {
                array_push($errors, "File type is invalid. Name:- ".$file_name);
                $uploadThisFile = false;
            }               
            
            if($_FILES["files"]["size"][$key] > $totalBytes){
                array_push($errors, "File size must be less than 1024KB. Name:- ".$file_name);
                $uploadThisFile = false;
            }
            
            if(file_exists("../../assets/files/".$_FILES["files"]["name"][$key]))
            {
                array_push($errors, "File name already exists! Name:- ". $file_name);
                $uploadThisFile = false;
            }
            
            if($uploadThisFile){
                $filename=basename($file_name,$ext);
                $newFileName=$filename.".".$ext;                
                move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../../assets/files/".$newFileName);
            
                $query = "INSERT INTO statuts(statuts_path, statuts_name) VALUES('../../assets/files/','".$newFileName."')";
                
                mysqli_query($conn, $query); 

                include("../../model/dao/redirect.php"); 
                redirect("./statuts.php");           
            }
        }
        
        mysqli_close($conn);
        
        $count = count($errors);
        
        if($count != 0){
            foreach($errors as $error){
                echo $error."<br/>";
            }
        }       
    }
?>