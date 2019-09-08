<?php
    if(isset($_POST["btnSubmit"])){     
        $errors = array();
        
        $extension = array("png",
        "jpg",
        "jpeg");
        
        $bytes = 1024;
        $allowedKB = 10000;
        $totalBytes = $allowedKB * $bytes;
        $minwidth=300;
        $minheight = 200;

        if(isset($_FILES["files"])==false)
        {
            echo "<b>Please, Select the files to upload!!!</b>";
            return;
        }
        
        $conn = mysqli_connect("localhost","root","","bdd_site_fede");   
        
        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
        {
            $uploadThisFile = true;
            
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
            
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
            $fileinfo = @getimagesize("../../assets/files/pv/".$_FILES["files"]["name"][$key]);
            $width = $fileinfo[0];
            $height = $fileinfo[1];

            if(!in_array(strtolower($ext),$extension))
            {
                array_push($errors, "File type is invalid. Name:- ".$file_name);
                $uploadThisFile = false;
            }               
            
         // Validate image file dimension
            if ($minwidth < "300" || $minheight < "200") 
            {
                array_push($errors, "Image dimension should be within 300X200. Name:- ".$file_name);
                $uploadThisFile = false;
            }
            if($_FILES["files"]["size"][$key] > $totalBytes){
                array_push($errors, "File size must be less than 10Mb. Name:- ".$file_name);
                $uploadThisFile = false;
            }
            
            if(file_exists("../../assets/img/events/".$_FILES["files"]["name"][$key]))
            {
                array_push($errors, "File name already exists! Name:- ". $file_name);
                $uploadThisFile = false;
            }
            
            if($uploadThisFile){
                $filename=basename($file_name,$ext);
                $newFileName=$filename.$ext;                
                move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../../assets/img/events/".$newFileName);
                
                $query = "INSERT INTO evenement(img_evenement) VALUES('../../assets/img/events/".$newFileName."')";
                
                mysqli_query($conn, $query);            
            }
        }
        
        mysqli_close($conn);
        
        $count = count($errors);
        
        if($count != 0){
            foreach($errors as $error){
                echo $error."<br/>";
                header( "Refresh:3; ../index/createEvent.php", true, 303);
            }
        }  

        else {

            echo "upload réussi";
           header( "Refresh:3; ../index/createEvent.php", true, 303);
        }

    
    }
?>