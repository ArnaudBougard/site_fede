
<?php
    if(isset($_POST["chantform"])){     
        $errors = array();
        
        $extension = array("WAV",
        "WMA",
        "mp3",
        "m4a",
        "MP4");
        
        $bytes = 1024;
        $allowedKB = 10000;
        $totalBytes = $allowedKB * $bytes;


        if($_FILES['files']['tmp_name'][0]!='')
        {
               
            foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
            {
                $uploadThisFile = true;
                
                $file_name=$_FILES["files"]["name"][$key];
                $file_tmp=$_FILES["files"]["tmp_name"][$key];
                
                $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                
                $nom = htmlspecialchars($_POST['nom']);
                $parole =htmlspecialchars($_POST['parole']);
                $description = htmlspecialchars($_POST['description']); 
                
                /*if(!empty($nom) AND !empty($date) AND !empty($organisateur) )
                {
                    array_push($errors, "Champ vide. Name:- ".$file_name);
                    $uploadThisFile = false;
                }*/

                if(empty($_POST['nom']) )
                {
                    array_push($errors, "Champ vide. Name:- ".$file_name);
                    $uploadThisFile = false;
                }
                

                if(!in_array(strtolower($ext),$extension))
                {
                    array_push($errors, "File type is invalid. Name:- ".$file_name);
                    $uploadThisFile = false;
                }               
                
             // Validate image file dimension
                
                if($_FILES["files"]["size"][$key] > $totalBytes){
                    array_push($errors, "File size must be less than 10Mb. Name:- ".$file_name);
                    $uploadThisFile = false;
                }
                
                if(file_exists("../../assets/audio/".$_FILES["files"]["name"][$key]))
                {
                    array_push($errors, "File name already exists! Name:- ". $file_name);
                    $uploadThisFile = false;
                }
                
                if($uploadThisFile){
                    $filename=basename($file_name,$ext);
                    $newFileName=$filename.$ext;                
                    move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../../assets/audio/".$newFileName);
                    $path="../../assets/audio/".$newFileName;
                    $req = $bdd -> prepare("INSERT INTO chant(parole_chant, description_chant, nom_chant, path_chant) VALUES(?,?,?,?)");
                    $req->execute(array($parole,$description,$nom,$path));

                    $req->closeCursor(); // Termine le traitement de la requête

                    redirect("./chants.php");
                    
                }
            }
            
            $count = count($errors);
            
            if($count != 0){
                foreach($errors as $error){
                    echo $error."<br/>";    
                }
            }  

            else {
                echo "<h1 style='text-align:center;'> upload réussi</h1>";
            }

        }else
        {

             echo "<script type='text/javascript'>alert('Veuillez sélectionner un fichier!');</script>";
        }
    }
?>