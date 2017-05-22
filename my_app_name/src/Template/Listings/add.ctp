<h1 style="text-align: center; margin-top: 0%;">New Listing</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?= $this->Form->create() ?>
            <div class="form-group">
                <label for="title">Name</label>
                <?= $this->Form->text('TITLE', ['placeholder' => 'Name']) ?>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <?= $this->Form->select('CATEGORY', ['Books' => 'Books','Clothes' => 'Clothes','Electronics' => 'Electronics','Furniture' => 'Furniture','School Supplies' => 'School Supplies','Miscellaneous' => 'Miscellaneous'], ['empty' => 'Choose one'])  ?>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <?= $this->Form->number('PRICE',[ 'min' => '0.01','step' => '0.01','placeholder' => 'Price']) ?>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <?= $this->Form->textarea('DESCRIPTION', ['rows' => '10em','maxlength' => '1000', 'placeholder' => 'Description. The first sentence will be used as a shorter description for your listing.']) ?>
            </div>
            
            
            <div class="form-group">
                <label for="images">Images</label>
                <input type="file" name="images" multiple>
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
                <?= $this->Form->button(__('Post Listing', ['width' => '100%'])) ?>
            </div>
            <?= $this->Flash->render() ?>
            <?= $this->Form->end() ?>
        </div>
</div>
<script>
    function goBack() {
        if (confirm("Are you sure you want to leave this page?\n\nAll data you have entered will be lost.") == true) {
            window.history.back();
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
