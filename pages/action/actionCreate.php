<?php
if(isset($_POST["eventform"])){
    
    $errors = array();
    $extension = array("png","jpg","jpeg");
    $bytes = 1024;
    $allowedKB = 10000;
    $totalBytes = $allowedKB * $bytes;
    $minwidth=300;
    $minheight = 200;

    if($_FILES['files']['tmp_name'][0]!=''){

        foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name){

            $uploadThisFile = true;
            $file_name=$_FILES["files"]["name"][$key];
            $file_tmp=$_FILES["files"]["tmp_name"][$key];
            $ext=pathinfo($file_name,PATHINFO_EXTENSION);
            $fileinfo = @getimagesize("../../assets/img/events/".$_FILES["files"]["name"][$key]);
            $width = $fileinfo[0];
            $height = $fileinfo[1];
            $nom = htmlspecialchars($_POST['nom']);
            $description = htmlspecialchars($_POST['description']); 
            $prix = htmlspecialchars($_POST['prix']); 
            $quantite = htmlspecialchars($_POST['quantite']); 
            $date = htmlspecialchars($_POST['date']); 

            if(empty($_POST['nom'])){
                array_push($errors, "Champ vide. Name:- ".$file_name);
                $uploadThisFile = false;
            }
            
            if(!in_array(strtolower($ext),$extension)){
                array_push($errors, "File type is invalid. Name:- ".$file_name);
                $uploadThisFile = false;
            }               
            
            if ($minwidth < "300" || $minheight < "200"){
                array_push($errors, "Image dimension should be within 300X200. Name:- ".$file_name);
                $uploadThisFile = false;
            }

            if($_FILES["files"]["size"][$key] > $totalBytes){
                array_push($errors, "File size must be less than 10Mb. Name:- ".$file_name);
                $uploadThisFile = false;
            }
    
            if($uploadThisFile){
                $newFileName=round(microtime(true)).".".$ext;   
                move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../../assets/img/actions/".$newFileName);
                $img="../../assets/img/actions/".$newFileName;
                $req = $bdd -> prepare("INSERT INTO action(nom, prix, quantite, date_action, img, description, statut) VALUES(?,?,?,?,?,?,?)");
                $req->execute(array($nom,$prix,$quantite,$date,$img,$description,1));
                $req->closeCursor();    
            }

        }
        
        $count = count($errors);
        
        if($count != 0){
            foreach($errors as $error){
                echo "<script type='text/javascript'>alert('$error');</script>";
            }
        }  
        else {
            echo "<h1 style='text-align:center;'> upload réussi</h1>";
        }

    }
     else{

         echo "<script type='text/javascript'>alert('Veuillez sélectionner un fichier!');</script>";
    }

}