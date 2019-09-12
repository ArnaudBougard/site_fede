<div class="title-div">
  <h2></h2></div>
<div class="tiles-grid">
   
  
  <?php 

    $FutureEvents=selectFutureEvents($bdd);
    
    if(!empty($FutureEvents)) {
      
        foreach ($FutureEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)) {
            ?> 

              <div data-role="tile" data-size="large"  data-effect="hover-slide-up" >
               
                 <div class="title-div"><h2 class="Tileh2"> <?php echo $nom; ?></h2></div>
                <div class="slide-front" data-cover="<?php echo "'".$img."'" ?>" >

                </div>

                <div class="slide-back" style="background-color: #f8f5ef;">  
                <!-- <div class="slide-back" style="background-color: #1BB4B4;">   -->
                  <div >
                    <p class="tile-text"><?php echo $date; ?></p>
                    <p class="tile-text"><?php echo $lieu; ?></p>
                    <?php 
                        if(!empty($link)){
                          ?>
                          <p class="tile-text"><a href="<?php echo $link; ?>" > Event Facebook </a></p>
                          <br /> <br />
                          <?php
                      } ?>
                  
                    <p class="tile-text"><?php echo$description; ?></p>
                    <p class="tile-text">
                      <btn class="btn-form2"> <a href="../events/eventDetails.php?id= <?php echo $id; ?> " class="gras btn btn-xl"> Plus d'info</a> </btn>
                    </p>
                  </div>

                </div>
              
              </div>  
                        
          <?php  
      }

    }
    else{echo "pas d'events à afficher";}

  ?>

</div>