<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Weihnachtsgruss aus dem ZLI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="./assets/app.css" />
  <link href="https://fonts.googleapis.com/css?family=Concert+One|Fredoka+One|Rye|Source+Sans+Pro:300,300i,400,400i,600,600i" rel="stylesheet">
  <script src="./assets/app.js"></script>
</head>
<body>
  <div class="snow"></div>
  <header>
    <a href="https://www.zli.ch" class="logo" target="_blank">
      <img src="assets/logo_zli_2_zu_1.png">
    </a>
    <div class="title">
      <h1>Kommen Sie mit auf eine weihnächtliche Kulturreise.</h1>
      <h1>Frohe Festtage und ein gutes 2019!</h1>
    </div>
  </header>
  <main>
    <img class="map" src="./assets/karte_2_zu_1.png">
    <div class="places">
      <button style="left: 40%; top: 30%;" data-target="#modal"><img src="assets/icons/icon_japan.png"></button>
      <button style="left: 85%; top: 75%;" data-target="#modal-australia"><img src="assets/icons/icon_australien.png"></button>
    </div>
  </main>
  <footer>
    Weihnachtsgruss 2018&nbsp;&nbsp;|&nbsp;&nbsp;&copy; Zürcher Lehrbetriebsverband ICT &nbsp;&nbsp;|&nbsp;&nbsp;<a href="www.zli.ch" target="_blank">Kontakt</a> &nbsp;&nbsp;|&nbsp;&nbsp;<a href="">Impressum</a>
  </footer>
<?php foreach (scandir('countries/') as $file): ?>
  <?php
$contents = [];
$country = explode('.', $file)[0];
if (!preg_match("/\w+\.html/", $file)) {continue;}
preg_match("/<body class=\"modal\">\n(.*)\n<\/body>/sm", file_get_contents("countries/$file"), $contents);
?>
  <div id='modal-<?=$country?>' class="modal-wrapper close">
    <div class="modal">
      <button class="modal-close close">×</button>
      <?=$contents[1]?>
    </div>
  </div>
<?endforeach;?>

  <script>
    var modalWrappers = document.getElementsByClassName('modal-wrapper');
    var closeTriggers = document.getElementsByClassName('close');
    var openTriggers = document.querySelectorAll('.places > button');

    Array.from(openTriggers).forEach(function(t) {
      t.addEventListener('click', function() {
        let targetSelector = t.dataset["target"];
        let targets = document.querySelectorAll(targetSelector);

        Array.from(targets).forEach(function(target) {
          target.style.display='block'
        });
       })
    })
    Array.from(closeTriggers).forEach(function(t) {
      t.addEventListener('click', function() { hide() })
    })

    document.addEventListener('keydown', function(e) {
        if(e.code == "Escape") { hide(); }
    });

    function hide() {
      Array.from(modalWrappers).forEach(function(m) {
        m.style.display='none';
      })
    }
  </script>

</body>
</html>
