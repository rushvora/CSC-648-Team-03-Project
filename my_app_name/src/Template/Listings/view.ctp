<DOCTYPE html>

<style>
/*
.modal-header {
    width: 700px;
    height: 200px
    position: relative;

    text-align: center;

    background: #fefefe ;
}

.modal-header .close {
    position: absolute;
    top: 20px;
    right: 20px;
}
.modal.and.carousel {
  position: absolute; // Needed because the carousel overrides the position property
}
*/
      #map {
       height: 350px;
        width: 100%;
        border-radius: 20px;
       }

/* The Modal (background) */
/*.modal {
    display: none; /* Hidden by default */
   /* position: fixed; /* Stay in place */
   /* z-index: 1; /* Sit on top */
    /*padding-top: 100px; /* Location of the box */
   /* left: 0;
    top: 0;
   width: 100%; /* Full width */
   /* height: 100%; /* Full height */
   /* overflow: auto; /* Enable scroll if needed */
  /*  background-color: rgb(0,0,0); /* Fallback color */
   /* background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
/*}

/* Modal Content*/ 
/*.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button */
/*.close {
    color: #000;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
*/
</style>
<div style="padding-top: 1.25%;">
<!--div is for left side of website, contains pictures of listins and contact seller-->
<div style="float: left; width: 300px; border-radius:5px; border: 1px solid #ccc; padding: 5px;text-align: center;">
        
<div  style="padding:0px">

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

 <!-- Trigger/Open The Modal -->
<button id="myBtn"class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Contact Seller</button>

<!-- The Modal -->
<div id="myModal" class="modal" style="padding:100px; width:45%; left:25%">

  <!--Modal content -->
      <div class="modal-content">
      
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
     
        <div class="modal-body row">
          <div class="col-lg-12">
          
            <div style= "float:left">
              <h3>To: Username</h3>
  	      <h3>Subject: listingName</h3>
            </div>
            
            <div style= "float:right">
  			  <form action="#">
  			  <textarea name="message" rows="10" cols="40">Enter Message Here.</textarea>
              </form>  
            </div>
            
          </div>
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default">Submit</button>
        </div>
        
      </div>




<!--End of The Modal-->
</div>
</div>
<!-- End of left side div-->

<!-- Listing Name, Listing Price, Listing Description, and soon to be google api-->
         <article style=" padding-left: 20px; overflow: hidden;">
    <div style= "border: 1px solid #ccc; border-radius: 5px; padding:5px">	
	<h1><u><?= $listingName ?></u></h1>
        <h5>Sold by: SellerName</h5>
        <h5>Date Posted: 01/02/17</h5>
        <h3> Price: $<?= $listingPrice ?></h3>
    </div>
<br></br>

<div style="border: 1px solid #ccc; border-radius: 5px; padding: 5px">
     <h3><u>Description</u></h3>
     <p><?=$listingDescription?></p>
     <h3>Pickup Location</h3>
     <div id="map"></div>
         <script>
     	     function initMap() {
             var uluru = {lat: 37.7219, lng: -122.4782};
             var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 15,
             center: uluru
           });
              var marker = new google.maps.Marker({
              position: uluru,
              map: map
            });
          }
         </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHJ8uGvSac6uZ1-4rrNHU6lqD1r1Ntn1E&callback=initMap">
    </script>
</div>
	</article>
</div>
