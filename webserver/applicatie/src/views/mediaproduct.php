<?php
  $film = [
    'titel' => "Spider-Man: No Way Home",
    'speelduur' => 150,
    'omschrijving' => "Voor de allereerste keer in de geschiedenis van de Spider-Man-films is onze vriendelijke superheld ontmaskerd en kan hij zijn normale leven niet langer gescheiden houden van zijn gevaarlijke leven als superheld.",
    'jaarvanuitgave' => 2021,
    'regisseur' => "Jon Watts",
    'hoofdrolspelers' => ["Tom Holland", "Benedict Cumberbatch", "Alfred Molina", "Willem Dafoe", "Jamie Foxx", "J.K. Simmons"],
    'cover' => "images/poster-spiderman.jpg"
  ];
  require_once 'components/head.php';
  require_once 'components/header.php';
  require_once 'components/cast.php';
  genereerHead($film['titel']);
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
          <?=$film['titel']?>
        </h1>
        <img src="<?=$film['cover']?>" alt="Poster van Spider-Man: No Way Home">
        <p>
          <?=$film['jaarvanuitgave'].' - '.$film['speelduur'].' minuten'?><br><br>
          <?=$film['omschrijving']?><br>
          <video controls width="750">
            <source src="media/trailer-spiderman.mp4" type="video/mp4">
          </video>
          <?=
            printCast($film['regisseur'], $film['hoofdrolspelers']);
          ?>
        </p>
      </main>
    </div>
  </body>
</html>
