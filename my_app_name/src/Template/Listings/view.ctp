<DOCTYPE html>

<style>
#map {
       height: 350px;
        width: 100%;
        border-radius: 20px;
}
img:hover{
cursor:pointer;
}

</style>
<div style="padding-top: 1.25%;">
<!--div is for left side of website, contains pictures of listins and contact seller-->
<div style="float: left; width: 25%; border-radius:5px; border: 1px solid #ccc; padding: 10px;text-align: center; overflow:hidden">
        
 <!-- Trigger/Open The Modal -->
<img id="myImg" src="<?= $listingImage ?>" data-toggle="modal" data-target="#picModal" width="100%" padding="5px">
<!-- The Modal -->
<div id="picModal" class="modal" style="width:auto;max-width:500px; height:100%; left:30%; padding: 10%; overflow:hidden;">

  <!--Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title"><b> <?= $listingName ?></b>: $<?= $listingPrice ?> </h4>
    </div>     
            <div class="item active">
              <img src="<?=$listingImage?>" style= "width: 70%; height: 70%">
            </div> 
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
  </div> <!-- modal content-->
  
<!--End of The Modal-->
 </div>

<br></br>

     <!-- butto to contact seller -->
     <button type="button" class= "btn btn-default" style="overflow:hidden"> <a href= <?= $this->Url->build(['controller' => 'Messages', 'action' => 'add']); ?>>Contact Seller</a></button>
</div>
<!-- End of left side div-->
<!-- Listing Name, Listing Price, Listing Description, and soon to be google api-->
<div style=" padding-left: 15px; overflow:hidden; width: 75%px">
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
</div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

