window.onload=function(){
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementsByName('tupian');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	for(var i=0;i<img.length;i++){
		img[i].onclick = function(){
	    	modal.style.display = "block";
	    	modalImg.src = this.src;
	    	modalImg.alt = this.alt;
	    	captionText.innerHTML = this.alt;
		}
	}


	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	    modal.style.display = "none";
	}
}
