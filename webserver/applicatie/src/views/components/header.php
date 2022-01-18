<?php
function maakHeader() {
  $html = <<<HEAD
  <div id="header">
    <figure>
      <img src="images/logo.png" alt=""/>
    </figure>
    <a href="bedrijf.php">Over ons</a>
    <a href="privacy.php">Privacyverklaring</a>
    <a href="login.php">Inloggen</a>
  </div>
HEAD;
  return $html;
}
?>
