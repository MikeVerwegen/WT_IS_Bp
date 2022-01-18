<?php
function maakHeader() {
  $html = <<<HEAD
  <div id="header">
    <figure>
      <img src="images/logo.png" alt=""/>
    </figure>
    <a href="login.php">Inloggen</a>
    <input type="text" placeholder="Zoeken">
    <a href="privacy.php">Privacyverklaring</a>
    <a href="bedrijf.php">Over ons</a>
  </div>
HEAD;
  return $html;
}
?>
