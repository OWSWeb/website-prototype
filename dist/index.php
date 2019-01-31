<?php
include_once 'assets/include/header.php';
?>

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


<?php
include_once 'assets/include/footer.php';
?>
