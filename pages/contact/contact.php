<?php
session_start();
?>

<?php include("../../model/connexionDAO.php"); ?>
<?php include("../../controller/getConnexionData.php"); ?>

<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php include("../head.php"); ?>
	</head>

	<body class="bg1">
		
		<?php 
    include("../network.php");
		include("../navbar.php");
    include("../sideBar.php"); 
    ?>

    <section class="center-block mb-0 bg-fourth" id="contact">

        <div class="container" style="margin-top: 2vw; margin-bottom: 4vw;">   

          <div class="row">

            <?php
                if(!isset($_SESSION['id_utilisateur'])){
                  ?> 
                 <div class="container">
                    <div class="row"> <h3>Veuillez vous connecter afin de pouvoir contacter un cercle!</h3></div>
                    <div class="row"></div>
                  </div>
                  <?php 
                }
                ?>

            <div class=col-lg-5>
              <img src="../../assets/img/contact.png" alt="contact" style="width: 55%; margin-top: 5vw;">
            </div>

            <div class="col-lg-7 mx-auto">

              <div class="container-fluid">
                <h2 class="contact-title">Contact</h2>
              </div>

              <form method="post" name="sentMessage" id="contactForm" novalidate="novalidate" >

                <div class="control-group">

                  <div class="form-group floating-label-form-group controls mb-0 pb-2">

                    <label>Qui souhaitez-vous contacter?</label>

                    <div class="form-group">

                      <select class="form-control" id="contact" name="contact">

                        <option>Commission Web</option>
                        <option>Fédérale</option>
                        <option>Cercle des Fêtes</option>
                        <option>Bar</option>
                        <option>CAP</option>
                        <option>Cercle Culturel</option>
                        <option>Magellan</option>
                        <option>Mutuelle d'édition</option>
                        <option>Mons-Mines</option>
                        <option>Peyresq</option>
                        <option>CPV</option>
                        <option>Radio Extra</option>
                        <option>Scientifique</option>
                        <option>Cercle Sono Danse Musique</option>
                        <option>Cercle des Sports</option>
                        <option>Carolo</option>
                        <option>Frontalière</option>
                        <option>Centrale</option>
                        <option>Boraine</option>

                      </select>

                    </div>

                    <p class="help-block text-danger"></p>

                  </div>

                </div> 

                <div class="control-group">

                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Message</label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="" required="required" data-validation-required-message="Veuillez completer le champ."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>

                <br/>

                <div id="success"></div>

                <div class="form-group">
                  <input type="submit" class="btn-contact" id="sendMessageButton" name="sendmail" value="Envoyer"></input>
                </div>

              </form>

          </div>

        </div>

      </div>
        
    </section>

  <?php 
  include("./sendMail.php");
	include("../footer.php");
  include("../../scripts/toggle.php");
  ?>

	</body>

</html>

