<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title ?></title>
		<meta charset="utf-8"/>
		<LINK rel="stylesheet" type="text/css" href="test.css"{
	</head>
	<body>
			<?php
			$dossier=("/opt/lampp/htdocs/json/");
			$fichiers=scandir($dossier);
			for ($i=0;$i<count($fichiers);$i++){
							echo "<br/><a href='/php/edit.php?fichier=".$fichiers[$i]."'>";
							echo $fichiers[$i];
							echo "</a>";
			}
			?>
				</form>
					<form action='cree.php' method='get'/>
						<?php
							$nom="<input type='text' name='nom' value='nom'/> ";
							$cree="<input type='submit' name='cree.php' value='cree' />";
						//	$cacher="<input type='hidden' name=data$plus value=data$plus/>";
							echo "$nom $cree";

					//}}
					// btn creer


					?>
				</form>

	</body>
</html>
