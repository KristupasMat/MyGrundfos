$(document).ready(function(){
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






