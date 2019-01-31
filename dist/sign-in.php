<?php
include_once 'assets/include/header.php';
?>


    <main class="main">
      <section class="section full-height-section section-light">
        <div class="container section-container center">
          <h1 class="site-heading"><?php echo $lang['page_login']; ?></h1>

          <p class="text-center w-800">
            <?php echo $lang['page_login_text']; ?>
          </p>

          <form action="" method="post" class="form">
            <input type="email" name="email" placeholder="<?php echo $lang['input_email']; ?>" class="form-field">

            <input type="password" name="password" placeholder="<?php echo $lang['input_passwd']; ?>" class="form-field mb-2">

            <div class="form-actions">
              <a href="#"><?php echo $lang['text_forgotten_passwd']; ?></a>
            </div>

            <button type="submit" class="btn btn-primary"><?php echo $lang['button_login']; ?></button>
          </form>
        </div>
      </section>
    </main>

<?php
include_once 'assets/include/footer.php';
?>
