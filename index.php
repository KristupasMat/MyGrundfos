<!DOCTYPE html>
<html>



<head>
  <title>My Grundfos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">

</head>
<body>
<img src="./img/header.png" class="header">
<div id="container">
  <aside id="wrapper">
      
      <section class="component component component-pagetitle">
      <h1><b>MyGrundfos</b></h1>
      </section>
      <ul class="nav left-nav">
                    <li class="links">
                        Dashboard
                    </li> 
                </ul>
                <h1><b>Tools</b></h1>
                <div class="nav">
                <ul class="nav left-nav">    
                    <li class="links1">
                        Spare parts finder
                    </li>   
                    <li class="links1">
                        Pump replacement
                    </li>       
                    <li class="links1">
                        Quotations
                    </li>        
                    <li class="links1">
                        Order status
                    </li>         
                    <li class="links1">
                        List price finder
                    </li>        
                    <li class="links1">
                        Availability
                    </li>   
                    <li class="links1">
                        Marketing materials
                    </li> 
                </ul>
    </div>
      
<h3>LATEST PURCHASES</h3>
<div class="latest-purchases">
	<div class="product" id="latest-product1">
		<div class="product-box">
			<img src="img/ALPHA1.png" width="auto" height="160px">
			<div class="updated-tag">
				UPDATED
			</div>
			<button class="add-favorite-btn" id="add-product1">
				<img src="./img/favorite-icon.svg">
			</button>
			<button class="remove-btn" id="delete-latest-product1">
					
			</button>
		</div>
		<p class="pump-name">ALPHA 1</p>
		<button type="button" class="download btn" onclick="openPopup()">DOWNLOAD</button>
	</div>
	<div class="product" id="latest-product2">
		<div class="product-box">
			<img src="img/alpha2.jpg" width="auto" height="160px">
			<div class="updated-tag">
				UPDATED
			</div>
			<button class="add-favorite-btn" id="add-product2">
				<img src="./img/favorite-icon.svg">
			</button>
			<button class="remove-btn" id="delete-latest-product2">
					
			</button>
		</div>
		<p class="pump-name">ALPHA 2</p>
		<button type="button" class="download btn" onclick="openPopup()">DOWNLOAD</button>
	</div>
	<div class="product" id="latest-product3">
		<div class="product-box">
			<img src="img/alpha3.jpg" width="auto" height="160px">
			<button class="add-favorite-btn" id="add-product3">
				<img src="./img/favorite-icon.svg">	
			</button>
			<button class="remove-btn" id="delete-latest-product3">
					
			</button>
			<p class="pump-name">ALPHA 3</p>
			<button type="button" class="download btn" onclick="openPopup()">DOWNLOAD</button>
		</div>
	</div>
</div>
</aside>
<main id="wrapper2">
	<h1 id="main-heading">MARKETING MATERIALS</h1>
	<!-- Search form for marketing materials -->
	<div class="search-form">
		<label><h2>Search for marketing materials:</h2></label>
		<form>
			 <input type="text" class="search-input" name="product">
			 <input class="btn" type="submit" id="find-materials" value="SEARCH">
		</form>
	</div>
<div class="favorite-row">
	<div class="favorite" id="product1">
		<div class="favorite-box">
			<img src="img/ALPHA1.png" width="auto" height="160px">
			<div class="updated-tag">
				UPDATED
			</div>
			<button class="remove-btn" id="delete-favorite-product1">
				<img src="./img/delete-icon.svg">	
			</button>
			<p class="pump-name">ALPHA 1</p>
			<button type="button" class="download btn fav" onclick="openPopup()">DOWNLOAD</button>
		</div>
	</div>
	<div class="favorite" id="product2">
		<div class="favorite-box">
			<img src="img/alpha2.jpg" width="auto" height="160px">
			<div class="updated-tag">
				UPDATED
			</div>
			<button class="remove-btn" id="delete-favorite-product2">
				<img src="./img/delete-icon.svg">	
			</button>
			<p class="pump-name">ALPHA 2</p>
			<button type="button" class="download btn fav" onclick="openPopup()">DOWNLOAD</button>
		</div>
	</div>
  	<div class="favorite" id="product3">
		<div class="favorite-box">
			<img src="img/alpha3.jpg" width="auto" height="160px">
			<button class="remove-btn" id="delete-favorite-product3">
				<img src="./img/delete-icon.svg">	
			</button>
			<p class="pump-name">ALPHA 3</p>
			<button type="button" class="download btn fav" onclick="openPopup()">DOWNLOAD</button>
		</div>
	</div>
