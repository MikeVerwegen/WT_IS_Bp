<?php
function maakHeader() {
  $html = <<<HEAD
  <figure>
    <img src="images/logo.png" alt=""/>
  </figure>
  <a href="bedrijf.php">Over ons</a>
  <a href="privacy.php">Privacyverklaring</a>
  <a href="login.php">Inloggen</a>
HEAD;
  return $html;
}
?>
