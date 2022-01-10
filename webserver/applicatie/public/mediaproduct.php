<?php
  $titel = "Spider-Man: No Way Home";
  $speelduur = "2 uur 30 minuten";
  $regisseur = "Jon Watts";
  $hoofdrolspelers = ["Tom Holland", "Benedict Cumberbatch", "Alfred Molina", "Willem Dafoe", "Jamie Foxx", "J.K. Simmons"];
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
        <h1>
          <?=$titel?>
        </h1>
        <img src="images/poster-spiderman.jpg" alt="Poster van Spider-Man: No Way Home">
        <p>
          2021 - <?=$speelduur?><br><br>
          Voor de allereerste keer in de geschiedenis van de Spider-Man-films is onze vriendelijke superheld ontmaskerd en kan hij zijn normale leven niet langer gescheiden houden van zijn gevaarlijke leven als superheld.<br>
          <video controls width="750">
            <source src="media/trailer-spiderman.mp4" type="video/mp4">
          </video>
          <table>
            <thead>
              <tr>
                <th colspan="1">Regisseur</th>
                <th colspan="6">Acteurs</th>
              </tr>
            </thead>
            <tr>
              <td>
                <img src="images/jonwatts.jpg" alt="Jon Watts">
              </td>
              <td>
                <img src="images/tomholland.jpg" alt="Tom Holland">
              </td>
              <td>
                <img src="images/benedictcumberbatch.jpg" alt="Benedict Cumberbatch">
              </td>
              <td>
                <img src="images/alfredmolina.jpg" alt="Alfred Molina">
              </td>
              <td>
                <img src="images/willemdafoe.jpg" alt="Willem Dafoe">
              </td>
              <td>
                <img src="images/jamiefoxx.jpg" alt="Jamie Foxx">
              </td>
              <td>
                <img src="images/jksimmons.jpg" alt="J.K. Simmons">
              </td>
              </tr>
              <tr>
              <td>
                <?=$regisseur?>
              </td>
              <td>
                <?=$hoofdrolspelers[0]?>
              </td>
              <td>
                <?=$hoofdrolspelers[1]?>
              </td>
              <td>
                <?=$hoofdrolspelers[2]?>
              </td>
              <td>
                <?=$hoofdrolspelers[3]?>
              </td>
              <td>
                <?=$hoofdrolspelers[4]?>
              </td>
              <td>
                <?=$hoofdrolspelers[5]?>
              </td>
            </tr>
          </table>
        </p>
      </main>
    </div>
  </body>
</html>
