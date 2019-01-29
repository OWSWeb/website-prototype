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
    "message": "<?php echo $lang['text_banner_dsvgo']; ?>",
    "dismiss": "<?php echo $lang['button_confirm']; ?>",
    "link": "<?php echo $lang['text_more_infos']; ?>",
    "href": "datenschutz.html"
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
            <p class="logo-text">OWS Netz</p>
          </a>

          <nav class="nav">
            <ul>
              <li><a href="index.html" class="current"><?php echo $lang['text_nav_index']; ?></a></li>
              <li><a href="about.html"><?php echo $lang['text_nav_about']; ?></a></li>
              <li><a href="contact.html"><?php echo $lang['text_nav_kontakt']; ?></a></li>
            </ul>
          </nav>
        </div>

        <div class="header-actions">

          <select id="language" class="header-action form-field language-select">
            <option value="de_DE" <?php if ($_GET['lang'] == 'de_DE') echo ('selected'); ?> >Deutsch, Deutschland</option>
            <option value="en_UK" <?php if ($_GET['lang'] == 'en_UK') echo ('selected'); ?> >English, UK</option>
            <option value="ar_AR" <?php if ($_GET['lang'] == 'ar_AR') echo ('selected'); ?> >arabisch, EGT</option>
          </select>
            <script type="text/javascript">
                var sel = document.getElementById('language');
                sel.onchange = function() {
                    window.location.href = '?lang=' + this.value;
                }
            </script>

          <a href="sign-in.html" class="header-action btn btn-secondary"><?php echo $lang['button_login']; ?></a>
          <a href="sign-up.html" class="header-action btn btn-primary"><?php echo $lang['button_register']; ?></a>
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
          <a href="about.html" class="btn btn-primary"><?php echo $lang['button_about']; ?></a>
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

          <a href="about.html" class="btn btn-primary"><?php echo $lang['button_about']; ?></a>
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
              <a href="freewifi.html" class="card">
                <h3 class="card-heading"><?php echo $lang['text_section_aboutus_freewifi']; ?></h3>
                <img src="assets/images/wifilogo.jpg" alt="" class="card-image">
                <p class="card-text">
                    <?php echo $lang['text_section_aboutus_freewifi_text']; ?>
                </p>
              </a>
            </div>
            <div class="col">
              <a href="sip.html" class="card">
                <h3 class="card-heading"><?php echo $lang['text_section_aboutus_sip']; ?></h3>
                <img src="assets/images/tellogo.jpg" alt="" class="card-image">
                <p class="card-text">
                <?php echo $lang['text_section_aboutus_sip_text']; ?>
                </p>
              </a>
            </div>
            <div class="col">
              <a href="hilfe.html" class="card">
                <h3 class="card-heading"><?php echo $lang['text_section_aboutus_help']; ?></h3>
                <img src="assets/images/hilfe-logo.png" alt="" class="card-image">
                <p class="card-text">
                    <?php echo $lang['text_section_aboutus_help_text']; ?>
                </p>
              </a>
            </div>
            <div class="col">
              <a href="more.html" class="card">
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
            <a href="sign-in.html" class="btn btn-secondary btn-white"><?php echo $lang['button_login']; ?></a>
            <a href="sign-up.html" class="btn btn-primary"><?php echo $lang['button_register']; ?></a>
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
            <p class="logo-text">OWS Netz</p>
          </a>

          <nav class="nav">
            <ul>
              <li><a href="index.html" class="current"><?php echo $lang['text_nav_index']; ?></a></li>
              <li><a href="about.html"><?php echo $lang['text_nav_about']; ?></a></li>
              <li><a href="contact.html"><?php echo $lang['text_nav_kontakt']; ?></a></li>
            </ul>
          </nav>

        </div>

        <div class="footer-actions">
          <select id="language" class="footer-action form-field language-select">
            <option value="de_DE" <?php if ($_GET['lang'] == 'de_DE') echo ('selected'); ?> >Deutsch, Deutschland</option>
            <option value="en_UK" <?php if ($_GET['lang'] == 'en_UK') echo ('selected'); ?> >English, UK</option>
            <option value="ar_AR" <?php if ($_GET['lang'] == 'ar_AR') echo ('selected'); ?> >arabisch, EGT</option>
          </select>

          <a href="sign-in.html" class="footer-action btn btn-secondary"><?php echo $lang['button_login']; ?></a>
          <a href="sign-up.html" class="footer-action btn btn-primary"><?php echo $lang['button_register']; ?></a>

        </div>
      </div>
    </footer>
  </div>

  <script async src="assets/js/all.js"></script>
</body>
</html>
