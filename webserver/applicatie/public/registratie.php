<?php
  $titel = "Fletnix";
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/formRegistratie.php';
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
        <?=
        genereerRegistratieFormulier();
        ?>
      </main>
    </div>
  </body>
</html>
