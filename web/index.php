<!DOCTYPE html>
<html>
  <head>
    <title>Smartlist - The sophisticated home inventory app</title>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="https://res.cloudinary.com/smartlist/image/upload/v1617905788/logo_z3yoqm.svg">
    <link rel="favicon" href="https://res.cloudinary.com/smartlist/image/upload/v1617905788/logo_z3yoqm.svg">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b4d3efb29c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@materializecss/materialize@1.0.0/dist/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Primary Meta Tags -->
    <title>Smartlist</title>
    <meta name="title" content="Smartlist">
    <meta name="description" content="Smartlist is a free home inventory app that lets you keep track of what you have in your home, and helps you save money">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://smartlist.ga/">
    <meta property="og:title" content="Smartlist">
    <meta property="og:description" content="Smartlist is a free home inventory app that lets you keep track of what you have in your home, and helps you save money">
    <meta property="og:image" content="https://i.ibb.co/2kSY71Q/Screenshot-2021-04-08-1-57-23-PM.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://smartlist.ga/">
    <meta property="twitter:title" content="Smartlist">
    <meta property="twitter:description" content="Smartlist is a free home inventory app that lets you keep track of what you have in your home, and helps you save money">
    <meta property="twitter:image" content="https://res.cloudinary.com/smartlist/image/upload/v1617905788/logo_z3yoqm.svg">
    <style>
      body {font-family: 'Nunito', sans-serif;overflow-x: hidden;}
      nav {-webkit-box-shadow:0 2px 0 0 #f5f5f5;box-shadow:0 8px 16px rgba(10,10,10,.05) !important;position:fixed;top:0;transition: all .5s;z-index:2}
      .show-on-small-only {display: none}
      .bottom-sheet{width: 70% !important;margin: auto !important}
      body {padding-top: 65px;}
      nav a {color: black !important}
      .btn-flat {background: transparent !important}
      .btn-outlined {border: 1px solid gray}
      .btn-outlined:hover {border: 1px solid black}
      .btn-outlined:active {background: rgba(0,0,0,0.1)}
      .__radius {border-radius: 999px;user-select: none;}
      .btn.__radius {line-height: 45px;height: 45px;padding: 0 30px;margin: 3px;box-shadow: none;text-transform: none;font-weight: bold;font-family: 'Roboto'}
      .blue.lighten-2:hover {opacity: .8}
      .green.circle {width: 10px;height: 10px;background: green;display: inline-block}
      nav a:hover {background: rgba(0,0,0,0.02) !important}
      .blue.lighten-2 {transition-duration: .2s !important;transition-delay: 0}
      .__padding {padding-top: 7vw !important}
      .slide-img {position: absolute;border-radius: 10px;}
      .__icons i {font-size: 25px;padding: 16px;border: 1px solid #eee;border-radius: 999px;width: 60px;height: 60px;}
      .__icons h6 {margin-bottom:10px;font-weight: bold}
      .__icons p {margin-top:0;}
      @media only screen and (max-width: 600px) {
        .show-on-small-only {display: block}
        .__container {padding: 0 !important}
        .container {min-height: auto !important}
        .bottom-sheet {width: 100% !important}
      }
    </style>
  </head>
  <body>
    <nav class="white" id="navbar">
      <ul>
        <li><a href="#"> <img src="https://res.cloudinary.com/smartlist/image/upload/v1617905788/logo_z3yoqm.svg" width="30px" style="vertical-align:middle"> <span style="margin-left: 5px;font-family: 'Exo', sans-serif;position:relative;bottom: -3px;">Smartlist</span></a></li>
      </ul>
      <ul class='right'>
        <li><a class="hide-on-small-only" href="https://help.smartlist.ga">Knowledge Base</a></li>
        <li><a class="hide-on-small-only" href="https://stats.uptimerobot.com/g85lwSl9Lk">Server Status <div class="green circle"></div></a></li>
        <li><a href="./login">Login</a></li>
        <li><a href="./signup">Sign Up!</a></li>
      </ul>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col s12 m6" style="padding-top: 6vw;">
          <h3 data-aos='fade-up'>
            The <span class="green-text">sophisticated</span> home inventory app
          </h3>
          <p data-aos='fade-up' data-aos-delay='100'>
            Smartlist is a <b>free home inventory app</b> that lets you keep track of what you have in your home, and helps you save money
          </p>
          <p data-aos='fade-up' style="margin:0;display:inline-block;" data-aos-delay='200'><a href="./signup" class="waves-effect waves-light btn __radius blue lighten-2 white-text">Get Started</a></p>
          <p data-aos='fade-up' style="margin:0;display:inline-block;" data-aos-delay='250'><a href="#modal1" class="waves-effect modal-trigger btn __radius btn-outlined btn-flat black-text">Discover</a></p>
        </div>
        <div class="col s6 hide-on-small-only">
          <img src="https://i.ibb.co/NrxCwHt/gummy-sweet-home.png" width="100%">
        </div>
      </div>
      <h4 class="center" data-aos='fade-up'>
        Awesome Features
      </h4>
      <p class="center" data-aos='fade-up'>
        To make you super happy!
      </p>
      <div class="row" data-aos="fade-up">
        <div class="col s12 m6 __padding">
          <h5>
            <b>Be more productive</b>
          </h5>
          <p>
            Our rich-featured todo list and grocery list all help you be more productive in no time!.
          </p>
        </div>
        <div class="col s6 hide-on-small-only">
          <img src="https://i.ibb.co/QN9VSBf/pixeltrue-plan-1.png" width="100%">
        </div>
      </div>
      <div class="row" data-aos="fade-up">
        <div class="col s6 hide-on-small-only">
          <img src="https://i.ibb.co/59CfTSq/pixeltrue-data-analyse-1.png" width="100%">
        </div>
        <div class="col s12 m6 __padding">
          <h5>
            <b>Know how much you spend</b>
          </h5>
          <p>
            Keep track of how much you spend using our hi-tech budget meter! Save so much more money by using this free feature!
          </p>
        </div>
      </div>
      <div class="row" data-aos="fade-up">
        <div class="col s12 m6 __padding">
          <h5>
            <b>Search your home</b>
          </h5>
          <p>
            Search your home using filters, rooms, and stars! Access your entire home's inventory at the tap of a button!
          </p>
        </div>
        <div class="col s6 hide-on-small-only">
          <img src="https://i.ibb.co/xDgVVNY/pixeltrue-seo-1.png" width="100%">
        </div>
      </div>
    </div>
    <div style="background: #eee">
      <div class="container" style="padding: 50px 0;overflow: hidden;min-height: 600px;">
        <div class="row" style="margin:0;">
          <div class="col s12 m6 __container" style="padding-top: 25vh;">
            <h4 data-aos="fade-up">
              <b>Smart and intuitive</b>
            </h4>
            <p data-aos="fade-up" data-aos-delay="100">
              Our app is designed for anyone and everyone to use. Takes only 1 minute to sign up! No payments, credit cards, or any of that needed at all!
            </p>
          </div>
          <div class='col s12 m6 hide-on-small-only' style="overflow: hidden">
            <img src="https://i.ibb.co/j3kXWMw/Screenshot-2021-04-08-12-31-41-PM.png" height="500px"  class="slide-img" data-aos="fade-left">
          </div>
          <div class="col s12 show-on-small-only">
            <img src="https://i.ibb.co/j3kXWMw/Screenshot-2021-04-08-12-31-41-PM.png" width="100%"  data-aos="fade-left">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h4 class="center" data-aos="fade-up">
        Wait, there's even more?!?
      </h4>
      <p class="center" data-aos="fade-up">
        To keep you even happier!
      </p>
      <br>
      <div class="row __icons center">
        <div class="col s12 m4">
          <i class="fa fa-shield"data-aos="zoom-in"></i>
          <h6 data-aos="fade-up">
            Secure
          </h6>
          <p data-aos="fade-up">
            Our dashboard is highly secure, and immune against attacks
          </p>
        </div>
        <div class="col s12 m4">
          <i class="fa fa-sync"data-aos="zoom-in"></i>
          <h6 data-aos="fade-up">
            Sync
          </h6>
          <p data-aos="fade-up">
            Sync your inventory with others you live with!
          </p>
        </div>
        <div class="col s12 m4">
          <i class="fa fa-star" data-aos="zoom-in"></i>
          <h6 data-aos="fade-up">
            Star items
          </h6>
          <p data-aos="fade-up">
            Star important items you edit usually
          </p>
        </div>

      </div>

      <div class="row __icons center">
        <div class="col s12 m4">
          <i class="fa fa-map-marker-alt" data-aos="zoom-in"></i>
          <h6 data-aos="fade-up">
            Custom Rooms
          </h6>
          <p data-aos="fade-up">
            Create custom categories for items!
          </p>
        </div>
        <div class="col s12 m4">
          <i class="fa fa-pizza-slice" data-aos="zoom-in"></i>
          <h6 data-aos="fade-up">
            Recipe generator
          </h6>
          <p data-aos="fade-up">
            Save time finding recipes!
          </p>
        </div>
        <div class="col s12 m4">
          <i class="fa fa-qrcode" data-aos="zoom-in"></i>
          <h6 data-aos="fade-up">
            QR codes
          </h6>
          <p data-aos="fade-up">
            Scan/Generate QR codes to quickly build up your inventory
          </p>
        </div>

      </div>
    </div>
    <footer class="page-footer blue lighten-1">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Smartlist</h5>
            <p class="grey-text text-lighten-4">The <b>sophisticated</b> home inventory app</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="https://community.smartlist.ga/">Forum</a></li>
              <li><a class="grey-text text-lighten-3" href="https://help.smartlist.ga/">Knowledge base</a></li>
              <li><a class="grey-text text-lighten-3" href="https://smartlist.ga/dashboard/beta">Dashboard</a></li>
              <li><a class="grey-text text-lighten-3" href="https://smartlist.ga/signup">Signup</a></li>
              <li><a class="grey-text text-lighten-3" href="https://smartlist.ga/login">Login</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2021 Copyright Text
          <a class="grey-text text-lighten-4 right" href="https://manuthecoder.ml">An app by ManuTheCoder</a>
        </div>
      </div>
    </footer>
    <div id="modal1" class="bottom-sheet modal modal-fixed-footer" style="height: 90vh;max-height: 90vh;overflow: hidden">
      <div class="modal-content" style="overflow: hidden">
        <div class="wistia_responsive_padding" style="padding:56.34% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><iframe src="https://fast.wistia.net/embed/iframe/sfc6uu2b6v?videoFoam=true" title="Smartlist ‑ Made with FlexClip Video" allow="autoplay; fullscreen" allowtransparency="true" frameborder="0" scrolling="no" class="wistia_embed" name="wistia_embed" allowfullscreen msallowfullscreen width="100%" height="100%"></iframe></div></div>
        <script src="https://fast.wistia.net/assets/external/E-v1.js" async type="text/javascript"></script>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@materializecss/materialize@1.0.0/dist/js/materialize.min.js"></script>
    <script>
      AOS.init();
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.getElementById("navbar").style.top = "0";
        } else {
          document.getElementById("navbar").style.top = "-90px";
        }
        prevScrollpos = currentScrollPos;
      }
      $('.modal').modal()
    </script>
  </body>
</html>
