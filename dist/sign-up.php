<?php
include_once 'assets/include/header.php';
?>


    <main class="main">
      <section class="section full-height-section section-light">
        <div class="container section-container center">
          <h1 class="site-heading"><?php echo $lang['page_signup']; ?></h1>

          <p class="text-center w-800">
            <?php echo $lang['page_signup_text']; ?>
          </p>

          <form action="sign-mail.php" method="post" class="form">
            <input type="text" name="username" placeholder="<?php echo $lang['input_username']; ?>" class="form-field">

            <input type="email" name="email" placeholder="<?php echo $lang['input_email']; ?>" class="form-field">

            <input type="password" name="password" placeholder="<?php echo $lang['input_passwd']; ?>" class="form-field">

            <button type="submit" class="btn btn-primary"><?php echo $lang['button_register']; ?></button>
          </form>
        </div>
      </section>
    </main>

<?php
include_once 'assets/include/footer.php';
?>
