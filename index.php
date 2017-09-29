<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<img src="./img/header.png">
<div id="container">
	<aside id="wrapper">
	TEST
	</aside>
	<main id="wrapper2">
	<h1 id="main-heading">MARKETING MATERIALS</h1>
	<!-- Search form for marketing materials -->
	<div class="search-form">
		<label><h2>Search for marketing materials:</h2></label>
		<form>
			 <input type="text" class="search-input" name="product">
			 <input class="search-btn" type="submit" id="find-materials" value="SEARCH">
		</form>
	</div>
	<!-- Search form for adding products to favourites -->
	<div class="search-form">
		<label><h2>Find a product you would like to add to your favourites:</h2></label>
		<form>
			 <input type="text" class="search-input" name="product">
			 <input class="search-btn" type="submit" id="add-product" value="ADD PRODUCT TO FAVOURITES">
		</form>
	</div>
</div>
<!-- Section that will hold the notificaition message -->
<a href="#">
	<div id="notification">
			<h2>New feature available!</h2>
			<p>Use the newly updated marketing materials module to promote your products and increse your sales.</p>
	</div>
</a>
<script type="text/javascript">
	//Bring up the notification on any keypress
	var notification = document.getElementById("notification");
	window.addEventListener("keydown", function(e) {
		notification.style.display ="block"});
</script>
</main>
</body>
<img src="./img/footer.png">
</html>
