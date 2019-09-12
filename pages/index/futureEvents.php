<div class="tilesContainer" >
  <section class="cms-boxes">
    <div class="container-fluid">
      <h2>Evénements à venir</h2>
      <?php 

        $FutureEvents=selectFutureEvents($bdd);
        
        if(!empty($FutureEvents)) {
          
            foreach ($FutureEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu,$link)) {
                ?> 
                    <div class="col-md-3 cms-boxes-outer">
                      <div class="row">
                        <h2 class="Tileh2"><?php echo$nom; ?></h2>
                      </div>
                      <div class="cms-boxes-items cms-features" style=" background-image: url(<?php echo "'".$img."'" ?>); background-position: center top; background-size: 100% 100%; ">

                        <!-- <div class="boxes-align"> -->
                          <div class="small-box" >

                            <div class="col-sm-12" >

                                <p><?php echo$date; ?></p>
                                <p><?php echo$lieu; ?></p>
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
                        <!-- </div> -->
                      </div>
                    </div>
              <?php  
          }

        }
        else{echo "pas d'events à afficher";}

      ?>
    </div>
  </section>
</div>