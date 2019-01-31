<?php
include_once 'assets/include/header.php';
?>


    <main class="main">
      <section class="section full-height-section section-light">
        <div class="container section-container center">
          <h1 class="site-heading"><?php echo $lang['page_signmail']; ?></h1>

          <p class="text-center w-800">
            <?php echo $lang['page_signmail_text']; ?>
          </p>

            <button type="submit" onclick="location.href='sign-in.php';" class="btn btn-primary"><?php echo $lang['button_continue']; ?></button>

        </div>
      </section>
    </main>

<?php
include_once 'assets/include/footer.php';
?>
