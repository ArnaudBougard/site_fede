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
            $lieu = htmlspecialchars($_POST['lieu']);
            $linkFB = htmlspecialchars($_POST['link']);
            $date =htmlspecialchars($_POST['date']);
            $description = htmlspecialchars($_POST['description']); 
            $ouverture =$_POST['ouverture'];
            $organisateur = $_SESSION['pseudo_utilisateur'];

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
                move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../../assets/img/events/".$newFileName);
                $img="../../assets/img/events/".$newFileName;
                $req = $bdd -> prepare("INSERT INTO evenement(img_evenement, nom_evenement, description_evenement, date_evenement, ouverture_evenement,organisateur,lieu_evenement,link_evenement) VALUES(?,?,?,?,?,?,?,?)");
                $req->execute(array($img,$nom,$description,$date,$ouverture,$organisateur,$lieu,$linkFB));
                $req->closeCursor(); // Termine le traitement de la requête
                redirect("./eventManager.php");
                
            }

        }
        
        $count = count($errors);
        
        if($count != 0){
            foreach($errors as $error){
                echo "<script type='text/javascript'>alert('$error');</script>";
            }
        }  
        else {
            echo "<h1 style='text-align:center;'>Upload réussi</h1>";
        }

    }
    else{
        echo "<script type='text/javascript'>alert('Veuillez sélectionner un fichier!');</script>";
    }

}