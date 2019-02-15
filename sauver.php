<html>
  <head><title></title><meta charset='utf-8'/></head>
  <body>
  <?php

  //  for ($toufile=0;$toufile<=2;$toufile++){
    $dossier=("/opt/lampp/htdocs/json/");
    $fichier1=scandir($dossier);
    //echo $fichier;
      //for ($toufile=0;$toufile<=count($fichier1);$toufile++){
        //if (isset($_POST[$fichier1[$toufile])){


            $fichier=$dossier.$_POST['fichier'];


              $titre=$_POST['titre'];
              $contenu=$_POST['contenu'];
              $url=$_POST['url'];
              $categorie=$_POST['categorie'];
              $contenujs=json_encode($contenu);
              file_put_contents($fichier, "
                          { \"data\":
                           [
                              {
                                \"titre\" : \".$titre\",
                                \"contenu\" :$contenujs,
                                \"url\":\"$url\",
                                \"categorie\":\"$categorie\"
                              }
                           ]
                         }          ");

                header('Location: index.php');
            //  $json = file_get_contents($fichier);
              //$parsed_json=json_decode($json);
              //foreach ($parsed_json->data as $paragraphe){
                //echo $paragraphe->titre;
                //echo $paragraphe->contenu;
                //echo $paragraphe->url;
                //echo "<br/>".$paragraphe->categorie;

          //$nb=count($fichier1)-4;
          //$nb++;
        //  if (isset($_GET['data'.$nb])){

          //  $fichier=$dossier.$_GET["data".$nb].".json";
            //$titre="<h1>".$_GET['titre']."</h1>";
            //$contenu="<br/>".$_GET['contenu']."<br/>";
            //$url=$_GET['url'];
            //$categorie=$_GET['categorie'];

            //file_put_contents($fichier, "
              //          { \"data\":
                //         [
                  //          {
                    //          \"titre\" : \"".$titre."\",
                      //        \"contenu\" :\"".$contenu."\",
                        //      \"url\":\"".$url."\",
                          //    \"categorie\":\"".$categorie."\"
                            //}
                         //]
                      //  }          ");
          //}




  ?>

  </body>

</html>
