<?php 

  $pastEvents=selectSomePastEvents($bdd);
  $n=0;
  if(!empty($pastEvents)) {
    
      foreach ($pastEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link,$dateCreation)) {
        $n=$n + 1;
          ?> 

            <div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile">
             
              
              <div class="slide-front" data-cover="<?php echo "'".$img."'" ?>" >
                 <div class="tileTitle">
                  <h2 style="text-align: center; font-size: 3.4vh;"> <?php echo $nom; ?><h2>
                </div>
              </div>

              <!-- <div class="slide-back" style="background-color: #f8f5ef;">   -->
                <div class="slide-back" data-cover="<?php echo "'".$img."'" ?>">  
                <!-- <div class="slide-back" style="background-color: #1BB4B4;">   -->
                  <div class="tileContent">
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
                    <p class="tile-text">Publié le: <?php echo $dateCreation; ?></p>
                    <p class="tile-text">
                      <btn class="btn-form2"> <a href="../events/eventDetails.php?id= <?php echo $id; ?> " class="gras btn btn-xl"> Plus d'info</a> </btn>
                    </p>
                  </div>

                </div>
            
            </div>  
                      
        <?php  
    }

  }
 for ($x = 0; $x < 3-$n; $x++) {
      ?>
      <div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
        
        <div class="slide-front" data-cover="../../assets/img/paixdieu.jfif">
          <div class="tileTitle">
            <h2 style="text-align: center; font-size: 3.4vh;">Seems like there's nothing up!<h2>
          </div>
          
        </div>

        <div class="slide-back" data-cover="../../assets/img/paixdieu.jfif">
          <div class="tileTitle">
            <h2 style="text-align: center; font-size: 3.4vh;"> BOUH! <h2>
          </div>
          
        </div>
    
      </div>  
      <?php 
    }
?>