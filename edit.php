<!DOCTYPE html>
<html>
  <head><title><?php echo $file; ?></title>
    <meta charset="utf-8">
    <LINK rel="stylesheet" type="text/css" href="test.css">
  </head>
  <body>
    <form action="sauver.php" name='form' method="post">
    <?php
    //  echo $_GET["fichier"];









        $dossier=("/opt/lampp/htdocs/json/");
        // recupere le contenu du $fichier
        // si y a rien on fait rien
        //creer le formulaire en le remplissant
        // bouton pour le sauver
        $fichier=$dossier.$_GET["fichier"];

        //$octet=filesize($fichier);

              $json = file_get_contents($fichier);
              $parsed_json=json_decode($json);
              if (isset($parsed_json->data)){
                foreach ($parsed_json->data as $paragraphe){
                  $titre=$paragraphe->titre;
                  $contenu=$paragraphe->contenu;
                  $url=$paragraphe->url;
                  $categorie=$paragraphe->categorie;
                }
              }else{
                $titre= "";
                $contenu= "";
                $url= "";
                $categorie= "";
              }
              ?>
              <input type="hidden" name="fichier" value="<?php echo $_GET['fichier'] ?>">
              <label>titre</label><input name='titre' type='text' value="<?php echo $titre ?>">
              <br/><label>contenu</label><textarea name='contenu' type='text' ><?php echo $contenu ?></textarea>
              <br/><label>url</label><input name='url' type='text' value="<?php echo $url ?>">
              <br/><label>categorie</label><input name='categorie' type='text' value="<?php echo $categorie ?>">
              <input type='submit' value='sauver'>
    </form>
  </body>
 </html>
