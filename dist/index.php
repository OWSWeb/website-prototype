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
      <section class="section hero-section">
        <div class="container section-container left">
          <h1 class="site-heading"><?php echo $lang['text_section_index']; ?></h1>
          <p class="lead">
            <?php echo $lang['text_section_index_text']; ?>
          </p>
          <a href="about.php" class="btn btn-primary"><?php echo $lang['button_about']; ?></a>
        </div>
      </section>

      <section class="section">
        <div class="container section-container center">
          <h2 class="section-heading"><?php echo $lang['text_section_freewifi']; ?></h2>

          <p class="text-center w-800">
            <?php echo $lang['text_section_freewifi_text']; ?>
          </p>

          <img src="assets/images/qr-code.png" alt="OWS freeWifi QR-Code" class="img">
        </div>
      </section>

      <section class="section">
        <div class="container section-container center">
          <h2 class="section-heading"><?php echo $lang['text_section_about']; ?></h2>

          <p class="text-center">
            <?php echo $lang['text_section_about_text']; ?>
          </p>

          <a href="about.php" class="btn btn-primary"><?php echo $lang['button_about']; ?></a>
        </div>
      </section>

      <section class="section">
        <div class="container section-container center">
          <h2 class="section-heading"><?php echo $lang['text_section_aboutus']; ?></h2>

          <p class="lead text-center mb-5">
            <?php echo $lang['text_section_aboutus_text']; ?>
          </p>

          <div class="grid col-gap-3 equal-height-col">
            <div class="col">
              <a href="freewifi.php" class="card">
                <h3 class="card-heading"><?php echo $lang['text_section_aboutus_freewifi']; ?></h3>
                <img src="assets/images/wifilogo.jpg" alt="" class="card-image">
                <p class="card-text">
                    <?php echo $lang['text_section_aboutus_freewifi_text']; ?>
                </p>
              </a>
            </div>
            <div class="col">
              <a href="sip.php" class="card">
                <h3 class="card-heading"><?php echo $lang['text_section_aboutus_sip']; ?></h3>
                <img src="assets/images/tellogo.jpg" alt="" class="card-image">
                <p class="card-text">
                <?php echo $lang['text_section_aboutus_sip_text']; ?>
                </p>
              </a>
            </div>
            <div class="col">
              <a href="hilfe.php" class="card">
                <h3 class="card-heading"><?php echo $lang['text_section_aboutus_help']; ?></h3>
                <img src="assets/images/hilfe-logo.png" alt="" class="card-image">
                <p class="card-text">
                    <?php echo $lang['text_section_aboutus_help_text']; ?>
                </p>
              </a>
            </div>
            <div class="col">
              <a href="more.php" class="card">
                <h3 class="card-heading"><?php echo $lang['text_section_aboutus_more']; ?></h3>
                <img src="assets/images/more-logo.png" alt="" class="card-image">
                <p class="card-text">
                    <?php echo $lang['text_section_aboutus_more_text']; ?>
                </p>
              </a>
            </div>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container section-container center">
          <h2 class="section-heading"><?php echo $lang['text_section_account']; ?></h2>

          <p class="lead text-center">
            <?php echo $lang['text_section_account_text']; ?>
          </p>

          <div class="section-buttons">
            <a href="sign-in.php" class="btn btn-secondary btn-white"><?php echo $lang['button_login']; ?></a>
            <a href="sign-up.php" class="btn btn-primary"><?php echo $lang['button_register']; ?></a>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container section-container center">
          <h2 class="section-heading"><?php echo $lang['text_nav_kontakt']; ?></h2>

          <p class="lead text-center">
            <?php echo $lang['text_section_kontakt_text']; ?>
          </p>

          <form action="" method="post" class="form">
            <input type="text" name="name" placeholder="<?php echo $lang['input_name']; ?>" class="form-field">

            <input type="email" name="email" placeholder="<?php echo $lang['input_email']; ?>" class="form-field">

            <input type="text" name="subject" placeholder="<?php echo $lang['input_subject']; ?>" class="form-field">

            <textarea name="message" cols="30" rows="10" placeholder="<?php echo $lang['input_message']; ?>" class="form-field form-field-textarea"></textarea>

            <button type="submit" class="btn btn-primary"><?php echo $lang['button_submit']; ?></button>
          </form>
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
