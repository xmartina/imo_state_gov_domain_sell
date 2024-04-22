<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
<link href="images/favicon.png" rel="icon">
<title>imostate.e-gov.ng | For Sale !!</title>
<meta name="description" content="imostate.e-gov.ng | For Sale !!">
<meta name="author" content="e-gov.ng">

<!-- Web Fonts
======================== -->
<link rel='stylesheet' href='../../css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================== -->
<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="vendor/font-awesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
<!-- Colors Css -->
<link id="color-switcher" type="text/css" rel="stylesheet" href="#">
</head>
<body>

<!-- Preloader -->
<div class="preloader">
  <div class="lds-ellipsis">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- Preloader End --> 

<!-- Document Wrapper
=============================== -->
<div id="main-wrapper"> 
  
  <!-- Hero Backgroung
  ========================= -->
  <div class="hero-wrap">
    <div class="hero-mask opacity-8 bg-dark"></div>
    <div class="hero-bg hero-bg-scroll" style="background-image:url('images/intro-bg.jpg');"></div>
    <div class="hero-content py-4 py-lg-0">
      <div class="container">
        <div class="row min-vh-100"> 
          
          <!-- Domain Information
          ========================= -->
          <div class="col-lg-8 d-flex flex-column">
            <div class="py-5 my-auto">
              <div class="mx-auto text-center text-lg-start">
                <h1 class="text-14 text-white bg-danger d-inline-block fw-700 rounded px-4 mb-4">For Sale!</h1>
                <h2 class="text-17 fw-700 text-white mb-4">imostate.e-gov.ng</h2>
                <p class="text-light mb-4">Imostate.e-gov.ng  is ideal for the single window portal and  one stop shop for a wide range of the e-government services and activities of the Government of Imo State, Nigeria.</p>
                <h3 class="text-white fw-400 mb-4">Estimated value <span class="badge bg-success text-7 fw-600 ms-2">$33,500</span></h3>
              </div>
              <div class="row text-white justify-items-center">
                <div class="col-sm-6 col-md-2 col-lg-3 d-flex align-items-center justify-content-center justify-content-lg-start"> <span class="text-5 me-2"><i class="fas fa-phone-alt"></i></span>Skype:</div>
                <div class="col-sm-6 col-md-4 d-flex align-items-center justify-content-center justify-content-md-start mt-2 mt-sm-0"> <span class="text-5 me-2"><i class="fas fa-envelope"></i></span><a class="text-white btn-link text-decoration-none" href="mailto:info@domain@paylage.com">Email: domain@paylage.com</a> </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center justify-content-md-start mt-2 mt-md-0"> <span class="text-5 me-2"><i class="fas fa-globe"></i></span><a class="text-white btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#more-domains_remove_here" href="#">Number of bids: <span class="px-3 py-1 bg-success text-light rounded">17</span></a> </div>
              </div>
            </div>
          </div>
          <!-- Domain Information End --> 
          
          <!-- Make Your offer
          ========================= -->
          <div class="col-lg-4 my-auto py-lg-5">
            <div class="row bg-light rounded text-center mx-0 py-4 mb-4 mb-lg-0">
              <div class="col-11 mx-auto my-3">
                <?php if ($_GET['msg'] == 'email_sent_successfully') { ?>
                <div class="alert alert-success" role="alert">
                  This is a success alert—check it out!
                </div>
                <?php } ?>
                <h3 class="mb-3 fw-600">Make Your offer</h3>
                <p class="text-black-50 mb-4">Please fill out the form below so that the seller receive your offer.</p>
                <!-- Contact Form -->
                <form id="contact-form" action="php/mail.php" method="post">
                  <div class="position-relative icon-group mb-3">
                    <input name="bidder_name" type="text" class="form-control border-2" required="" placeholder="Enter Your Name">
                    <span class="icon-inside"><i class="fas fa-user"></i></span> </div>
                  <div class="position-relative icon-group mb-3">
                    <input name="bidder_email" type="email" class="form-control border-2" required="" placeholder="Enter Your Email">
                    <span class="icon-inside"><i class="fas fa-envelope"></i></span> </div>
                  <div class="position-relative icon-group mb-3">
                    <input name="offer" type="number" class="form-control border-2" required="" placeholder="Enter Your Offer">
                    <span class="icon-inside"><i class="fas fa-dollar-sign"></i></span> </div>
                  <div class="d-grid mt-4">
                    <button id="submit-btn" class="btn btn-primary" name="submit" type="submit">Send My Offer</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- Make Your offer End --> 
        </div>
      </div>
    </div>
  </div>
  <!-- Hero Backgroung End --> 
</div>
<!-- Document Wrapper End --> 

<!-- Modal Popup for More Domains
================================== -->
<div id="more-domains" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><span class="text-5 me-1"><i class="fas fa-globe"></i></span> More Domains For Sale</h5>
        <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <p>Below all Domains are available for sale. Please click on domain link for further information.</p>
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <ul class="list-style-2">
              <li><a href="#">MyDomain.com</a></li>
              <li><a href="#">YourExample.com</a></li>
              <li><a href="#">WeDomainNew.com</a></li>
              <li><a href="#">MyExample.com</a></li>
              <li><a href="#">SaleMyDomain.com</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-4">
            <ul class="list-style-2">
              <li><a href="#">MyDomain.net</a></li>
              <li><a href="#">YourExample.net</a></li>
              <li><a href="#">WeDomainNew.net</a></li>
              <li><a href="#">MyExample.net</a></li>
              <li><a href="#">SaleMyDomain.net</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-lg-4">
            <ul class="list-style-2">
              <li><a href="#">MyDomain.com</a></li>
              <li><a href="#">YourExample.com</a></li>
              <li><a href="#">WeDomainNew.com</a></li>
              <li><a href="#">MyExample.com</a></li>
              <li><a href="#">SaleMyDomain.com</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Popup for More Domains End --> 

<!-- Styles Switcher -->
<div id="styles-switcher" class="left">
  <h5>Color Switcher</h5>
  <hr>
  <ul class="mb-0">
    <li class="blue" data-bs-toggle="tooltip" title="Blue (Default)" data-path="#"></li>
    <li class="indigo" data-bs-toggle="tooltip" title="Indigo" data-path="css/color-indigo.css"></li>
    <li class="purple" data-bs-toggle="tooltip" title="Purple" data-path="css/color-purple.css"></li>
    <li class="cyan" data-bs-toggle="tooltip" title="Cyan" data-path="css/color-cyan.css"></li>
    <li class="pink" data-bs-toggle="tooltip" title="Pink" data-path="css/color-pink.css"></li>
    <li class="red" data-bs-toggle="tooltip" title="Red" data-path="css/color-red.css"></li>
    <li class="teal" data-bs-toggle="tooltip" title="Teal" data-path="css/color-teal.css"></li>
    <li class="green" data-bs-toggle="tooltip" title="Green" data-path="css/color-green.css"></li>
    <li class="yellow" data-bs-toggle="tooltip" title="Yellow" data-path="css/color-yellow.css"></li>
    <li class="orange" data-bs-toggle="tooltip" title="Orange" data-path="css/color-orange.css"></li>
  </ul>
  <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
</div>
<!-- Styles Switcher End --> 

<!-- Script --> 
<script src="vendor/jquery/jquery.min.js"></script> 
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="js/theme.js"></script> 
<!-- Style Switcher --> 
<script src="js/switcher.min.js"></script>
</body>
</html>