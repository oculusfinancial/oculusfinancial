<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- <title>Oculus Financial Intelligence</title> -->

    <link rel="shortcut icon" href="favicon.png">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="canonical" href="http://www.oculus.financial/" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/animate.css">
    <script src="assets/wow.min.js"></script>
    <script>new WOW().init();</script>

    <!-- home page meta -->
    <title>Oculus Financial Intelligence - Home</title>
    <!-- /end home page meta -->
    </head>
    <body class="wow animated fadeIn" data-wow-duration="0.5s" data-wow-delay="0">
    <!-- === PHP for home page / about page decisionmaking, and loading of the intro graphic === -->
    <?php if (!isset($page_id)) { //checks to see if if the variable pgae_id has a value set by the about.html page.
      //then sets the page_id to index if it is not set to anything else yet.
      $page_id = "home";
    }
    ?>
    <!--  
    <?php if ($page_id == "home") { ?>
      <!--checks to see if the page id has already been set to about by the about.php page
    <div class="outer" id="#videoholder">
      <div class="middle animated fadeIn">
        <div class="inner">
          <div id="video1">
            <img src="assets/videos/oculus-intro-small.gif?<?php echo date("Ymdgis"); ?>" alt="" />
          </div>
        </div>
      </div>
    </div>
    <?php } ?>
    <!-- === END of PHP for home page / about page decisionmaking, and loading of the intro graphic === -->
    
    
    <header>
      <nav id="main">
        <div class="title-bar" data-responsive-toggle="menu" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
          <!-- <div class="title-bar-title"> MENU</div> -->
        </div>
      
        <div class="menu-centered" id="menu">
          <!-- <div class="menu-background"></div> -->
          <ul class="menu vertical medium-horizontal">
            <li class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0"><a class="homeLink" href="index.php">home</a></li>
            <li class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.1s"><a href="services.php">services</a></li>
            <!-- 
            <li class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s"><a href="how-we-work.php">how we work</a></li>  -->
            <li class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s"><a href="our-team.php">our team</a></li>
            <li class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s"><a href="partners.php">partners</a></li>
            <li class="wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s"><a href="contact.php">contact</a></li>
          </ul>
        </div>
        <!--/#menu-->
      </nav>
    </header>
    
    <!-- hero image -->
    <section class="background home-background hero full-height-hero">
      <div class="tint tint-light"></div>
    
    
      <div class="row column text-center">
        <div class="logo wow fadeIn" data-wow-duration="2s" data-wow-delay="0"></div>
      </div>
      <div class="row column text-center">
        <h1 id="title" class="loadanimation wow fadeIn" data-wow-duration="2s" data-wow-delay="0.5s">About Oculus</h1>
      </div>
      <br>
      <div class="row">
        <div class="columns small-12 medium-8 small-centered text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
          <p>Oculus is a specialist financial intelligence service provider with a unique team of international experts from careers in Financial Analysis, Forensic Accounting and Auditing, the Security and Intelligence Services, Law Enforcement and Legal Practice.</p>
    
          <p>Oculus conducts investigations to help clients improve investment returns, protect and recover investments and assets, mitigate financial risk and investigate financial crimes.</p>
    
          <p>We provide our clients with quality assured information using an investigations service with a global reach enabling informed decision making of the highest quality.</p>
    
          <p>Unlike standalone accounting, legal and private investigator practices our product fuses financial, intelligence and legal skills to provide targeted, detailed and actionable insights.</p>
    
          <br><br><br><br><br><br><br>
        </div>
      </div>
    </section>
    
    <!-- page content if there is any. -->
    <section>
    
      <section id="call-to-action">
        <div class="row column wow fadeIn" data-wow-duration="1s" data-wow-delay="0">
          <div class="columns small-12 medium-1 small-centered medium-uncentered text-center medium-text-right">
            <i class="fa fa-2x fa-comments" aria-hidden="true" style="margin-top:0.4rem;color:#060d1e;"></i>
          </div>
          <div class="columns small-12 medium-8 small-centered medium-uncentered text-center medium-text-left">
            <h6>have a specific project or general enquiry?</h6>
            <span>Please contact us today and we will endeavour to get back to you within 24 hours.</span>
          </div>
          <div class="columns small-12 medium-3 small-centered medium-uncentered text-center">
            <a class="action ocbutton" href="contact.php"><h6>contact us</h6></a>
          </div>
      
        </div>
      </section>
    </section>
    
    <footer id="footer">
      <div class="row column small-centered text-center">
        <div class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0"></div>
      </div>
      <br />
      <div class="row text-center">
        <!-- 
        <div class="columns small-12 medium-4 small-centered medium-uncentered wow fadeIn" data-wow-duration="2s" data-wow-delay="0">
          <h3>Services</h3>
          <ul>
            <li><a class="hashlink" href="services.php#financial-investors">financial investors</a></li>
            <li><a class="hashlink" href="services.php#corporate-clients">corporate clients</a></li>
            <li><a class="hashlink" href="services.php#private-clients">private clients</a></li>
          </ul>
        </div>  -->
        <div class="columns small-12 medium-4 small-centered wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s">
          <h3>Contact Oculus</h3>
          <ul>
            <li>25 Park Lane<br />London, W1K 1RA</li>
            <li>+44 (0)207 355 7793</li>
            <li>
              <a href="https://www.linkedin.com/company/oculus-financial-intelligence-limited/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
        <!--  
        <div class="columns small-12 medium-4 small-centered medium-uncentered wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
          <h3>How we work</h3>
          <ul>
            <li><a class="hashlink" href="how-we-work.php#contracting">contracting</a></li>
            <li><a class="hashlink" href="how-we-work.php#methodology">methodology</a></li>
            <li><a class="hashlink" href="how-we-work.php#capability">capability</a></li>
          </ul>
        </div> -->
      </div>
    </footer>
    <footer id="copy-footer">
      <div class="row column small-centered text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">
        <span>
        We are proud supporters of <a href="http://www.firstlighttrust.co.uk/"  target="_blank"><img class="fadeIn style" src="./assets/img/brand/FirstLight-Trust-logo-310x6-blue background.png" alt="First Light Trust charity logo" width="200"></a>
        </span>
      </div>
      <div class="row column small-centered text-center wow fadeIn" data-wow-duration="2s" data-wow-delay="2s">
        <span>
          Copyright &copy; <?php echo date('Y'); ?> Oculus Financial Intelligence LTD. All Rights Reserved.
          <!-- Website by <a href="http://www.superframe.io/" target="_blank" class="dissolve">SUPERFRAME</a> -->
        </span>
      </div>
    </footer>

    <script src="assets/js/app.js"></script>
    <!-- <script src="assets/readmore.min.js"></script> -->
    <script>
    $( function() {
        $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
        $( "#tabs li" ).removeClass( "ui-corner-top" ).addClass( "ui-corner-left" );
        $( "#tabs" ).tabs({
                collapsible: true,
                active: false,
                activate: function(event, ui){
                    $.when($( "#summary" ).hide(200)).then(function() {
                        $('html,body').animate({
                               scrollTop: $("#articles").offset().top -100
                           }, "slow");
                    });
                },
                show: function(event, ui) {
                    $(ui.panel).show("slow");
                }
        });
    });
    </script>
  </body>
</html>