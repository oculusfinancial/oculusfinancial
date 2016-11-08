<!-- home page meta -->
<title>Oculus Financial Intelligence - Home</title>
<!-- /end home page meta -->
{{> body-open}}
<!-- === PHP for home page / about page decisionmaking, and loading of the intro graphic === -->
<?php if (!isset($page_id)) { //checks to see if if the variable pgae_id has a value set by the about.html page.
    //then sets the page_id to index if it is not set to anything else yet.
    $page_id = "home";
  }
?>

<?php if ($page_id != "about") {?> <!--checks to see if the page id has already been set to about by the about.php page-->
  <!-- comment out both opening then seperately, closing divs of the intro graphic -->
<!-- <div class="outer" id="#videoholder">
    <div class="middle animated fadeIn">
        <div class="inner">

            <div id="video1"> -->
              <!-- commented this gif out for now -->
                <!-- <img src="videos/quintel-intro-small-rb.gif?<?php /*echo date("Ymdgis")*/;?>" alt="" /> -->

            <!-- </div>

        </div>
    </div>
</div> -->
<?php } ?>
<!-- === END of PHP for home page / about page decisionmaking, and loading of the intro graphic === -->

<header>
  {{> nav}}
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

{{> callaction}}
</section>

  {{> footer}}
  {{> copy-footer}}
