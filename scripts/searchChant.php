<script>
	var c = document.getElementsByClassName("chant");
	var i;

	for(i = 0; i < c.length; i++){
	  c[i].addEventListener("click", function(){
	    this.classList.toggle("active2");
	    var content_chant = this.nextElementSibling;
	    if(content_chant.style.display === "block"){
	      content_chant.style.display = "none";
	    }
	    else{
	      content_chant.style.display = "block";
	    }
	  });
	}

	function search_chant(){
		var input, filter, ul, li, a, i, txtValue;
	    input = document.getElementById("search");
	    filter = input.value.toUpperCase();
	    ul = document.getElementById("chants");
	    li = ul.getElementsByTagName("li");
	    for(i = 0; i < li.length; i++){
	        txtValue = li[i].textContent || li[i].innerText;
	        if(txtValue.toUpperCase().indexOf(filter) > -1){
	            li[i].style.display = "";
	        } 
	        else{
	            li[i].style.display = "none";
	        }
   	 	}
	}

</script>