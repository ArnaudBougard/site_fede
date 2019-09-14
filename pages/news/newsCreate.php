
<?php
    if(isset($_POST["eventform"])){
        $errors = array();
        
        $extension = array("png",
        "jpg",
        "jpeg");
        
        $bytes = 1024;
        $allowedKB = 10000;
        $totalBytes = $allowedKB * $bytes;
        $minwidth=300;
        $minheight = 200;

        if($_FILES['files']['tmp_name'][0]!='') // s'il y a bien un fichier
        {
 
            foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
            {
                $uploadThisFile = true;
                
                $file_name=$_FILES["files"]["name"][$key];
                $file_tmp=$_FILES["files"]["tmp_name"][$key];
                
                $ext=pathinfo($file_name,PATHINFO_EXTENSION);
                $fileinfo = @getimagesize("../../assets/img/events/".$_FILES["files"]["name"][$key]);
                $width = $fileinfo[0];
                $height = $fileinfo[1];

                $nom = htmlspecialchars($_POST['nom']);
                $article = htmlspecialchars($_POST['article']); 
                $auteur = $_SESSION['pseudo_utilisateur'];

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
                if ($minwidth < "300" || $minheight < "200") 
                {
                    array_push($errors, "Image dimension should be within 300X200. Name:- ".$file_name);
                    $uploadThisFile = false;
                }
                if($_FILES["files"]["size"][$key] > $totalBytes){
                    array_push($errors, "File size must be less than 10Mb. Name:- ".$file_name);
                    $uploadThisFile = false;
                }
                
                if(file_exists("../../assets/img/news/".$_FILES["files"]["name"][$key]))
                {
                    array_push($errors, "File name already exists! Name:- ". $file_name);
                    $uploadThisFile = false;
                }
        
                if($uploadThisFile){
                    $filename=basename($file_name,$ext);
                    $newFileName=$filename.$ext;                
                    move_uploaded_file($_FILES["files"]["tmp_name"][$key],"../../assets/img/news/".$newFileName);
                    $img="../../assets/img/news/".$newFileName;

                    $req = $bdd -> prepare("INSERT INTO news(nom_news,article_news, auteur, img_news) VALUES(?,?,?,?)");
                    $req->execute(array($nom,$article,$auteur,$img));

                    $req->closeCursor(); // Termine le traitement de la requête

                    // redirect("./newsManager.php");
                    
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
            foreach($_FILES["files"]["tmp_name"] as $key=>$tmp_name)
            {
                $uploadThisFile = true;
                
                $nom = htmlspecialchars($_POST['nom']);
                $article = htmlspecialchars($_POST['article']); 
                $auteur = $_SESSION['pseudo_utilisateur'];

                if(empty($_POST['nom']) )
                {
                    array_push($errors, "Champ vide. Titre:- ".$file_name);
                    $uploadThisFile = false;
                }

                if(empty($_POST['article']) )
                {
                    array_push($errors, "Champ vide. Article:- ".$file_name);
                    $uploadThisFile = false;
                }

                if($uploadThisFile){
                   

                    $req = $bdd -> prepare("INSERT INTO news(nom_news,article_news, auteur) VALUES(?,?,?)");
                    $req->execute(array($nom,$article,$auteur));

                    $req->closeCursor(); // Termine le traitement de la requête

                    // redirect("./newsManager.php");
                    
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
    }


?>