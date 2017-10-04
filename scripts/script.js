$(document).ready(function(){
    $('input#selectAll').click(function(){
        if($('input#selectAll').is(':checked') ){
            $('input#web').prop('checked', true);
            $('input#print').prop('checked', true);
            $('input#webBanners').prop('checked', true);
        } else {
            $('input#web').prop('checked',false);
            $('input#print').prop('checked', false);
            $('input#webBanners').prop('checked', false);
        }
    });
    $('input[type=checkbox]').click(function(e){
        if ($('input#web').is(':checked') && !$('input#print').is(':checked') && !$('input#webBanners').is(':checked')) {
            $('#sub1Count').text('3');

        } else if ($('input#print').is(':checked') && !$('input#web').is(':checked') && !$('input#webBanners').is(':checked')){
            $('#sub1Count').text('22');

        } else if ($('input#webBanners').is(':checked') && !$('input#print').is(':checked')
                   && !$('input#web').is(':checked')){
            $('#sub1Count').text('0.1');

        } else if ( $('input#web').is(':checked') && $('input#print').is(':checked') && !$('input#webBanners').is(':checked')) {
            $('#sub1Count').text('25');

        } else if ( $('input#web').is(':checked') && $('input#print').is(':checked') && $('input#webBanners').is(':checked')) {
            $('#sub1Count').text('26');

        } else if (!$('input#web').is(':checked') && $('input#print').is(':checked') && $('input#webBanners').is(':checked')){
            $('#sub1Count').text('3');

        } else if($('input#web').is(':checked') && !$('input#print').is(':checked') && $('input#webBanners').is(':checked')){
            $('#sub1Count').text('3');
        } else {
            $('#sub1Count').text('0');
        }
    });
    $('button.downloadFiles').click(function(e) {
        e.preventDefault();
        if ($('input#web').is(':checked') && !$('input#print').is(':checked') && !$('input#webBanners').is(':checked')) {
            $('#sub1Count').text('3');
            window.open('alphaDownload/Web.zip');
        } else if ($('input#print').is(':checked') && !$('input#web').is(':checked') && !$('input#webBanners').is(':checked')){
            $('#sub1Count').text('22');
            window.open('alphaDownload/Print.zip');
        } else if ($('input#webBanners').is(':checked') && !$('input#print').is(':checked')
                   && !$('input#web').is(':checked')){
            $('#sub1Count').text('0.1');
            window.open('alphaDownload/Webbanners.zip');
        } else if ( $('input#web').is(':checked') && $('input#print').is(':checked') && !$('input#webBanners').is(':checked')) {
            $('#sub1Count').text('25');
            window.open('alphaDownload/Images.zip');
        } else if ( $('input#web').is(':checked') && $('input#print').is(':checked') && $('input#webBanners').is(':checked')) {
            $('#sub1Count').text('26');
            window.open('alphaDownload/AllTheFiles.zip');
        } else if (!$('input#web').is(':checked') && $('input#print').is(':checked') && $('input#webBanners').is(':checked')){
            $('#sub1Count').text('3');
            window.open('alphaDownload/print_banners.zip');
        } else if($('input#web').is(':checked') && !$('input#print').is(':checked') && $('input#webBanners').is(':checked')){
            $('#sub1Count').text('3');
            window.open('alphaDownload/web_banners.zip');
        }
    });
    
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

    $( "#delete-favorite-product4" ).click(function() {
        var product4 = document.getElementById("product4");
        product4.style.display = "none";
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

    $( function() {
        var availableTags = [
            "ALPHA 1",
            "ALPHA 2",
            "ALPHA 3",
            "ALPHA1 L",
            "CMBE",
            "CMB-PM1",
            "MAGNA1"
        ];
        $(".search-input").autocomplete({
            source: availableTags
        });
    });  
});

var keyButton = document.querySelector("button.keyDropDown");
var hiddenKeys = document.querySelector("div.hiddenKeys");
var imgDrop = document.querySelector(".imgDrop");
var moreImage = document.querySelector(".imgDropBox");

function showMore(){
    if (hiddenKeys.style.display == "none"){
        hiddenKeys.style.display = "block";

    } else {
        hiddenKeys.style.display = "none";
    }
}
function showMore2(){
    if (moreImage.style.display == "none"){
        moreImage.style.display = "block";
    } else {
        moreImage.style.display = "none";
    }
}
keyButton.addEventListener('click', showMore);
imgDrop.addEventListener("click", showMore2);
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


// Redirect user depending on the input
function redirectSearch() {
    var searchRequest = document.getElementById("search-product").value;
    if(searchRequest == "ALPHA 1") {
        window.location.href = "subpage.php";
    } else if(searchRequest == "ALPHA 2") {
        window.location.href = "subpage2.php";
    } else if(searchRequest == "ALPHA 3") {
        window.location.href = "subpage3.php";
    };
}

// Adds products when using add product search bar
function addProduct() {
    var searchRequest = document.getElementById("add-product").value;
    var product4 = document.getElementById("product4");
    if(searchRequest == "ALPHA1 L") {
        jQuery("#latest-product1").detach().appendTo('.favorite-row');
        var addBtn = document.getElementById("add-product1");
        var removeBtn = document.getElementById("delete-latest-product1");
        addBtn.style.display = "none";
        removeBtn.style.display = "block";
    } else if(searchRequest == "CMBE") {
        jQuery("#latest-product2").detach().appendTo('.favorite-row');
        var addBtn = document.getElementById("add-product2");
        var removeBtn = document.getElementById("delete-latest-product2");
        addBtn.style.display = "none";
        removeBtn.style.display = "block";
    } else if(searchRequest == "CMB-PM1") {
        jQuery("#latest-product3").detach().appendTo('.favorite-row');
        var addBtn = document.getElementById("add-product3");
        var removeBtn = document.getElementById("delete-latest-product3");
        addBtn.style.display = "none";
        removeBtn.style.display = "block";
    } else if(searchRequest == "MAGNA1") {
        product4.style.display = "block";
    };
}

function closeNotification(e) {
    var notification = document.getElementById("notification");
    notification.style.display = "none";
}

//Bring up the notification after few seconds
setTimeout(function(){
        var notification = document.getElementById("notification");
        notification.style.display ="block";
    }, 5000);

