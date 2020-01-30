
  <?php 

    $NewsArray=selectSomeNews($bdd);
    
    if(!empty($NewsArray)) {
      
        foreach ($NewsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)) {
            ?> 

              <div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
               
                <div class="slide-front" data-cover="<?php echo "'".$img."'" ?>" >
                  <div class="tileTitle">
                    <h2 style="text-align: center; font-size: 3.4vh;"> <?php echo $nom; ?><h2>
                  </div>
                </div>

                <div class="slide-back" data-cover="<?php echo "'".$img."'" ?>">  
                <!-- <div class="slide-back" style="background-color: #1BB4B4;">   -->
                  <div class="tileContent">
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
 
    else{
      ?>
      <div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
          
        <div class="slide-front" data-cover="../../assets/img/paixdieu.jfif">
          <div style="background-color: rgba(0, 0, 0, 0.8); width:100%; padding-top: 1vh; padding-bottom: 1vh;">
            <h2 style="text-align: center; font-size: 3.4vh;"> Pas de news<h2>
          </div>
          
        </div>

        <div class="slide-back" data-cover="../../assets/img/paixdieu.jfif">
          <div style="background-color: rgba(0, 0, 0, 0.8); width:100%; padding-top: 1vh; padding-bottom: 1vh;">
            <h2 style="text-align: center; font-size: 3.4vh;"> Pas de news<h2>
          </div>
          
        </div>
      
      </div>  

    <?php  
    }

  ?>
