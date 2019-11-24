
  <?php 

    $NewsArray=selectLastNews($bdd);
    
    if(!empty($NewsArray)) {
      
        foreach ($NewsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)) {
            ?> 

              <div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
               
                <div class="title-div"><h2 class="Tileh2"> <?php echo $nom; ?></h2></div>
                <div class="slide-front" data-cover="<?php echo "'".$img."'" ?>" >

                </div>

                <div class="slide-back" style="background-color: #f8f5ef;">  
                <!-- <div class="slide-back" style="background-color: #1BB4B4;">   -->
                  <div >
                    <p class="tile-text"><?php echo $nom; ?></p>
                    <p class="tile-text"> Publié par: <?php echo $auteur; ?></p>
                   
                    <p class="tile-text">Publié le: <?php echo $dateCreation; ?></p>
                    <p class="tile-text">
                      <btn class="btn-form2"> <a href="../news/newsDetails.php?id= <?php echo $id; ?> " class="gras btn btn-xl"> Lire la suite</a> </btn>
                    </p>
                  </div>

                </div>
              
              </div>  
                        
          <?php  
      }

    }
    else{echo "pas de news à afficher";}

  ?>
