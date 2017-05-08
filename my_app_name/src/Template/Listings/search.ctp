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
</style>
<?php foreach( $results as $result): ?>
<a href=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'view', $result['listingID']]);?>>
	<div class="row" style="border: 1px solid #ccc;border-radius: 5px; overflow:hidden;padding: 10px; ">
	 <div class="col-md-2" style="float:left;padding: 5px;">
          <img style="height:auto; max-height:160px; width:auto;max-width:160px;" src=<?= $result['listingImage'] ?> >
	 </div>
         <article>
          <h1><u><?= $result['listingName'] ?></u></h1>
          <h3>$ <?= $result ['listingPrice'] ?></h3>
          <p><?= $result['listingShortDescription'] ?></p>
</a>
	 <div class="col-md-2" style="float: right;">	
          <button  style = "" onclick="myFunction()">Contact Seller</button>
          <p id="demo"></p>
         </div>
        </article>

</div>
<div style="padding: 10px;"></div>
<?php endforeach; ?>
<script>
		function myFunction() {
             var person = prompt("Hello I'm Interested In Your Listing", "Enter Message Here");
             if (person != null) {
                 document.getElementById("demo").innerHTML =
                    "Your Message: " + person;
            }
		}
</script>
