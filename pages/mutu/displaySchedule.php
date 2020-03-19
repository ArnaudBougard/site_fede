<div data-role="tile" data-size="large" data-effect="hover-slide-up" class="col-sm-4 tile">
        
  <div class="tile-content">

    <h2 class="mutu-h2"><span class="glyphicon glyphicon-print"></span>Horaire Mutu</h2> 

    <?php 

    $str = file_get_contents('../mutu/schedule.json');
    $json = json_decode($str, true);

    echo "<ul class='mutu-ul'>
      <li class='mutu-li'> Lundi: ". $json[0]. " à ".$json[1]."</li>
      <li class='mutu-li'> Mardi: ". $json[2]. " à ".$json[3]."</li>
      <li class='mutu-li'> Mercredi: ". $json[4]. " à ".$json[5]."</li>
      <li class='mutu-li'> Jeudi: ". $json[6]. " à ".$json[7]."</li>
      <li class='mutu-li'> Vendredi: ". $json[8]. " à ".$json[9]."</li>
      <span class='mutu-span'>* Sous réserve de modification</span></ul>";

    if(isset($_SESSION['id_utilisateur'])){
      
      if($mutu!= NULL){
        ?>
          
        <button class="btn"> 
          <a href="../mutu/scheduleManager.php"><span class="glyphicon glyphicon-bookmark"></span>Horaire Mutu</a>
        </button>

      <?php 
      }

    }

   ?>

  </div>
       
</div>  