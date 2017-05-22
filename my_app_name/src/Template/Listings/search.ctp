
<DOC html>
<style>

/*div.container {
  width: 100%;
  border: 1px solid gray;
}*/
article {
  margin-left: 170px;
 /*border: 1px solid #ccc;*/
  padding: 1em;
  overflow: hidden;
}
.wrapper{
	text-align:center;
}
.button {
	position: absolute;
	top:70%;
}
 
</style>
<?php
if (count($results) == 0)
	 {
	 }
	else
	{
	echo '<div style="text-align: right;">'.count($results)." Items found</div>";
	}

?>
<?php foreach( $results as $result): ?>
<a href="<?= $this->Url->build(['controller' => 'Listings', 'action' => 'view', $result['listingID']]);?>"target="_blank">
	<div class="row" style="border: 1px solid #ccc;border-radius: 5px; overflow:hidden;padding: 10px; ">
	 <div class="col-md-2" style="float:left;padding: 5px;">
          <img style="height:auto; max-height:160px; width:auto;max-width:160px;" src=<?= $result['listingImage'] ?> >
         </div>
         
          <div class= "col-md-8" style="padding: 5px; overflow:hidden" >
            <h1><u><?= $result['listingName'] ?></u></h1>
            <h3>$ <?= $result ['listingPrice'] ?></h3>
            <p><?= $result['listingShortDescription'] ?></p>
	  </div>
</a>

 <!-- Trigger/Open The Modal -->
<button id="myBtn"class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"style="width:10%; font-size: 100%">Contact Seller</button>

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
<div style="padding: 10px;"></div>
<?php endforeach; ?>
<script>
