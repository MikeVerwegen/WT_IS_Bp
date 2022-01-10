<?php
  $titel = "Home - Fletnix";
  require_once 'components/head.php';
  require_once 'components/header.php';
  genereerHead($titel);
?>
  <body>
    <div class="grid">
      <header>
        <?=
        maakHeader();
        ?>
      </header>
      <main>
        <div class="preview-grid">
          <spiderman>
            <a href="mediaproduct.php">
              <img src="images/thumbnail-spiderman.jpg" alt="Spider-Man: No Way Home" />
            </a>
            <p>Spiderman: No Way Home</p>
          </spiderman>
          <bond>
            <a href="mediaproduct.php">
              <img src="images/thumbnail-jamesbond.jpg" alt="No Time To Die" />
            </a>
            <p>No Time To Die</p>
          </bond>
          <venom>
            <a href="mediaproduct.php">
              <img src="images/thumbnail-venom.jpg" alt="Venom: Let There Be Carnage" />
            </a>
            <p>Venom: Let There Be Carnage</p>
          </venom>
          <notice>
            <a href="mediaproduct.php">
              <img src="images/thumbnail-rednotice.jpg" alt="Red Notice" />
            </a>
            <p>Red Notice</p>
          </notice>
          <grand>
            <a href="mediaproduct.php">
              <img src="images/thumbnail-grandtour.jpg" alt="The Grand Tour" />
            </a>
            <p>The Grand Tour</p>
          </grand>
        </div>
      </main>
    </div>
  </body>
</html>
