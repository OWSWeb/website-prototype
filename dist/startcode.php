<?php
include_once 'assets/language/language.php';


?>
<!DOCTYPE html>
<html dir="<?php echo $lang['direction']; ?>" lang="<?php echo $lang['code']; ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $lang['PAGE_TITLE']; ?></title>
  <link rel="stylesheet" href="assets/css/app.css">

    <!-- Cookie Consent plugin by Insites - https://cookieconsent.insites.com/ -->
    <link rel="stylesheet" href="cookieconsent.min.css">
    <script async src="cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
        window.cookieconsent.initialise({
          "palette": {
          "popup": {
              "background": "#000"
          },
          "button": {
              "background": "#f1d600"
          }
          },
          "theme": "classic",
          "position": "top",
          "static": true,
          "content": {
            "message": "<?php echo $lang['text_banner_datenschutz']; ?>",
            "dismiss": "<?php echo $lang['button_confirm']; ?>",
            "link": "<?php echo $lang['text_more_infos']; ?>",
            "href": "datenschutz.php"
          }
        })});
    </script>

<script>
<!--

function serialCreate() {

    var text = "<?php echo $lang['text_click2generate']; ?>"

if (document.getElementById("serial").innerHTML == text ) {

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("serial").innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "startcodeapi.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("generate=Ford");

}

    }

-->
</script> 


</head>


<body>
  <div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="logo-nav-wrapper">
          <a href="index.php" class="logo">
            <img src="assets/images/ows-logo.png" alt="OWS Netz Logo" class="logo-image">
          </a>

          <nav class="nav">
            <ul>
              <li><a href="index.php" class="current"><?php echo $lang['text_nav_index']; ?></a></li>
              <li><a href="about.php"><?php echo $lang['text_nav_about']; ?></a></li>
              <li><a href="contact.php"><?php echo $lang['text_nav_kontakt']; ?></a></li>
            </ul>
          </nav>
        </div>

        <div class="header-actions">

        <?php
            include_once 'assets/language/lang-select.php';
        ?>

          <a href="sign-in.php" class="header-action btn btn-secondary"><?php echo $lang['button_login']; ?></a>
          <a href="sign-up.php" class="header-action btn btn-primary"><?php echo $lang['button_register']; ?></a>
        </div>
      </div>
    </header>


    <main class="main">
      <section class="section full-height-section section-light">
        <div class="container section-container center">
          <h1 class="site-heading"><?php echo $lang['page_startcode']; ?></h1>

          <p class="text-center w-800">
            <?php echo $lang['page_startcode_text']; ?>
          </p>
        <?php echo $lang['label_startcode']; ?>
        <div id="serial"><?php echo $lang['text_click2generate']; ?></div>

        <div>
        <button class="btn btn-primary" onclick="serialCreate()"><?php echo $lang['button_generate']; ?></button>
        </div>

        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <div class="logo-nav-wrapper">
          <a href="index.php" class="logo">
            <img src="assets/images/ows-logo.png" alt="OWS Netz Logo" class="logo-image">
          </a>

          <nav class="nav">
            <ul>
              <li><a href="index.php" class="current"><?php echo $lang['text_nav_index']; ?></a></li>
              <li><a href="about.php"><?php echo $lang['text_nav_about']; ?></a></li>
              <li><a href="contact.php"><?php echo $lang['text_nav_kontakt']; ?></a></li>
            </ul>
          </nav>

        </div>

        <div class="footer-actions">
        <?php
            include_once 'assets/language/lang-select.php';
        ?>

          <a href="sign-in.php" class="footer-action btn btn-secondary"><?php echo $lang['button_login']; ?></a>
          <a href="sign-up.php" class="footer-action btn btn-primary"><?php echo $lang['button_register']; ?></a>

        </div>
      </div>
    </footer>
  </div>

  <script async src="assets/js/all.js"></script>
</body>
</html>

