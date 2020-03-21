<script type='text/javascript'>

	function openCercle(event, cercle){

  		var i, tabcontent, tablinks;
  		
	  	tabcontent = document.getElementsByClassName("tabcontent");

		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}

		tablinks = document.getElementsByClassName("tablinks");

		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace("active","");
		}

		document.getElementById(cercle).style.display = "block";
		event.currentTarget.className += "active";
	}

	// Get the element with id="defaultOpen" and click on it
	document.getElementById("<?= $_GET['id'] ?>").click();

</script>