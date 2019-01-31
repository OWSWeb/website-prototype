<?php
include_once 'assets/include/header.php';
?>

<link rel="stylesheet" href="leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
<script src="leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>

    <main class="main">
      <section class="section full-height-section section-light">
        <div class="container section-container center">
          <h1 class="site-heading"><?php echo $lang['page_kontakt']; ?></h1>

          <p class="text-center w-800">
            <?php echo $lang['page_kontakt_text']; ?>
          </p>

            Ost- und Westsiedlung Salzgitter-Bad Netzwerk n.e.V.
            Weserstrasse 28
            38259 Salzgitter
            Tel.: 05341 
            Tel.: 05341

            eMail: info@ows-sz.de


        </div>
      </section>

     <section class="section">
        <div class="container section-container center">

          <h1 class="site-heading"><?php echo $lang['section_map']; ?></h1>

            <div id="mapid" style="width: 600px; height: 400px;"></div>

        </div>
        <script>
            var mymap = L.map('mapid').setView([52.05963, 10.37428], 16);
            L.tileLayer('https://a.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                    '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
                id: 'mapbox.streets'
            }).addTo(mymap);
            L.marker([52.05963, 10.37428]).addTo(mymap)
                .bindPopup("<b>Ost- und Westsiedlung Salzgitter-Bad n.e.V.</b><br />Weserstrasse 28<br />38259 Salzgitter-Bad").openPopup();
            var popup = L.popup();
        </script>

      </section>

     <section class="section full-height-section section-light">
        <div class="container section-container center">

          <h2 class="section-heading"><?php echo $lang['text_section_kontakt']; ?></h2>

          <p class="lead text-center">
            <?php echo $lang['text_section_kontakt_text']; ?>
          </p>

          <form action="" method="post" class="form">
            <input type="text" name="name" placeholder="Name" class="form-field">

            <input type="email" name="email" placeholder="E-Mail" class="form-field">

            <input type="text" name="subject" placeholder="Betreff" class="form-field">

            <textarea name="message" cols="30" rows="10" placeholder="Nachricht" class="form-field form-field-textarea"></textarea>

            <button type="submit" class="btn btn-primary">Kontakt aufnehmen</button>
          </form>
        </div>
      </section>
  


    </main>

<?php
include_once 'assets/include/footer.php';
?>
