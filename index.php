<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no user-scalable=no">
    <title>Online Printing FDI</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <!-- Start: Navbar -->
    <nav class="navbar navbar-dark navbar-expand-md bg-dark navigation-clean">
        <div class="container"><a class="navbar-brand" href="#"><img id="navLogo" src="assets/img/logo-white.png"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                </ul>
            </div>
        </div>
    </nav><!-- End: Navbar -->
    <!-- Start: Step 1 -->
    <section id="step-1">
        <div class="container d-flex justify-content-center">
            <div class="stepBox">
                <h4 class="stepTitle">Step 1</h4>
                <form action="#" id="printForm" method="POST" enctype="multipart/form-data">
                    <div id="alertBox-1" class="form-row"></div>
                    <div class="form-row justify-content-start">
                        <div class="col-md-6 col-xl-6">
                            <div class="form-group textBox"><label>First Name</label><input id="firstName" class="form-control" type="text" name="firstname" placeholder="Enter your first name" required></div>
                        </div>
                        <div class="col">
                            <div class="form-group textBox"><label>Last Name</label><input id="lastName" class="form-control" type="text" name="lastname" placeholder="Enter your last name"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 col-xl-6">
                            <div class="form-group"><label>Mobile No</label><input id="mobile" class="form-control" type="text" name="mobile" pattern="^\d{7}" placeholder="Enter your mobile number"></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label>Email Address</label><input id="email" class="form-control" type="email" name="email" placeholder="Enter your email address"></div>
                        </div>
                    </div>
                    <div class="form-row btnRow">
                        <div class="col"></div>
                        <div class="col d-flex justify-content-end"><button id="nextStep1" class="btn stepBtn" type="button">Next</button></div>
                    </div>
            </div>
        </div>
    </section><!-- End: Step 1 -->
    <!-- Start: Step 2 -->
    <section id="step-2" class="hide">
        <div class="container d-flex justify-content-center">
            <div class="stepBox">
                <h4 class="stepTitle">Step 2</h4>
                <div id="alertBox-2" class="form-row"></div>
                    <div class="form-row">
                        <div class="col">
                            <label class="fileBox d-flex justify-content-center align-items-center" for="uploadPhotos">Choose photos</label>
                            <p id="numPhotos"></p>
                            <div class="file-upload-wrapper hide"><input type="file" id="uploadPhotos" class="file-upload" name="uploadPhotos[]" multiple="multiple" accept="image/*"></div>
                        </div>
                    </div>
                    <div class="form-row btnRow">
                        <div class="col d-flex justify-content-start"><button id="prevStep2" class="btn stepBtn" type="button">Previous</button></div>
                        <div class="col d-flex justify-content-end"><button id="nextStep2" class="btn stepBtn" type="button">Next</button></div>
                    </div>
            </div>
        </div>
    </section><!-- End: Step 2 -->
    <!-- Start: Step 3 -->
    <section id="step-3" class="step3 hide">
        <div class="container d-flex justify-content-center">
            <div class="stepBox">
                <h4 class="stepTitle">Step 3</h4>
                <div id="alertBox-3" class="form-row"></div>
                    <div class="form-row justify-content-start">
                        <div class="col">
                            <div class="form-group"><label>Size</label>
                                <div class="form-row">
                                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="3R" name="size" value="3R"><label class="form-check-label radioSizes" for="3R">3R</label></div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="4R" name="size" value="4R"><label class="form-check-label radioSizes" for="4R">4R</label></div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="5R" name="size" value="5R"><label class="form-check-label radioSizes" for="5R">5R</label></div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="6R" name="size" value="6R"><label class="form-check-label radioSizes" for="6R">6R</label></div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="6RW" name="size" value="6RW"><label class="form-check-label radioSizes" for="6RW">6RW</label></div>
                                    </div>
                                    <div class="col-5 col-sm-4 col-md-3 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="8R" name="size" value="8R"><label class="form-check-label radioSizes" for="8R">8R</label></div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="8RW" name="size" value="8RW"><label class="form-check-label radioSizes" for="8RW">8RW</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row justify-content-start">
                        <div class="col">
                            <div class="form-group"><label>Paper</label>
                                <div class="form-row">
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="glossy" name="paper" value="Glossy"><label class="form-check-label radioSizes" for="glossy">Glossy</label></div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="lustre" name="paper" value="Lustre"><label class="form-check-label radioSizes" for="lustre">Lustre</label></div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="pearl" name="paper" value="Pearl"><label class="form-check-label radioSizes" for="pearl">Pearl</label></div>
                                    </div>
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="silk" name="paper" value="Silk"><label class="form-check-label radioSizes" for="silk">Silk</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row justify-content-start">
                        <div class="col">
                            <div class="form-group"><label>Fit-in or Fill-in</label>
                                <div class="form-row">
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="fit-in" name="style" value="Fit-in"><label class="form-check-label radioSizes" for="fit-in">Fit-in</label></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="fill-in" name="style" value="Fill-in"><label class="form-check-label radioSizes" for="fill-in">Fill-in</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row justify-content-start">
                        <div class="col">
                            <div class="form-group"><label>Border</label>
                                <div class="form-row">
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xl-2">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="bdYes" name="border" value="Yes"><label class="form-check-label radioSizes" for="bdYes">Yes</label></div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="bdNO" name="border" value="No"><label class="form-check-label radioSizes" for="bdNO">No</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row btnRow">
                        <div class="col d-flex justify-content-start"><button id="prevStep3" class="btn stepBtn" type="button">Previous</button></div>
                        <div class="col d-flex justify-content-end"><button id="nextStep3" class="btn stepBtn" type="button">Next</button></div>
                    </div>
            </div>
        </div>
    </section><!-- End: Step 3 -->
    <!-- Start: Step 4 -->
    <section id="step-4" class="hide">
        <div class="container d-flex justify-content-center">
            <div class="stepBox">
                <h4 class="stepTitle">Step 4</h4>
                <div id="alertBox-4" class="form-row"></div>
                    <div class="form-row justify-content-start">
                        <div class="col">
                            <div class="form-group"><label>Delivery Method</label>
                                <div class="stepPL">
                                    <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="delivery-1" name="delivery" value="DoorStep"><label class="form-check-label" for="delivery-1">Doorstep delivery (within Male' only)</label></div>
                                    <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="delivery-2" name="delivery" value="Pickup"><label class="form-check-label" for="delivery-2">Pick up</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row justify-content-start">
                        <div class="col hide" id="door">
                            <div class="form-group"><label>Delivery Address</label>
                                <div class="form-row">
                                    <div class="col"><textarea id="address" class="form-control" placeholder="Enter delivery address" rows="5"></textarea></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row justify-content-start">
                        <div class="col hide" id="store">
                            <div class="form-group"><label>Pickup Store</label>
                                <div class="form-row">
                                    <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3">
                                        <div class="form-check stepRadio"><input class="form-check-input locations" type="radio" id="male" name="location" value="Male"><label class="form-check-label radioSizes pickupRadio" for="male">Male'</label></div>
                                    </div>
                                    <div class="col">
                                        <div class="form-check stepRadio"><input class="form-check-input locations" type="radio" id="hulhumale" name="location" value="Hulhumale"><label class="form-check-label radioSizes pickupRadio" for="hulhumale">Hulhumale'</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row justify-content-start">
                        <div class="col">
                            <div class="form-group"><label>Additional Comments</label>
                                <div class="form-row">
                                    <div class="col"><textarea class="form-control" placeholder="Comments (Optional)" rows="5"></textarea></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row btnRow">
                        <div class="col d-flex justify-content-start"><button id="prevStep4" class="btn stepBtn" type="button">Previous</button></div>
                        <div class="col d-flex justify-content-end"><button id="nextStep4" class="btn stepBtn" type="button">Next</button></div>
                    </div>
            </div>
        </div>
    </section><!-- End: Step 4 -->
    <!-- Start: Step 5 -->
    <section id="step-5" class="hide">
        <div class="container d-flex justify-content-center">
            <div class="stepBox">
                <h4 class="stepTitle">Step 5</h4>
                <div id="alertBox-5" class="form-row"></div>
                    <div class="form-row justify-content-start">
                        <div class="col">
                            <div class="form-group"><label>Order Summary</label>
                                <div class="stepPL">
                                    <hr>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>Customer Name:</p>
                                        </div>
                                        <div class="col">
                                            <p id="cusName"></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>Mobile No:</p>
                                        </div>
                                        <div class="col">
                                            <p id="sumMobile"></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>Email Address:</p>
                                        </div>
                                        <div class="col">
                                            <p id="sumEmail"></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>No of Photos:</p>
                                        </div>
                                        <div class="col">
                                            <p id="sumPhoto"></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>Paper Size:</p>
                                        </div>
                                        <div class="col">
                                            <p id="sumSize"></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>Paper Type:</p>
                                        </div>
                                        <div class="col">
                                            <p id="sumType"></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>Print Style:</p>
                                        </div>
                                        <div class="col">
                                            <p id="sumStyle"></p>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>Border</p>
                                        </div>
                                        <div class="col">
                                            <p id="sumBorder"></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>Delivery Method</p>
                                        </div>
                                        <div class="col">
                                            <p id="sumMethod"></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-row">
                                        <div class="col">
                                            <p>Total (MVR):</p>
                                        </div>
                                        <div class="col">
                                            <p id="sumTotal"></p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row justify-content-start">
                        <div class="col">
                            <div class="form-group"><label>Payment Method</label>
                                <div class="stepPL">
                                    <div class="form-check stepRadio"><input class="form-check-input" type="radio" id="delivery-4" name="payment" checked=""><label class="form-check-label" for="delivery-1">Online Transfer</label></div>
                                </div>
                                <p><em>Please make bank transfer to:</em><br></p>
                                <p>Account Name: <br>FDI STATION PVT LTD<br><br>Account Number: <br>MVR - 7730 000311 550<br></p>
                            </div>
                            <p><em>Make sure to upload the transfer slip</em><br></p>
                        </div>
                    </div>
                    <div class="form-row justify-content-start">
                        <div class="col">
                            <div id="alertBox-6" class="form-row"></div>
                            <div class="form-group"><label>Attach Transfer Slip</label>
                                <div class="form-row">
                                    <div class="col">
                                        <label class="fileBox d-flex justify-content-center align-items-center" for="transferSlip">Choose file</label>
                                        <p id="slipName"></p>
                                        <div class="file-upload-wrapper hide fileBox"><input type="file" id="transferSlip" class="file-upload" accept="image/*" name="transferSlip[]"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row btnRow">
                        <div class="col d-flex justify-content-start"><button id="prevStep5" class="btn stepBtn" type="button">Previous</button></div>
                        <div class="col d-flex justify-content-end"><button class="btn stepBtn" type="submit" name="submit">Submit</button></div>
                    </div>
                </form>
            </div>
        </div>
    </section><!-- End: Step 5 -->
    <!-- Start: Footer -->
    <footer id="footer1">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-xl-3 footer-navigation"><img id="footerLogo" class="fa-2x" src="assets/img/logo-white.png">
                    <p class="company-name">FDI Station Private Limited © 2020</p>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-4 footer-contacts">
                    <div class="footer-text"><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p>Faamudheyri Magu, <br>Male', Rep of Maldives</p>
                    </div>
                    <div class="footer-text"><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-left">Phone:<br>+960 333 8855<br></p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 offset-md-0 offset-xl-3 footer-about">
                    <div class="d-flex flex-row-reverse justify-content-end justify-content-sm-end justify-content-md-start social-links social-icons"><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook" style="color: #ffffff;"></i></a><a href="https://www.instagram.com" target="_blank"><i class="fa fa-instagram" t="" style="color: #ffffff;"></i></a><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" t="" style="color: #ffffff;"></i></a></div>
                </div>
            </div>
        </div><a class="js-scroll-trigger scroll-to-top rounded" href="#navLogo"><i class="fa fa-angle-up"></i></a>
    </footer><!-- End: Footer --><!-- Load Facebook SDK for JavaScript -->




      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="221480551214552"
  theme_color="#2A94D5">
      </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
    <script src="assets/js/javascript.js"></script>

</body>

</html>