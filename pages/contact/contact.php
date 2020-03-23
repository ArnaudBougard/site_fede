<?php
session_start();
include("../../controller/getConnexionData.php");
?>

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

        <div class="container contact-container">   

          <div class="row">

            <?php
            if(!isset($_SESSION['id_utilisateur'])){
              ?> 

             <div class="container">

                <div class="row">
                  <h3>Vous devez vous connecter afin de pouvoir contacter un cercle.</h3>
                </div>

              </div>
              <?php 
            }
            ?>

            <div class=col-lg-5>
              <img class="contact-image" src="../../assets/img/contact.png" alt="contact">
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
                        <option>CPV</option>
                        <option>Cercle Culturel</option>
                        <option>Magellan</option>
                        <option>Mons-Mines</option>
                        <option>Mutuelle d'édition</option>
                        <option>Radio Extra</option>
                        <option>Cercle des Sports</option>
                        <option>Scientifique</option>
                        <option>Cercle Sono-Danse-Musique</option>
                        <option>Peyresq</option>
                        <option>Carolo</option>
                        <option>Frontalière</option>
                        <option>Centrale</option>
                        <option>Boraine</option>
                      </select>

                    </div>

                  </div>

                </div> 

                <div class="control-group">

                  <div class="form-group floating-label-form-group controls mb-0 pb-2">

                    <label>Message</label>

                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="" required="required" data-validation-required-message="Veuillez completer le champ."></textarea>

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

	</body>

  <footer>
    <?php
    include("../../controller/sendMail.php");
    include("../footer.php");
    ?>
  </footer>

</html>