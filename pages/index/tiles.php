<div class="container">
  <section class="cms-boxes">
    <div class="container-fluid">

      <?php 

        $FutureEvents=selectFutureEvents($bdd);
        
        if(!empty($FutureEvents)) {
          
            foreach ($FutureEvents as list($id,$nom,$ouverture,$description,$date,$img,$organisateur)) {
                ?> 
                    <div class="col-md-4 cms-boxes-outer">
                      <div class="cms-boxes-items cms-features">
                        <div class="boxes-align">
                          <div class="small-box">
                            <i class="fa fa-4x fa-laptop">&nbsp;</i>
                            <h2><?php echo$nom; ?></h2>
                            <p><?php echo$date; ?></p>
                            <p><?php echo$description; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
              <?php  
          }

        }
        else{echo "pas d'events à afficher";}

      ?>



<!--
      <div class="row">

        <div class="col-md-4 cms-boxes-outer">
          <div class="cms-boxes-items cms-features">
            <div class="boxes-align">
              <div class="small-box">
                <i class="fa fa-4x fa-laptop">&nbsp;</i>
                <h2>Data Management</h2>
                <p>Gain valuable insights with WebCorpCo Data.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 cms-boxes-outer">
          <div class="cms-boxes-items cms-security">
            <div class="boxes-align">
              <div class="small-box">
                <i class="fa fa-4x fa-cog">&nbsp;</i>
                <h2>Enterprise<br> Data Funnel</h2>
                <p>Pull in realtime data from every source on the web.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 cms-boxes-outer">
          <div class="cms-boxes-items cms-scalability">
            <div class="boxes-align">
              <div class="small-box">
                <i class="fa fa-4x fa-arrows-alt" aria-hidden="true"></i>
                <h2>Pattern Analysis</h2>
                <p>The world's most advanced algorithms let loose on your data.</p>
              </div>
            </div>
          </div>
        </div>



      </div>
      <div class="row">

        <div class="col-md-6 cms-boxes-outer">
          <div class="cms-boxes-items cms-built">
            <div class="boxes-align">
              <div class="large-box">
                <i class="fa fa-4x fa-heart" aria-hidden="true"></i>
                <h2>Award-winning customer service</h2>
                <p>Award-winning, U.S. based support 24/7. If you need help we are here.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 cms-boxes-outer">
          <div class="cms-boxes-items cms-documentation">
            <div class="boxes-align">
              <div class="large-box">
                <i class="fa fa-4x fa-file-code-o">&nbsp;</i>
                <h2>Documentation</h2>
                <p>From connecting data sources to styling reports, we have everything you need to get the most value out of WebCorpCo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    -->
    </div>
  </section>
</div>