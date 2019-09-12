<div class="title-div">
  <h2>Evénements à venir</h2></div>
<div class="tiles-grid">
   
  
  <?php 

    $FutureEvents=selectFutureEvents($bdd);
    
    if(!empty($FutureEvents)) {
      
        foreach ($FutureEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)) {
            ?> 

              <div data-role="tile" data-size="large"  data-effect="hover-slide-up">
               
                 <div class="title-div"><h2 class="Tileh2"> <?php echo $nom; ?></h2></div>
                <div class="slide-front" data-cover="<?php echo "'".$img."'" ?>" >

                </div>

                <div class="slide-back" style="background-color: #1BB4B4;">

                  <div >
                    <p><?php echo $date; ?></p>
                    <p><?php echo $lieu; ?></p>
                    <?php 
                        if(!empty($link)){
                          ?>
                          <p><a href="<?php echo $link; ?>" > Event Facebook </a></p>
                          <br /> <br />
                          <?php
                      } ?>
                  
                  </div>

                  <div class="col-sm-12">
                    <p><?php echo$description; ?></p>
                  </div>

                </div>
              
              </div>  
                        
          <?php  
      }

    }
    else{echo "pas d'events à afficher";}

  ?>

</div>