<div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
        
      <div class="tileContent">
        <h2 class="mutuh2"> <span class="glyphicon glyphicon-print" ></span> Horaire Mutu  </h2> 

          <?php 

        $str = file_get_contents('../mutu/results.json');
        $json = json_decode($str, true);

       echo "<ul class='mutuul'>
          <li class='mutuli'> Lundi: ". $json[0]. " à ".$json[1]."</li>
          <li class='mutuli'> Mardi: ". $json[2]. " à ".$json[3]."</li>
          <li class='mutuli'> Mercredi: ". $json[4]. " à ".$json[5]."</li>
          <li class='mutuli'> Jeudi: ". $json[6]. " à ".$json[7]."</li>
          <li class='mutuli'> Vendredi: ". $json[8]. " à ".$json[9]."</li>
          <span class='mutuspan'> * Sous réserve de modification </span>


       </ul>";
        if(isset($_SESSION['id_utilisateur'])){
          if($mutu!= NULL){
            ?>
              
              <button class="btn"> 
                <a class="" href="../mutu/horaireManager.php">
                  <span class="glyphicon glyphicon-bookmark" ></span> Horaire Mutu
                </a>
              </button>
               
              
            <?php 
          } 
        }

       ?>
      </div>
      
    
</div>  