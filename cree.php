<!DOCTYPE html>
<html>
  <head><title></title><meta charset="utf-8"/></head>
  <body>
    <?php
      $dossier=("/opt/lampp/htdocs/json/");
      $fichier=$dossier.$_GET['nom'].".json";
      $file=fopen($fichier,'a+');
      echo $file."Le fichier à bien été crée";
      header('Location: index.php');
    ?>
  </body>
</html>
