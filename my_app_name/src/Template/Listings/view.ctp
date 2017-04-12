<!DOCTYPE html>
<html>
<body>
        <div style="float: left; width: 300px;"> 

        <a href="http://www.sfsuse.com/~lowellc/CSC-648-Team-03-Project/my_app_name/">
        <img src="<?= $listingImage ?>" alt="Mountain" style="width:280px; padding: 5px">
         </a>

        <a href="http://www.sfsuse.com/~lowellc/CSC-648-Team-03-Project/my_app_name/">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Madison_Square_Park_from_Above_at_Night_New_York_City.jpg" alt="Mountain" style="width: 90px;height:90px;float=left;padding: 2px">
	</a>

        <a href="http://www.sfsuse.com/~lowellc/CSC-648-Team-03-Project/my_app_name/">
        <img src="https://www.w3schools.com/images/picture.jpg" alt="Mountain" style="width: 90px;height:90px;float=center;padding: 2px">
	</a>

        <a href="http://www.sfsuse.com/~lowellc/CSC-648-Team-03-Project/my_app_name/">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Madison_Square_Park_from_Above_at_Night_New_York_City.jpg" alt="Mountain" style="width: 90px;height:90px;float=right;padding: 2px">
	</a>

        <h5>All pictures were provided by google and w3schools.com </h5>

	<form action ="http://ww.example.com/comments.php">
	<p> Email Seller if your interested in the listing</p>
	<textarea name="comments" cols="38" rows="10">Subject is already preset...
	</textarea>
	</form>
	<input type= "submit" value="Submit" />
         </div>

         <article style="margin-left: 170px; border-left: 1px solid gray; padding: 1em; overflow: hidden;">
         <h1><?= $listingName ?></h1>
         <h3> Price: $<?= $listingPrice ?></h3>
         <p><?=$listingDescription?></p>

         <img src="http://www.droid-life.com/wp-content/uploads/2016/09/google-maps.jpg" alt="Mountain" style = "width: 500px; height: 300px;">
         </article>

</body>
</html>
