<h1 style="text-align: center; margin-top: 0%;">New Listing</h1>
<form>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="images">Images</label>
                    <input type="file" name="images" multiple>
                </div>
                <br>
                <div class="form-group">
                    <label for="pickup">Pick-Up Location</label>
                    <small> (Click to place)</small>
                    <div id="map" style="padding-top: 100%;"></div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" class="form-control" id="title" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category">
                        <option>Choose...</option>
                        <option>Books</option>
                        <option>Clothes</option>
                        <option>Electronics</option>
                        <option>Furniture</option>
                        <option>School Supplies</option>
                        <option>Miscellaneous</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" rows="10" id="description" style="resize: none;" placeholder="Description"></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <button class="btn btn-default" style="width: 100%;" onclick="goBack()">Cancel</button>
            </div>
            <div class="col-md-3 col-md-offset-6">
                <input class="btn btn-default" style="width: 100%;" type="submit" value="Post">
            </div>
        </div>
    </div>
</form>
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
