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
    
  <!-- Setting a wrapper that would include the tools and the latest purchases part -->
    
<div id="container">
  <aside id="wrapper">
	 <!-- Beginning of the Tools section -->
    <section class="component component-pagetitle">
  		<h1><b>MyGrundfos</b></h1>
    </section>
    <!--Listing the items-->
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
			<a href="subpage4.php"><img src="img/Alpha1L.jpg" width="auto" height="160px"></a>
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
			<a href="subpage5.php"><img src="img/CMBE.jpg" width="auto" height="160px"></a>
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
			<a href="subpage6.php"><img src="img/CMB-PM1.jpg" width="auto" height="160px"></a>
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
	<h1 class="main-heading">MARKETING MATERIALS</h1>
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
			<a href="subpage.php" id="product1-link"><img src="img/ALPHA1.png" width="auto" height="160px"></a>
			<div class="updated-tag" id="product1-tag">
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
			<a href="subpage2.php"><img src="img/alpha2.jpg" width="auto" height="160px"></a>
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
			<a href="subpage3.php"><img src="img/alpha3.jpg" width="auto" height="160px"></a>
			<button class="remove-btn functional-btn" id="delete-favorite-product3">
				<img src="./img/delete-icon.svg">	
			</button>
			<p class="pump-name">ALPHA 3</p>
			<button type="button" class="download btn fav secondary-btn" onclick="openPopup()">DOWNLOAD</button>
		</div>
	</div>
	<div class="favorite" id="product4">
		<div class="favorite-box">
			<a href="subpage4.php"><img src="img/Magna1.png" width="auto" height="160px"></a>
			<button class="remove-btn functional-btn" id="delete-favorite-product4">
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
<div id="notification">
	<div onclick="closeNotification()">
		<img src="./img/close-icon.svg" id="close-notification">
	</div>
	<h2>New feature available!</h2>
	<p>Use the newly updated marketing materials module to promote your products and increse your sales.</p>
</div>

<img src="./img/footer.png" class="footer">
<div id="overlay" onclick="closePopup()"></div>
<div id="popup">
	<section class="information">
	        <div class="keyPoints">
	            <h4>Key selling points:</h4>
	            <ul>
	                <li>Highly flexible</li>
	                <li>Low energy consumption</li>
	                <li>One Touch operation enables simple set up</li>
	                <div class="hiddenKeys" style="display:none;">
	                    <li>Power usage LED display</li>
	                    <li>Backward compatible with older Grundfos circulator housings</li>
	                    <li>Plug & Pump – no need to open terminal box </li>
	                </div>
	                <button class="keyDropDown"><img src="img/caret-down.png" alt="caret down icon"></button>
	            </ul>

	        </div>
	        <h4>Download marketing materials:</h4>
	        <div class="downloadMM">
	            <form>
	                <div class="imgDrop">
	                    <input type="image" name="material" id="images" src="img/caret-down.png" onclick="event.preventDefault()">
	                    <label for="images">Images</label>
	                </div>
	                <div class="imgDropBox" style="display:none;">
	                    <input type="checkbox" name="material" id="web" value="web">
	                    <label for="web">Web</label><br>
	                    <input type="checkbox" name="material" id="print" value="print">
	                    <label for="print">Print</label>
	                </div>
	                <div>
	                    <input type="checkbox" name="material" id="webBanners" value="webBanners">
	                    <label for="webBanners">Web banners</label>
	                </div>
	                <div>      
	                    <input type="checkbox" name="material" id="selectAll" value="selectAll">
	                    <label for="selectAll">Select all</label>
	                </div>
	            </form>
	            <p>Donwload size: <span id="sub1Count">0</span> mb</p>
	            <button class="downloadFiles"><span>download</span></button>
	        </div>
	        <div class="emailMe">
	            <div class="emailInput"> 
	                <input type="checkbox" name="material" id="sendEmail" value="sendEmail">
	                <label for="sendEmail">Send me e-mail when marketing materials for this product are uploaded</label>
	            </div> 
	            <button><span>SAVE</span></button>
	        </div>
	        <div class="addFav">
	            <div>
	                <p>Add product to favourite section</p>
	                <img src="img/square-add-button.png" alt="add button">
	            </div>
	        </div>
	    </section> 
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>
