<div class="container" style="padding-top:2rem;">
  <section class="cms-boxes">
    <div class="container-fluid">

      <?php 

        $FutureEvents=selectFutureEvents($bdd);
        
        if(!empty($FutureEvents)) {
          
            foreach ($FutureEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur,$lieu)) {
                ?> 
                    <div class="col-md-4 cms-boxes-outer">
                      <div class="cms-boxes-items cms-features">
                        <div class="boxes-align">
                          <div class="small-box">

                            <div class="col-sm-12">
                              <h2 class="Tileh2"><?php echo$nom; ?></h2>
                            </div>

                            <div class="col-sm-12" >

                              <div class="col-sm-8">
                                <img class="TileImg" src=<?php echo "'".$img."'" ?> >
                              </div>
                              <div class="col-sm-4">
                                <p><?php echo$date; ?></p>
                                <p><?php echo$lieu; ?></p>
                              </div>

                            </div>

                            <div class="col-sm-12">
                              <p><?php echo$description; ?></p>
                            </div>

                          </div>
                        </div>
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