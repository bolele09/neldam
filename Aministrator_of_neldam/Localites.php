<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet">
<title>Document sans titre</title>



</head>

<body>
<div align="center">
  <?php include('./menu_gene.php')?>
  </div>
  <h1 class="Style3" align="center"> Enregistrer Une Localité</h1>
<form action="Localites.php" method="post" class="container">

<table width="434" border="0" align="center" class="tab">

  <tr>
    <td width="154" class="etiquette">Nom Localit&eacute; </td>
    <td width="270"><input name="localite" type="text" size="35" class="info"  required placeholder="nom localité"/></td>
  </tr>
  <tr>
    <td colspan="2"><label>
    <div align="center">
      <input name="enreg" type="submit" id="enreg" value="Enregistrer" class="btnenreg"  align="right"/>
    </div>
    </label></td>
    </tr>
</table>
<label></label>
</form>
<?php 
 	if (isset($_POST['enreg']))
	{
		$svg=$_POST['localite'];
		$mypdo=$con->EtablirConnexion();
		if($mypdo!=false)
		{
			$req=$mypdo->prepare("insert into localites values('','$svg')");
			if($req->execute())
			{
				echo'<font  color="green" ><center><b> Enregistrement effectué avec succés!</b></center></font>';
			}
			else
			{
				echo'Erreur Enregistrement';
			}
		}
		else
		{
			echo'Erreur Connexion';
		}
		
	}
?>
</body>
</html>
