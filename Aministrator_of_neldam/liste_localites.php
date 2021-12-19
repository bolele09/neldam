<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link href="../css/style.css" rel="stylesheet">
<title>Document sans titre</title>
<?php 
	require('../Configuration/Connexion.php');
	$conn=new Connexion();
?>
</head>

<body>
<?php 
include('menu_gene.php');
?>

<h1 class="Style3" align="center">Liste Localités </h1>
<table width="200" border="0" class="container">
  <tr>
    <caption class="thead">LOCALITES</caption>
  </tr>

<?php 
$connect=$conn->EtablirConnexion();
	if($connect!=false)
	{
		$req=$connect->prepare('select * from localites order by nomLocalite');
			if($req->execute())
			{
				while( $tab=$req->fetch())
				{
					echo'<tbody>';
					echo'<tr>';
					echo'<td class="info"><a href="restaurants.php?idloc='.$tab['idLocalite'].'">'.$tab['nomLocalite'].'</a></td>';
					echo'</tr>';
					echo'</tbody>';
				}
				echo'</table>';
			}
	}
?>

</body>
</html>
