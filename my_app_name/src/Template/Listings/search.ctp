
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
<div align =right>
<?php
if (count($results) == 0)
	 {
        echo "No results were found";
	 }
	else
	{
	echo  count($results)." Items found ";
	}

?>
<?php foreach( $results as $result): ?>
<<<<<<< HEAD
<a href="<?= $this->Url->build(['controller' => 'Listings', 'action' => 'view', $result['listingID']]);?>"target="_blank">
	<div class="row" style="border: 1px solid #ccc;border-radius: 5px; overflow:hidden;padding: 10px; ">
	 <div class="col-md-2" style="float:left;padding: 5px;">
=======
<a href=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'view', $result['listingID']]);?>>
        <div class="row" style="border: 1px solid #ccc;border-radius: 5px; overflow:hidden;padding: 10px; ">
         <div class="col-md-2" style="float:left;padding: 5px;">
>>>>>>> c91f38a356f94ef664c265e158491d738fb8431c
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

