<?php 
include './config/basepath.php';
include './config/fbConfig.php';

$loginUrl = $provider->getAuthorizationUrl([
  'scope' => ['email'],
]);

$_SESSION['oauth2state'] = $provider->getState();

?>

<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nganggur Ye??</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="<?= BASEPATH ?>/assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
<body>

<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="<?= BASEPATH; ?>">
      <img src="<?= BASEPATH ?>/assets/img/logo.png" width="100%" height="100%" />
    </a>

    <a role="button" class="navbar-burger burger" 
        aria-label="menu" aria-expanded="false" 
        data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
    </div>

    <div class="navbar-end">
    <a class="navbar-item" href="index.php">
      Beranda
    </a>
    <a class="navbar-item">
        Tentang Kita
      </a>
      <div class="navbar-item">

      <?php if ($_SESSION['user']['type_user'] == 'hrd') { ?>
        <a href="<?= BASEPATH ?>/posting_kerjaan.php" class="navbar-item">
            Posting Kerjaan
          </a>
      <?php } ?>
      <?php 
          if (isset($_SESSION['user'])){ ?>
        <div class="buttons">
          <a href="<?= BASEPATH ?>/logout.php" class="button is-danger">
            Log Out
          </a>
        </div>
       <?php   } else { ?>
        <div class="buttons">
          <a href="<?= htmlspecialchars($loginUrl) ?>" class="button is-link">
            Log In With Facebook
          </a>
        </div>
          <?php } ?>
      </div>
    </div>
  </div>
</nav>
