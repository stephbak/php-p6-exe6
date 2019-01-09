<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie6</title>
</head>
<body>
  <a href="index.php?building=12&room=101">exercice6</a>
  <?php if (isset($_GET['building']) && isset($_GET['room'])){ ?>
    <p>Vous êtes au batiment : <?= $_GET['building'] ?></p>
    <p>Chambre : <?= $_GET['room'] ?></p>
  <?php }else{ ?>
    <p>Veuillez renseigner les champs manquants.</p>
  <?php } ?>
</body>
</html>
