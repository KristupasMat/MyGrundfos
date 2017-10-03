<!DOCTYPE html>
<html>
<head>
  <title>My Grundfos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<img src="./img/header.png" class="header">
<div id="container">
  <aside id="wrapper">
        <section class="component component-pagetitle">
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
			<img src="img/Alpha1L.jpg" width="auto" height="160px">
			<div class="updated-tag">
				UPDATED
			</div>
			<button class="add-favorite-btn functional-btn" id="add-product1">
				<img src="./img/favorite-icon.svg">
			</button>
			<button class="remove-btn functional-btn" id="delete-latest-product1">
				<img src="./img/delete-icon.svg">	
			</button>
		</div>
		<p class="pump-name">ALPHA1 L</p>
		<button type="button" class="download btn secondary-btn" onclick="openPopup()">DOWNLOAD</button>
	</div>
	<div class="product" id="latest-product2">
		<div class="product-box">
			<img src="img/CMBE.jpg" width="auto" height="160px">
			<div class="updated-tag">
				UPDATED
			</div>
			<button class="add-favorite-btn functional-btn" id="add-product2">
				<img src="./img/favorite-icon.svg">
			</button>
			<button class="remove-btn functional-btn" id="delete-latest-product2">
				<img src="./img/delete-icon.svg">	
			</button>
		</div>
		<p class="pump-name">CMBE</p>
		<button type="button" class="download btn secondary-btn" onclick="openPopup()">DOWNLOAD</button>
	</div>
	<div class="product" id="latest-product3">
		<div class="product-box">
			<img src="img/CMB-PM1.jpg" width="auto" height="160px">
			<button class="add-favorite-btn functional-btn" id="add-product3">
				<img src="./img/favorite-icon.svg">	
			</button>
			<button class="remove-btn functional-btn" id="delete-latest-product3">
				<img src="./img/delete-icon.svg">
			</button>
			<p class="pump-name">CMB-PM1</p>
			<button type="button" class="download btn secondary-btn" onclick="openPopup()">DOWNLOAD</button>
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
			 <input type="text" class="search-input" id="search-product" name="product">
			 <input class="btn" type="button" id="find-materials" value="SEARCH" onclick="redirectSearch()">
		</form>
	</div>
<div class="favorite-row">
	<div class="favorite" id="product1">
		<div class="favorite-box">
			<img src="img/ALPHA1.png" width="auto" height="160px">
			<div class="updated-tag">
				UPDATED
			</div>
			<button class="remove-btn functional-btn" id="delete-favorite-product1">
				<img src="./img/delete-icon.svg">	
			</button>
			<p class="pump-name">ALPHA 1</p>
			<button type="button" class="download btn fav secondary-btn" onclick="openPopup()">DOWNLOAD</button>
		</div>
	</div>
	<div class="favorite" id="product2">
		<div class="favorite-box">
			<img src="img/alpha2.jpg" width="auto" height="160px">
			<div class="updated-tag">
				UPDATED
			</div>
			<button class="remove-btn functional-btn" id="delete-favorite-product2">
				<img src="./img/delete-icon.svg">	
			</button>
			<p class="pump-name">ALPHA 2</p>
			<button type="button" class="download btn fav secondary-btn" onclick="openPopup()">DOWNLOAD</button>
		</div>
	</div>
  	<div class="favorite" id="product3">
		<div class="favorite-box">
			<img src="img/alpha3.jpg" width="auto" height="160px">
			<button class="remove-btn functional-btn" id="delete-favorite-product3">
				<img src="./img/delete-icon.svg">	
			</button>
			<p class="pump-name">ALPHA 3</p>
			<button type="button" class="download btn fav secondary-btn" onclick="openPopup()">DOWNLOAD</button>
		</div>
	</div>
	<div class="favorite" id="product4">
		<div class="favorite-box">
			<img src="img/Magna1.png" width="auto" height="160px">
			<button class="remove-btn functional-btn" id="delete-favorite-product3">
				<img src="./img/delete-icon.svg">	
			</button>
			<p class="pump-name">MAGNA1</p>
			<button type="button" class="download btn fav secondary-btn" onclick="openPopup()">DOWNLOAD</button>
		</div>
	</div>
</div>

<!-- Search form for adding products to favourites -->
<div class="search-form">
	<label><h2>Find a product you would like to add to your favourites:</h2></label>
	<form>
		 <input type="text" class="search-input" id="add-product" name="product">
		 <input class="btn functional-btn" type="button" value="ADD PRODUCT TO FAVOURITES" onclick="addProduct()">
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
<img src="./img/footer.png" class="footer">
<div id="overlay" onclick="closePopup()"></div>
<div id="popup">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>
