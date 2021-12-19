<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menus</title>
<link rel="stylesheet" href="../css/style.css">
<style>
body{

background-color:#FFFFFF;}

.titre
{
	color:#FFFFFF;
}
.lib{
color:#FF0000
}
.bgform{

background-attachment:scroll;
background-position:center;
background-repeat:no-repeat;
}
.Style3 {color: #000000; 
font-weight: bold; 
font-size: 18px;
 font-family: "Times New Roman", Times, serif; }
</style>
</head>

<body class="body">
	
	  <?php
		include('menu_geran.php');
		
	 ?>
	  
	     <div align="center" class="Style3"><h1> Enregistrer Menu</h1></div>
	 
	<form action="mesmenus.php" method="post"  enctype="multipart/form-data" class="bgform" height="700">
	
	
		<fieldset></fieldset>
	 	<table width="497" border="0" align="center" class="table">
  <tr>
    <td width="123" height="56" class="etiquette" ><strong>Libellé</strong></td>
    <td width="522"><label>
      <input name="libelle" type="text" size="40" class="info" required placeholder="libelle"/>
    </label></td>
  </tr>
  <tr>
    <td height="53" class="etiquette"><strong>Prix</strong></td>
    <td><label>
      <input name="prix" type="text" size="40" class="info" required placeholder="prix"/>
    </label></td>
  </tr>
   <tr>
    <td height="53" class="etiquette"><strong>Date</strong></td>
    <td><label>
      <input name="date" type="date" size="40" class="info" required placeholder="Date"/>
    </label></td>
  </tr>
   <tr>
    <td height="53" class="etiquette"><strong>Plat</strong></td>
    <td><label>
      <input name="plat" type="file" size="50" class="info" required placeholder="Plat"/>
    </label></td>
  </tr>
  <tr>
    <td height="58" class="etiquette"><strong>Description</strong></td>
    <td><label>
      <input name="descrip" type="text" size="40" class="info" required placeholder="description "/>
    </label></td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td><label>
      <input type="hidden" name="idtype" value="<?php echo $_GET['idtype'];?>" />
    </label></td>
  </tr>
  <tr>
    <td height="32">&nbsp;</td>
    <td><label>
      <input type="hidden" name="idrest" value="<?php echo $_GET['idrest'];?>" />
    </label></td>
  </tr>
  <tr>
    <td height="81">&nbsp;</td>
    <td><label>
    <input name="enreg" type="submit"  value="Enregistrer" class="btnenreg" />
    </label></td>
  </tr>
</table>

</form>
	 
	<?php
		if (isset($_POST['enreg']))
		{
			$lib=$_POST['libelle'];
			$prix=$_POST['prix'];
			$descr=$_POST['descrip'];
			$jour=$_POST['date'];
			$idtype=$_POST['idtype'];
			$idrest=$_POST['idrest'];
			
				$monfichier= basename($_FILES['plat']['name']);//
				$dossier='../img/img_menu/';//variable qui represente le dossier ou seront enregistrees les img
				$taillemaxi=100000;
			//controle de la taille
				if($_FILES['plat']['size']>$taillemaxi)
					{
						echo'taille de cet image est tres grande ';
						exit();
					}
				//controle du telechargement
					if (move_uploaded_file($_FILES['plat']['tmp_name'],$dossier.$monfichier))//tmp_name 
					{
						echo'Fichier uploade avec succes';
					}
			
			$mycon=$con->EtablirConnexion();
			if($mycon!=false)
			{
				$req=$mycon->prepare("insert into menus values('','$lib','$prix','$descr','$jour','$monfichier','$idtype','$idrest')");
				if($req->execute())
				{
					header('location:listetypes.php?inf=Enregistrement effectué');				
				}
				else
				{
					echo'echec enregistrement';
				}
			}
			else
			{
				echo'Echec Connexion!';
			}
		} 
	
	?>
</body>
</html>
