
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
    	<?= $this->Html->image('../files/listings/PICTURE/' . $data->get('PICTUREDIR') . '/<prefix>_' . $data->get('PICTURE'), ['height' => 'auto', 'max-height' => '160px', 'width' => 'auto', 'max-width' => '160px']) ?>
	</div>
          <div class= "col-md-8" style="padding: 5px; overflow:hidden" >
            <h1><u><?= $result['listingName'] ?></u></h1>
            <h3>$ <?= $result ['listingPrice'] ?></h3>
            <p><?= $result['listingShortDescription'] ?></p>
	  </div>
</a>

 <!-- Trigger/Open The Modal -->
<button type="button" class= "btn btn-default" style="overflow:hidden"> <a href= <?= $this->Url->build(['controller' => 'Messages', 'action' => 'add']); ?>>Contact Seller</a></button>
</div>
<div style="padding: 10px;"></div>
<?php endforeach; ?>

