<?php
  $titel = 'Fletnix';
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/formLogin.php';
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
        <figure>
          <img src="images/logo.png" alt=""/>
        </figure>
        <?=
        genereerInlogFormulier();
        ?>
      </main>
    </div>
  </body>
</html>
