<DOC html>
<style>
body {font-family: "Lato", sans-serif;}
/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}
/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}
/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}
/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}
/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>

<h1>My Dashboard</h1>
<div class="tab">
  <button class="tablinks"><a href=<?= $this->Url->build(['controller' => 'Messages', 'action' => 'index']) ?>>Messages</button>
  <button class="tablinks"><a href=<?= $this->Url->build(['controller' => 'Listings', 'action' => 'myListings']) ?>>My Listings</button>
</div>
<?php
if (count($displayResults) == 0)
	 {
	 }
	else
	{
	echo '<div style="text-align: right;">'.count($results)." Items found</div>";
	}
?>
<?php foreach( $displayResults as $result): ?>
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

</div>
