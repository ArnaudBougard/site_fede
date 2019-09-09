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

	<body>
		
		<?php include("../network.php"); ?>

		<!-- SCROLL TOP BUTTON ? (Rex) -->

		

		<?php include("../navbar.php"); ?>



<!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->




<section class="center-block mb-0 bg-fourth" id="contact">
    <div class="container-fluid bg-black">
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4 txt-white">Formulaire de contact</h2>
    <!--Section description-->
    </div>

    <div class="container mt">
    
   
      <div class="row">
        <div class="col-lg-12 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nom</label>
                <input class="form-control "  id="name" type="text" placeholder="Nom & Prénom" required="required" data-validation-required-message="Veuillez completer le champ.">
                <p class="help-block text-danger"></p>
              </div>
            </div>           
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Adresse mail</label>
                <input class="form-control" id="email" type="email" placeholder="Email" required="required" data-validation-required-message="Veuillez completer le champ.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Veuillez completer le champ."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl btn-outline-dark" id="sendMessageButton">Envoyer</button>
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

