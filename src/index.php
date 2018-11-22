<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="./assets/app.css" />
  <link href="https://fonts.googleapis.com/css?family=Concert+One|Fredoka+One|Rye|Source+Sans+Pro:300,300i,400,400i,600,600i" rel="stylesheet">
  <script src="./assets/app.js"></script>
</head>
<body>
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
      <button style="left: 40%; top: 30%;" onclick="javascript:show(this);" data-target="#modal"><img src="assets/icon_japan.png"></button>

    </div>
  </main>
  <footer>
  </footer>

  <div id='modal' class="modal-wrapper close">
    <div class="modal">
      <button class="modal-close close">×</button>
      <h1>Hello, World!</h1>
      <div class="container">
        <div class='col one-half'>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class='col one-half'>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class='col one-third'>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class='col two-thirds'>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="container">
        <div class='col two-thirds'>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class='col one-third'>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>

  <script>
    var modalWrappers = document.getElementsByClassName('modal-wrapper');
    var closeTriggers = document.getElementsByClassName('close');

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

    function show(element) {
      let targetSelector = element.dataset["target"];
      let targets = document.querySelectorAll(targetSelector);

      Array.from(targets).forEach(function(t) {
        t.style.display='block'
      });
    }
  </script>

</body>
</html>
