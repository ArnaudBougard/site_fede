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
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		<?php include("../navbar.php"); ?>



<section class="center-block mb-0 bg-fourth" id="contact">
    <div class="container" style="margin-top: 2vw; margin-bottom: 4vw;">   
      <div class="row">
        <div class=col-lg-5>
          <img src="../../assets/img/contact.png" alt="contact" style="width: 55%; margin-top: 5vw;">
        </div>
        <div class="col-lg-7 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <div class="container-fluid">
          <!--Section heading-->
            <h2 class="contact-title">Contact</h2>
          <!--Section description-->
          </div>

          <form method="post" name="sentMessage" id="contactForm" novalidate="novalidate" >

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Qui souhaitez-vous contacter?</label>
                <div class="form-group">
                  <select class="form-control" id="contact" name="contact">
                    <option>Commission Web</option>
                    <option>Fédérale</option> <!-- ok -->
                    <option>Cercle des Fêtes</option><!-- ok -->
                    <option>Bar</option><!-- ok -->
                    <option>CAP</option><!-- ok -->
                    <option>Cercle Culturel</option><!-- ok -->
                    <option>Magellan</option><!-- ok -->
                    <option>Mutuelle d'édition</option><!-- ok -->
                    <option>Mons-Mines</option><!-- ok -->
                    <option>Peyresq</option><!-- ok -->
                    <option>CPV</option><!-- ok -->
                    <option>Radio Extra</option><!-- ok -->
                    <option>Scientifique</option><!-- ok -->
                    <option>Cercle Sono Danse Musique</option><!-- ok -->
                    <option>Cercle des Sports</option><!-- ok -->
                    <option>Carolo</option><!-- ok -->
                    <option>Frontalière</option><!-- ok -->
                    <option>Centrale</option><!-- ok -->
                    <option>Boraine</option><!-- ok -->
                  </select>
                </div>
                <p class="help-block text-danger"></p>
              
              </div>
            </div> 

            <?php
            if(!isset($_SESSION['id_utilisateur'])){
              ?> 
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Adresse mail</label>
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                     <input class='champ' type='mail' id='mail'  name='mail' maxlength='50' size='55' placeholder="votre adresse mail" required/>
                  </div>
                </div>
              </div>
              <br>

              <div class="control-group">
                <label>Qui êtes-vous?</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                   <input class='champ' type='text' id='pseudo'  name='pseudo' placeholder='Votre nom et prénom' maxlength='50' size='55'  required/>
                </div>
              </div>
              <br>
              <?php 
            }
            ?>

            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="" required="required" data-validation-required-message="Veuillez completer le champ."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>

            
            <div id="success"></div>
            <div class="form-group">
              <input type="submit" class="btn-contact" id="sendMessageButton" name="sendmail" value="Envoyer"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include("./sendMail.php"); ?>
	<?php include("../footer.php"); ?>

	</body>
</html>

