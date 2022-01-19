<?php
function maakHeader() {
  $html = <<<HEAD
  <div id="header">
    <figure>
      <a href="index">
        <img src="images/logo.png" alt=""/>
      </a>
    </figure>
    <a href="login">Inloggen</a>
    <form action="" method="post">
      <input type="text" placeholder="Zoeken">
    </form>
    <a href="privacy">Privacyverklaring</a>
    <a href="bedrijf">Over ons</a>
  </div>
HEAD;
  return $html;
}
?>
