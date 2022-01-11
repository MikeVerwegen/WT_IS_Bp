<?php
  $titel = "Privacyverklaring";
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/privacy.php';
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
        schrijfPrivacyverklaring();
      </main>
    </div>
  </body>
</html>
