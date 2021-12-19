<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Restaurant</title>
<link rel="stylesheet" href="../css/style.css">
<style type="text/css">
<!--
.Style6 {font-weight: bold; color: #FFFFFF; font-family: "Times New Roman", Times, serif; font-style: italic;}
-->
</style>
<?php 
	require('../Configuration/Connexion.php');
	$conn=new Connexion();
?>
</head>

<body>
	<div align="center">
	
	    <?php 
		include('menu_gene.php');
	?>
	  
	</div>
	 <h1 align="center"><span class="Style6"> Enregistrement Restaurant   </span>      </h1>
	<form action="restaurants.php" method="post" class="container" enctype="multipart/form-data" >
	 
	  <table width="469" border="0" align="center" class="tab">
		
			 <tr>
			<td width="172" class="etiquette"><strong>Matricule</strong></td>
			<td width="281"><label>
			  <input name="matricule" type="text" size="40" placeholder= "matricule"  required class="info"/>
			</label></td>
		  </tr>
		
		  <tr>
			<td width="172" class="etiquette"><strong>Nom Restaurant</strong></td>
			<td width="281"><label>
			  <input name="nom" type="text" size="40" placeholder= "nom du restaurant"  required class="info"/>
			</label></td>
		  </tr>
		   
		  <tr>
			<td class="etiquette"><strong>Téléphone</strong></td>
			<td><label>
			  <input name="tel" type="text" size="40" placeholder= "Téléphone"  required class="info"/>
			</label></td>
		  </tr>
		  
		  <tr>
			<td class="etiquette"><strong>Adresse</strong></td>
			<td><label>
			  <input name="adresse" type="text" size="40" placeholder="adresse exacte"  required  class="info"/>
			</label></td>
		  </tr>
		  
		  <tr>
			<td class="etiquette"><strong>Email</strong></td>
			<td><label>
			  <input name="email" type="text" size="40" placeholder= "email"  required class="info"/>
			</label></td>
		  </tr>
		  
		   <tr>
			<td class="etiquette"><strong>Logo</strong></td>
			<td><label>
			  <input name="logo" type="file" required class="info"/>
			</label></td>
		  </tr>
		  
		  <tr>
			<td>&nbsp;</td>
			<td><label>
			  <input name="idloc" type="hidden" size="40" value="<?php echo $_GET['idloc']?>" />
			</label></td>
		  </tr>
		 
		  <tr>
			<td>&nbsp;</td>
			<td><label>
			  <input type="submit" name="enreg" value="Enregistrer"  class="btnenreg"/>
			</label></td>
		  </tr>
	  </table>
	
	</form>


	<?php 
	
		if ( isset($_POST['enreg']))
		{
			$mat=$_POST['matricule'];
			$nomrest=$_POST['nom'];
			$tel=$_POST['tel'];
			$adr=$_POST['adresse'];
			$email=$_POST['email'];
			$idloc=$_POST['idloc'];
			
			
				$monfichier= basename($_FILES['logo']['name']);//
				$dossier='../img/logo_resto/';//variable qui represente le dossier ou seront enregistrees les img
				$taillemaxi=40000;
			//controle de la taille
			if($_FILES['logo']['size']>$taillemaxi)
				{
					echo'taille de cet image est tres grande ';
					exit();
				}
				//controle du telechargement
				if (move_uploaded_file($_FILES['logo']['tmp_name'],$dossier.$monfichier))//tmp_name 
				{
					echo'Fichier uploade avec succes';
				}
			
			$mycon=$conn->EtablirConnexion();
			if($mycon!=false)
			{
				$req=$mycon->prepare("insert into restaurant values ('','$mat','$nomrest','$adr','$tel','$email','$monfichier','$idloc')");
				if($req->execute())
				{
				 ?>
		 
		 		<script type="text/javascript">
					alert('Enregistrement effectue avec succes');
				 </script>
				 
				 <?php 
				}
				else
				{
					echo'<font  color="red" ><center><b>Erreur enregistrement!</b></center></font>';
				}
				
			
		
		}
		else
		{
			echo'<font  color="red" ><center><b> ERREUR CONNEXION!</b></center></font>';
		}
	}
	?>
</body>
</html>
