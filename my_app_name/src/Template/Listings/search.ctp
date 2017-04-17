<style>
div.container {
   width: 100%;
   border: 1px solid gray;
}
article {
   margin-left: 170px;
   border-left: 1px solid gray;
   padding: 1em;
   overflow: hidden;
}
</style>
<?php foreach( $results as $result): ?>
<div style="border: 1px solid gray;">
<div style="float:left;padding: 5px;">
<a href=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'view', $result['listingID']]);?>>
<img style="height: 180px" src=<?= $result['listingImage'] ?> ><?= $result['listingName'] ?> </a>
</div>
<article>
 <h1><u><?= $result['listingName'] ?></u></h1>
 <h3>$ <?= $result ['listingPrice'] ?></h3>
 <p><?= $result['listingShortDescription'] ?></p>
</article>
<button onclick="myFunction()">Contact Seller</button>
</div>
<?php endforeach; ?>
