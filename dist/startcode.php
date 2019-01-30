<?php
include_once 'assets/language/language.php';


?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OWS Netz - Das Nachbarschaftsnetzwerk in Salzgitter-Bad</title>
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
    "message": "Diese Website benutzt Cookies. Wenn Sie die Website weiter nutzen, stimmen Sie der Verwendung von Cookies zu.",
    "dismiss": "Ok",
    "link": "Mehr Infos",
    "href": "datenschutz.html"
  }
})});
</script>


<script>
<!--

function serialCreate() {

    var text = "Klicken sie auf generieren."

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
          <a href="index.html" class="logo">
            <img src="https://unsplash.it/50/50" alt="OWS Netz Logo" class="logo-image">
            <p class="logo-text">OWS Netz</p>
          </a>

          <nav class="nav">
            <ul>
              <li><a href="index.html">Startseite</a></li>
              <li><a href="about.html">Der Verein</a></li>
              <li><a href="contact.html">Kontakt</a></li>
            </ul>
          </nav>
        </div>

        <div class="header-actions">

        <?php
            include_once 'assets/language/lang-select.php';
        ?>

          <a href="sign-in.html" class="header-action btn btn-secondary">Einloggen</a>
          <a href="sign-up.html" class="header-action btn btn-primary">Registrieren</a>
        </div>
      </div>
    </header>

    <main class="main">
      <section class="section full-height-section section-light">
        <div class="container section-container center">
          <h1 class="site-heading">StartCode</h1>

          <p class="text-center w-800">
            Mit dem StartCode richten Sie Ihr Endgerat schnell ein.
            Notieren Sie sich den StartCode gut oder drucken ihn aus.
          </p>
        StartCode: 
        <div id="serial">Klicken sie auf generieren.</div>

        <div>
        <button class="btn btn-primary" onclick="serialCreate()">generieren</button>
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

