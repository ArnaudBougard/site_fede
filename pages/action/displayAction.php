<?php 

  $lastAction=selectLastAction($bdd);

  if(!empty($lastAction)) {
    
      foreach ($lastAction as list($id,$nom,$prix,$quantite,$date,$img,$description)) {
          ?> 

            <div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile">
             
              
              <div class="slide-front" data-cover="<?php echo "'".$img."'" ?>" >
                 <div class="tileTitle">
                  <h2 > Action de la semaine<h2>
                </div>
              </div>

              <!-- <div class="slide-back" style="background-color: #f8f5ef;">   -->
                <div class="slide-back" data-cover="<?php echo "'".$img."'" ?>">  
                <!-- <div class="slide-back" style="background-color: #1BB4B4;">   -->
                  <div class="tileContent">
                  	<p class="tile-text"><?php echo $nom; ?></p>
                  	<p class="tile-text">Prix: <?php echo $prix; ?> €</p>
                  	<p class="tile-text">Pour <?php echo $quantite; ?> cl</p>
                    <p class="tile-text">A partir du <?php echo $date; ?></p>
                    
                    <p class="tile-text">
                      <btn class="btn-form2"> <a href="../action/actionDetails.php?id= <?php echo $id; ?> " class="gras btn btn-xl"> Plus d'info</a> </btn>
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
        <div class="tileTitle">
          <h2 > Pas d'action<h2>
        </div>
        
      </div>

      <div class="slide-back" data-cover="../../assets/img/paixdieu.jfif">
        <div class="tileTitle">
          <h2 > Pas d'action<h2>
        </div>
        
      </div>
    
    </div>  

  <?php  
  }
?>
