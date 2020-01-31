<div data-role="tile" data-size="large"  data-effect="hover-slide-up" class="col-sm-4 tile" >
        
      <div class="tileContent">
        <h2 style="text-align: center; font-size: 3.4vh; "> <span class="glyphicon glyphicon-print" ></span> Horaire Mutu  </h2> 

          <?php 

        $str = file_get_contents('../mutu/results.json');
        $json = json_decode($str, true);

       echo "<ul>
          <li> Lundi: ". $json[0]. " à ".$json[1]."</li>
          <li> Mardi: ". $json[2]. " à ".$json[3]."</li>
          <li> Mercredi: ". $json[4]. " à ".$json[5]."</li>
          <li> Jeudi: ". $json[6]. " à ".$json[7]."</li>
          <li> Vendredi: ". $json[8]. " à ".$json[9]."</li>
          <span style='font-size: 2vh;''> * Sous réserve de modification </span>

       </ul>"

       ?>
      </div>
      
    
</div>  