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

<section>
<div class="product-box">
    <img src="img/ALPHA1.png" width="auto" height="150px">
<div class="updated-tag">
  UPDATED
</div>
<i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
</div>
<p class="pump-name">ALPHA 1</p>
<button type="button" class="download btn">DOWNLOAD</button>
</section>

<section class="section-latest">
<div class="product-box">
    <img src="img/alpha2.jpg" width="auto" height="150px">
<div class="updated-tag">
  UPDATED
</div>
<i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
</div>
<p class="pump-name">ALPHA 2</p>
<button type="button" class="download btn">DOWNLOAD</button>
</section>

<section class="section-latest">
<div class="product-box">
<img src="img/alpha3.jpg" width="auto" height="150px">
<i class="fa fa-plus-circle fa-3x" aria-hidden="true"></i>
</div>
<p class="pump-name">ALPHA 3</p>
<button type="button" class="download btn">DOWNLOAD</button>
</section>
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
  <section class="favorite">
  <div class="favorite-box">
      <img src="img/ALPHA1.png" width="auto" height="125px">
  <div class="updated-tag">
    UPDATED
  </div>
  </div>
  <p class="pump-name">ALPHA 1</p>
  <button type="button" class="download btn fav">DOWNLOAD</button>
  </section>
        
          <section class="favorite">
  <div class="favorite-box">
      <img src="img/alpha2.jpg" width="auto" height="125px">
  <div class="updated-tag">
    UPDATED
  </div>
  </div>
  <p class="pump-name">ALPHA 2</p>
  <button type="button" class="download btn fav">DOWNLOAD</button>
  </section>
        
          <section class="favorite">
  <div class="favorite-box">
      <img src="img/alpha3.jpg" width="auto" height="125px">
  </div>
  <p class="pump-name">ALPHA 3</p>
  <button type="button" class="download btn fav">DOWNLOAD</button>
  </section>
        </div>
  <!-- Search form for adding products to favourites -->
  <div class="search-form">
		<label><h2>Find a product you would like to add to your favourites:</h2></label>
		<form>
			 <input type="text" class="search-input" name="product">
			 <input class="btn" type="submit" id="add-product" value="ADD PRODUCT TO FAVOURITES">
		</form>
        </div></main>
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


                
            

            
        

    </body>
    <img src="./img/footer.png" class="footer">
</html>
