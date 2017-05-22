<h1 style="text-align: center; margin-top: 0%;">New Listing</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?= $this->Form->create($listing, ['type' => 'file']) ?>
            <div class="form-group">
                <label for="title">Name</label>
				<br />
                <?= $this->Form->text('TITLE', ['class' => 'form-control','placeholder' => 'Name']) ?>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <br />
				<?= $this->Form->select('CATEGORY', ['Books' => 'Books','Clothes' => 'Clothes','Electronics' => 'Electronics','Furniture' => 'Furniture','School Supplies' => 'School Supplies','Miscellaneous' => 'Miscellaneous'], ['empty' => 'Choose one', 'class' => 'form-control'])  ?>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <br />
				<?= $this->Form->number('PRICE',[ 'min' => '0.01','step' => '0.01','placeholder' => 'Price', 'class' => 'form-control']) ?>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <br />
				<?= $this->Form->textarea('DESCRIPTION', ['rows' => '10em','maxlength' => '1000', 'placeholder' => 'Description. The first sentence will be used as a shorter description for your listing.', 'class' => 'form-control']) ?>
            </div>
            
            
            <div class="form-group">
                <label for="images">Images</label>
				<?= $this->Form->file('PICTURE') ?>
           </div>
            <br>
            <div class="form-group">
                <label for="pickup">Pick-Up Location</label>
                <small> (Click to place)</small>
                <div id="map" style="padding-top: 50%;"></div>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-3">
                <button class="btn btn-default" style="width: 100%;" onclick="goBack()">Cancel</button>
            </div>
            <div class="col-md-3 col-md-offset-6">
                <?= $this->Form->button(__('Post Listing'), ['type' => 'submit','style' => 'width: 100%', 'class' => 'btn btn-default']) ?>
            </div>
        </div>	    
        <?= $this->Form->end() ?>
		<?= $this->Flash->render() ?>
</div>
<script>
    function goBack() {
        if (confirm("Are you sure you want to leave this page?\n\nAll data you have entered will be lost.") == true) 		{
            window.history.back();
        }
		else
		{
			window.focus();
		}
    }
</script>
<script>
    var map;
    var marker;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 37.7195314, lng: -122.4802653},
            zoom: 14
        });

        map.addListener('click', function(e) {
            if (marker != null) {
                marker.setMap(null);
            }
            marker = new google.maps.Marker({
                position: e.latLng,
                map: map,
                draggable: true,
                title: "Pick Up Here"
            });
        });
    }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHJ8uGvSac6uZ1-4rrNHU6lqD1r1Ntn1E&callback=initMap" async defer></script>

