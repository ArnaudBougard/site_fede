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
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nom</label>
                <input class="form-control "  id="name" type="text" placeholder="" required="required" data-validation-required-message="Veuillez completer le champ.">
                <p class="help-block text-danger"></p>
              </div>
            </div>           
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>E-mail</label>
                <input class="form-control" id="email" type="email" placeholder="" required="required" data-validation-required-message="Veuillez completer le champ.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="" required="required" data-validation-required-message="Veuillez completer le champ."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn-contact" id="sendMessageButton">Envoyer</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
<!--Section: Contact v.2-->





<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->





		<?php include("../footer.php"); ?>

	</body>
</html>

