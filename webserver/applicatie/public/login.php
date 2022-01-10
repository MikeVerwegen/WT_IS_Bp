<?php
  $titel = 'Fletnix';
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
        <figure>
          <img src="images/logo.png" alt="" />
        </figure>
        <form action="index.html" method="post">
          <fieldset>
            <label for="mail">E-mailadres:</label>
            <input
              id="mail"
              type="email"
              name="mail"
              pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9._%+-]+\.[a-zA-Z]{2,4}$"
              required
            /><br />
            <label for="ww">Wachtwoord:</label>
            <input id="ww" type="password" name="ww" required /><br />
          </fieldset>
          <input type="submit" value="Inloggen" />
        </form>
        <form action="registratie.html" method="post">
          <input type="submit" value="Registreren" />
        </form>
      </main>
    </div>
  </body>
</html>
