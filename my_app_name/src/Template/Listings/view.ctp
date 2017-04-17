<DOCTYPE html>

<style>
.modal.and.carousel {
  position: absolute; // Needed because the carousel overrides the position property
}
</style>

<!--div is for left side of website, contains pictures of listins and contact seller-->
<div style="float: left; width: 300px;">
        
<div class="container" style="padding:0px">

<a href="#lightbox" data-toggle="modal"><img id="myImg" src="<?= $listingImage ?>" alt="<?= $listingName ?>" style="width:280px; padding: 5px;">
</a> 
  
  <div class="modal fade and carousel slide" id="lightbox">
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?=$listingName?></h4>
        </div>

        <div class="modal-body">
          <div class="carousel-inner">
            <div class="item active">
          <ol class="carousel-indicators">
            <li data-target="#lightbox" data-slide-to="0" class="active"></li>
            <li data-target="#lightbox" data-slide-to="1"></li>
            <li data-target="#lightbox" data-slide-to="2"></li>
          </ol>
              <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Madison_Square_Park_from_Above_at_Night_New_York_City.jpg" alt="First slide">
            </div>
            <div class="item">
              <img src="https://www.w3schools.com/images/picture.jpg" alt="Second slide">
            </div>
            <div class="item">
              <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Madison_Square_Park_from_Above_at_Night_New_York_City.jpg" alt="Third slide">
              <div class="carousel-caption"><p></p></div>
            </div>
          </div><!-- /.carousel-inner -->
          <a class="left carousel-control" href="#lightbox" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#lightbox" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div><!-- /.modal-body -->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</div><!-- /.container -->

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
	<h1><u><?= $listingName ?></u></h1>
         <h3> Price: $<?= $listingPrice ?></h3>
         <p><?=$listingDescription?></p>

	<h3>Pickup Location</h3>
         <img src="http://www.droid-life.com/wp-content/uploads/2016/09/google-maps.jpg" alt="Mountain" style = "width: 500px; height: 300px;">
         </article>



