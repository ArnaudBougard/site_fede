
  <?php 

    $NewsArray=selectSomeNews2($bdd);
    $n=0;
    if(!empty($NewsArray)) {
      
        foreach ($NewsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)) {
          $n=$n +1;
            ?> 

              <div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-6 tile" >
               
                <div class="slide-front" data-cover="<?php echo "'".$img."'" ?>" >
                  <div class="tileTitle">
                    <h2 > <?php echo $nom; ?><h2>
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
 
   for ($x = 0; $x < 2-$n; $x++) {
      ?>
      <div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-6 tile" >
        
        <div class="slide-front" data-cover="../../assets/img/paixdieu.jfif">
          <div class="tileTitle">
            <h2 >Seems like there's nothing up!<h2>
          </div>
          
        </div>

        <div class="slide-back" data-cover="../../assets/img/paixdieu.jfif">
          <div class="tileTitle">
            <h2> BOUH! <h2>
          </div>
          
        </div>
    
      </div>  
      <?php 
    }

  ?>