</div>

<!-- Search form for adding products to favourites -->
<div class="search-form">
	<label><h2>Find a product you would like to add to your favourites:</h2></label>
	<form>
		 <input type="text" class="search-input" name="product">
		 <input class="btn" type="submit" id="add-product" value="ADD PRODUCT TO FAVOURITES">
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

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
	// Bring up the popup and overlay when download button is clicked
	function openPopup() {
	    var popup = document.getElementById("popup");
	    var overlay = document.getElementById("overlay");
    	popup.style.display = "block";
   	 	overlay.style.display = "block";
	}
	// Closes the popup and overlay when users clicks outside of the popup
	function closePopup() {
		var popup = document.getElementById("popup");
	    var overlay = document.getElementById("overlay");
	    popup.style.display = "none";
	    overlay.style.display = "none";
	}

	//Bring up the notification on any keypress
	var notification = document.getElementById("notification");
	window.addEventListener("keydown", function(e) {
		notification.style.display ="block"});

	//Deletes product from favourites
	$( "#delete-favorite-product1" ).click(function() {
	  	var remove = document.getElementById("product1");
		remove.style.display = "none";
	});

	$( "#delete-favorite-product2" ).click(function() {
	  	var remove = document.getElementById("product2");
		remove.style.display = "none";
	});

	$( "#delete-favorite-product3" ).click(function() {
	  	var remove = document.getElementById("product3");
		remove.style.display = "none";
	});

	//Drag and drop sorting for products
	$( function() {
	    $( ".favorite-row" ).sortable();
	    $( ".favorite-row" ).disableSelection();
  	});

  	// Moves  first product from last bought to favourites and replaces add button with remove button
	$( "#add-product1" ).click(function() {
	  	jQuery("#latest-product1").detach().appendTo('.favorite-row');
		var addBtn = document.getElementById("add-product1");
		var removeBtn = document.getElementById("delete-latest-product1");
		addBtn.style.display = "none";
	    removeBtn.style.display = "block";
	});

	// Moves first product from favourites to last bought and replaces remove button with add button
	$( "#delete-latest-product1" ).click(function() {
	  	jQuery("#latest-product1").detach().appendTo('.latest-purchases');
		var addBtn = document.getElementById("add-product1");
		var removeBtn = document.getElementById("delete-latest-product1");
		addBtn.style.display = "block";
	    removeBtn.style.display = "none";
	});

	 // Moves secondx` product from last bought to favourites and replaces add button with remove button
	$( "#add-product2" ).click(function() {
	  	jQuery("#latest-product2").detach().appendTo('.favorite-row');
		var addBtn = document.getElementById("add-product2");
		var removeBtn = document.getElementById("delete-latest-product2");
		addBtn.style.display = "none";
	    removeBtn.style.display = "block";
	});

	// Moves secondx` product from favourites to last bought and replaces remove button with add button
	$( "#delete-latest-product2" ).click(function() {
	  	jQuery("#latest-product2").detach().appendTo('.latest-purchases');
		var addBtn = document.getElementById("add-product2");
		var removeBtn = document.getElementById("delete-latest-product2");
		addBtn.style.display = "block";
	    removeBtn.style.display = "none";
	});

	 // Moves  third product from last bought to favourites and replaces add button with remove button
	$( "#add-product3" ).click(function() {
	  	jQuery("#latest-product3").detach().appendTo('.favorite-row');
		var addBtn = document.getElementById("add-product3");
		var removeBtn = document.getElementById("delete-latest-product3");
		addBtn.style.display = "none";
	    removeBtn.style.display = "block";
	});

	// Moves third product from favourites to last bought and replaces remove button with add button
	$( "#delete-latest-product3" ).click(function() {
	  	jQuery("#latest-product3").detach().appendTo('.latest-purchases');
		var addBtn = document.getElementById("add-product3");
		var removeBtn = document.getElementById("delete-latest-product3");
		addBtn.style.display = "block";
	    removeBtn.style.display = "none";
	});
	
</script>
    </body>
    <img src="./img/footer.png" class="footer">
    <div id="overlay" onclick="closePopup()"></div>
	<div id="popup">
</html>
