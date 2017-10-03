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
