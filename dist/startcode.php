<?php
include_once 'assets/include/header.php';
?>

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

<?php
include_once 'assets/include/footer.php';
?>
