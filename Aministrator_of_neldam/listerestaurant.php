<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet">
<title>Liste-restaurant</title>
</head>

<body>
	<?php
		include('menu_gene.php');
	 ?>
	 Liste des Restaurant
	 <table width="702" height="61" border="">
  <tr>
    <td width="150" class="thead"><div align="center">Restaurants</div></td>
	<td width="155" class="thead"><div align="center">Téléphone</div></td>
	<td width="153"class="thead"><div align="center">Adresse</div></td>
	<td width="88" class="thead"><div align="center">Email</div></td>
  </tr>
</table>

	<?php
		$mycon=$con->EtablirConnexion();
		if($mycon!=false)
		{
			$req=$mycon->prepare('select * from restaurant order by nomRestaurant' )
			$req->execute();
			while($tab=$req->fetch())
			{
				echo'<tr class="info">';
					echo'<td>';
				echo'</tr>';
			}
		}
	 ?>

</body>
</html>
