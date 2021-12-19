<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Livreur</title>
<link rel="stylesheet" href="../css/style.css">
<style type="text/css">
<!--
.Style3 
{
	font-size: 16px; 
	font-weight: bold; 
}
-->
</style>
</head>

<body>

	
	  <?php 
	include ('menu_geran.php');
	?>
	  <h1 align="center" class="Style3">ENREGISTRER LIVREUR	</h1>
	  
	<form action="Livreur.php" method="post"  enctype="multipart/form-data" class="container">
	  <table width="342" border="0" align="center">
          <tr>
            <td width="165"><span class="etiquette">Prénom</span></td>
            <td width="161"><label>
              <input name="prnm" type="text" size="40" placeholder="prénom du livreur" required class="info" />
            </label></td>
          </tr>
          <tr>
            <td><span class="etiquette">Nom</span></td>
            <td><label>
              <input name="nm" type="text" size="40" placeholder="nom du livreur" required class="info"/>
            </label></td>
          </tr>
          <tr>
            <td><span class="etiquette">Adresse</span></td>
            <td><label>
              <input name="adres" type="text" size="40" placeholder=" adresse du livreur" required class="info" />
            </label></td>
          </tr>
          <tr>
            <td><span class="etiquette">Téléphone</span></td>
            <td><label>
              <input name="tel" type="text" size="40"  placeholder="téléphone" required class="info"/>
            </label></td>
          </tr>
		   <tr>
		  <td><span class="etiquette">Photo</span></td>
            <td>
			<label>
              <input name="photo" type="file" size="40"  placeholder="Ajoutez une photo" required class="info"/>
            </label>
			</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input type="hidden" name="idresto"  value="<?php echo $_GET['idrest']?>"/>
            </label></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td><label>
              <input name="enreg" type="submit" id="enreg" value="Enregistrer" class="btnenreg" />
            </label></td>
          </tr>
        </table>
	</form>
	<?php 
		if (isset($_POST['enreg']))
		{
		//sauvegarde des champs
			$prnm=$_POST['prnm'];
			$nom=$_POST['nm'];
			$ad=$_POST['adres'];
			$tel=$_POST['tel'];
			$idrest=$_POST['idresto'];
			
			//sauvegarde de la photo 
				$monfichier= basename($_FILES['photo']['name']);
				$dossier='../img/photo_livreurs/';//variable qui represente le dossier ou seront enregistrees les img
				$taillemaxi=40000;
					//controle de la taille
					if($_FILES['photo']['size']>$taillemaxi)
						{
							echo'taille de cet image est tres grande ';
							exit();
						}
						//controle du telechargement
						if (move_uploaded_file($_FILES['photo']['tmp_name'],$dossier.$monfichier))//tmp_name 
						{
							echo'Fichier uploade avec succes';
						}
					
			
			$mycon=$con->EtablirConnexion();
			if($mycon!=false)
			{
				$req=$mycon->prepare("insert into livreur  values ('','$nom','$prnm','$ad','$tel','$monfichier','$idrest')");
				if($req->execute())
				{
					echo'Enregistrement effectué avec succés';
					header('location:listerestaurant.php');	
				}
				else
				{
					echo'Echec enregistrement!';
					
				
				}
			}
			else
			{
				echo'Echec connexion';
			}
		}
	
	?>


</body>
</html>
