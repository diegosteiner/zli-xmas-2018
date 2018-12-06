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
    <div class="flex">
      <a href="https://www.zli.ch" class="logo" target="_blank">
        <img src="assets/logo_zli_2_zu_1.png">
      </a>
      <div class="title">
        <h1>Kommen Sie mit uns auf eine weihnachtliche Kulturreise.</h1>
        <h1>Frohe Festtage und ein gutes 2019!</h1>
      </div>
    </div>
  </header>
  <div id="main">
    <div>
      <img class="map" src="./assets/karte_2_zu_1.png">
      <div class="places">
        <button style="left: 85%; top: 75%;" class="open-modal" data-target="#modal-australia"><img src="assets/icons/icon_australien.png"></button>
        <button style="left: 30%; top: 60%;" class="open-modal" data-target="#modal-brasilien"><img src="assets/icons/icon_brasilien.png"></button>
        <button style="left: 20%; top: 75%;" class="open-modal" data-target="#modal-chile"><img src="assets/icons/icon_chile.png"></button>
        <button style="left: 75%; top: 35%;" class="open-modal" data-target="#modal-china"><img src="assets/icons/icon_china.png"></button>
        <button style="left: 41%; top: 18%;" class="open-modal" data-target="#modal-england"><img src="assets/icons/icon_england.png"></button>
        <button style="left: 65%; top: 45%;" class="open-modal" data-target="#modal-indien"><img src="assets/icons/icon_indien.png"></button>
        <button style="left: 88%; top: 30%;" class="open-modal" data-target="#modal-japan"><img src="assets/icons/icon_japan.png"></button>
        <button style="left: 17%; top: 7%;" class="open-modal" data-target="#modal-kanada"><img src="assets/icons/icon_kanada.png"></button>
        <button style="left: 50%; top: 12%;" class="open-modal" data-target="#modal-finnland"><img src="assets/icons/icon_lappland.png"></button>
        <button style="left: 62%; top: 18%;" class="open-modal" data-target="#modal-russland"><img src="assets/icons/icon_russland.png"></button>
        <button style="left: 95%; top: 85%;" class="open-modal" data-target="#modal-neuseeland"><img src="assets/icons/icon_neuseeland.png"></button>
        <button style="left: 38.5%; top: 31%;" class="open-modal" data-target="#modal-schweiz"><img src="assets/icons/icon_schweiz.png"></button>
        <button style="left: 74%; top: 51%;" class="open-modal" data-target="#modal-thailand"><img src="assets/icons/icon_thailand.png"></button>
        <button style="left: 45.5%; top: 37%;" class="open-modal" data-target="#modal-ungarn"><img src="assets/icons/icon_ungarn.png"></button>
        <button style="left: 10%; top: 45%;" class="open-modal" data-target="#modal-mexiko"><img src="assets/icons/icon_mexiko.png"></button>
        <button style="left: 22%; top: 51%;" class="open-modal" data-target="#modal-venezuela"><img src="assets/icons/icon_venezuela.png"></button>
        <button style="left: 53%; top: 33%;" class="open-modal" data-target="#modal-israel"><img src="assets/icons/icon_israel.png"></button>
        <button style="left: 43%; top: 49%;" class="open-modal" data-target="#modal-ghana"><img src="assets/icons/icon_ghana.png"></button>
        <button style="left: 48%; top: 60%;" class="open-modal" data-target="#modal-kongo"><img src="assets/icons/icon_kongo.png"></button>
        <button style="left: 56.5%; top: 45%;" class="open-modal" data-target="#modal-saudiarabien"><img src="assets/icons/icon_saudiarabien.png"></button>
      </div>
    </div>
  </div>
  <footer>
    Weihnachtsgruss 2018&nbsp;&nbsp;|&nbsp;&nbsp;&copy; Zürcher Lehrbetriebsverband ICT &nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://www.zli.ch/service/kontakt" target="_blank">Kontakt</a>
    <button style="right: 0; bottom: 0; width: 7vw; position: absolute;" class="open-modal impressum" data-target="#modal-impressum"><img src="assets/elch.png"></button>
  </footer>
  <button style="width:28vw" class="reindeer open-modal" data-target="#modal-video"><img src="assets/rentier.png" ></button>

<?php foreach (scandir(__DIR__ . '/countries/') as $file): ?>
  <?php
$contents = [];
$country = explode('.', $file)[0];
if (!preg_match("/\w+\.html/", $file)) {continue;}
preg_match("/<body class=\"modal\">\n(.*)\n<\/body>/sm", file_get_contents(__DIR__ . "/countries/$file"), $contents);
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
    var openTriggers = document.querySelectorAll('button.open-modal');

    [].slice.call(openTriggers).forEach(function(t) {
      t.addEventListener('click', function() {
        let targetSelector = t.dataset["target"];
        let targets = document.querySelectorAll(targetSelector);

        [].slice.call(targets).forEach(function(target) {
          target.style.display='block'
        });
       })
    });

    [].slice.call(closeTriggers).forEach(function(t) {
      t.addEventListener('click', function(e) {
      if (e.target == this)
        hide();
      })
    });

    document.addEventListener('keydown', function(e) {
        if(e.code == "Escape") { hide(); }
    });

    function hide() {
      [].slice.call(modalWrappers).forEach(function(m) {
        m.style.display='none';
      })
    }
  </script>

</body>
</html>
