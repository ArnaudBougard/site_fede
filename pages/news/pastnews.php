<?php 
if(!empty($NewsArray)){
  
  foreach ($NewsArray as list($id,$nom,$article,$auteur,$img,$action,$dateCreation,$statut)){
    $n=$n +1;
      ?> 

        <div data-role="tile" data-size="large" data-effect="hover-slide-up" class="col-sm-4 tile">
         
          <div class="slide-front" data-cover="<?= "'".$img."'" ?>">

            <div class="tile-title">
              <h2><?= $nom; ?><h2>
            </div>

          </div>

          <div class="slide-back" data-cover="<?= "'".$img."'" ?>">  

            <div class="tile-content">

              <p class="tile-text"><?= $nom; ?></p>
              <p class="tile-text"> Publié par: <?= $auteur; ?></p>
              <p class="tile-text">Publié le: <?= $dateCreation; ?></p>
              <p class="tile-text"><btn class="btn-form2"><a href="../news/newsDetails.php?id= <?= $id; ?>" class="gras btn btn-xl">Lire la suite</a></btn></p>

            </div>

          </div>
        
        </div>  
                  
    <?php  
  }

}

for ($x = 0; $x < 3-$n; $x++){
?>

  <div data-role="tile" data-size="large" data-effect="hover-slide-up" class="col-sm-4 tile">
    
    <div class="slide-front" data-cover="../../assets/img/paixdieu.jfif">

      <div class="tile-title">
        <h2 >Y s'passe jamais rien ici<h2>
      </div>
      
    </div>

    <div class="slide-back" data-cover="../../assets/img/paixdieu.jfif">

      <div class="tile-title">
        <h2>BOUH!<h2>
      </div>
      
    </div>

  </div>

<?php 
}
?>