<DOCTYPE html>

<style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>

<!--div is for left side of website, contains pictures of listins and contact seller-->
<div style="float: left; width: 300px;">
        
<img id="myImg" src="<?= $listingImage ?>" alt="<?= $listingName ?>" style="width:280px; padding: 5px">

	<!-- The Modal -->
	<div id="myModal" class="modal">
  		<span class="close">&times;
  		</span>
  		<img class="modal-content" id="img01">
  		<div id="caption">
  		</div>
	</div>

	<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	var img = document.getElementById('myImg');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");
	img.onclick = function()
	{
    	modal.style.display = "block";
   	 	modalImg.src = this.src;
    	captionText.innerHTML = this.alt;
	}

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() 
	{ 
    modal.style.display = "none";
	}
	</script>

		<!--Pictures under bigger picture-->
        <a href="">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Madison_Square_Park_from_Above_at_Night_New_York_City.jpg" alt="Mountain" style="width: 90px;height:90px;float=left;padding: 2px">
        </a>

        <a href="">
        <img src="https://www.w3schools.com/images/picture.jpg" alt="Mountain" style="width: 90px;height:90px;float=center;padding: 2px">
        </a>

        <a href="">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Madison_Square_Park_from_Above_at_Night_New_York_City.jpg" alt="Mountain" style="width: 90px;height:90px;float=right;padding: 2px">
        </a>

        <h5>All pictures were provided by google and w3schools.com </h5>
		<!--                              -->



		<p>Please click button to contact seller</p>

		<button onclick="myFunction()">Contact Seller</button>

		<p id="demo"></p>

		<script>
		function myFunction() {
    	var person = prompt("Hello I'm Interested In Your Listing", "Enter Message Here");
    	if (person != null) {
      	  document.getElementById("demo").innerHTML =
       	 "Your Message: " + person;
   		 }
		}
		</script>
</div>
<!-- End of left side div-->

<!-- Listing Name, Listing Price, Listing Description, and soon to be google api-->
         <article style="margin-left: 170px; border-left: 1px solid gray; padding: 1em; overflow: hidden;">
         <h1><u> <?= $listingName ?></u> </h1>
         <h3> Price: $<?= $listingPrice ?></h3>
         <p><?=$listingDescription?></p>
         
         <h3>Pickup Location</h3>
         <img src="http://www.droid-life.com/wp-content/uploads/2016/09/google-maps.jpg" alt="Mountain" style = "width: 500px; height: 300px;">
         </article>



