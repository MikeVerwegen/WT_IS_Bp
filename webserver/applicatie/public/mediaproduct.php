<?php
  $titel = "Spider-Man: No Way Home";
  $speelduur = "2 uur 30 minuten";
  $regisseur = "Jon Watts";
  $hoofdrolspelers = ["Tom Holland", "Benedict Cumberbatch", "Alfred Molina", "Willem Dafoe", "Jamie Foxx", "J.K. Simmons"];
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titel?></title>
  </head>
  <body>
    <div class="grid">
      <header>
        <!-- hier moet de header komen, niet gelukt -->
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
