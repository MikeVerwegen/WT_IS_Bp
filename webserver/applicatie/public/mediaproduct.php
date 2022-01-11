<?php
  $titel = "Spider-Man: No Way Home";
  $speelduur = 150;
  $omschrijving = "Voor de allereerste keer in de geschiedenis van de Spider-Man-films is onze vriendelijke superheld ontmaskerd en kan hij zijn normale leven niet langer gescheiden houden van zijn gevaarlijke leven als superheld.";
  $jaarvanuitgave = 2021;
  $regisseur = "Jon Watts";
  $hoofdrolspelers = ["Tom Holland", "Benedict Cumberbatch", "Alfred Molina", "Willem Dafoe", "Jamie Foxx", "J.K. Simmons"];
  $cover = "media/trailer-spiderman.mp4";
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
          <?=$jaarvanuitgave.' - '.$speelduur.' minuten'?><br><br>
          <?=$omschrijving?><br>
          <video controls width="750">
            <source src="<?=$cover?>" type="video/mp4">
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
