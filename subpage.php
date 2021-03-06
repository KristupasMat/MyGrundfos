<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>
    <body>
        <img class="header" src="./img/header.png">
        <ul class="breadcrumb alignBread">
            <li><a href="#">Grundfos</a></li>
            <li><a href="index.php">MyGrundfos</a></li>
            <li>ALPHA_1</li>
        </ul>
        <h2 class="subHeading">ALPHA1</h2>
        <main class="subNumber1">
            <div class="imgBackground">
                <img id="alpha1" src="img/ALPHA1.png" alt="Alpha 1">
            </div>
            <section class="information">
                <div class="keyPoints">
                    <h1 class="main-heading">KEY SELLING POINTS:</h4>
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
                <h1 class="main-heading">DOWNLOAD MARKETING MATERIALS:</h1>
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
                    <p>Download size: <span id="sub1Count">0</span> mb</p>
                    <button class="downloadFiles btn secondary-btn"><span>download</span></button>
                </div>
                <div class="emailMe">
                    <div class="emailInput"> 
                        <input type="checkbox" name="material" id="sendEmail" value="sendEmail">
                        <label for="sendEmail">Send me e-mail when marketing materials for this product are uploaded</label>
                    </div> 
                    <button class="btn secondary-btn"><span>SAVE</span></button>
                </div>
                <div class="addFav">
                     <button class="downloadFiles btn functional-btn">
                        ADD PRODUCT TO FAVORITE SECTION
                    </button>
                </div>
            </section>    
        </main>
        <script src="scripts/script.js"></script>
    </body>
    <img class="footer" src="./img/footer.png">
</html>