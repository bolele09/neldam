<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liste-restaurant</title>
<link href="../css/style.css" >
<style type="text/css">
<!--
.Style1 {font-size: 18px}
-->
</style>
</head>

<body>
	
	<?php
		include('menu_geran.php');
	 ?>
	<div align="center" class="Style3" >
	 Liste des Restaurants
	 	</div>
	  <table width="350" border="0" align="center" class="container">
		<thead class="thead">
			<tr>
			<td  >Restaurants </td>
			<!--<td >Adresse</td>
			<td >Telephone</td>
			<td >Email</td>-->
		  </tr>
	   </thead>

		<tbody >
		<?php
			$mycon=$con->EtablirConnexion();
			if($mycon!=false)
			{
				$req=$mycon->prepare('select * from restaurant order by nomRestaurant');
				$req->execute();
				while($tab=$req->fetch())
				{
					echo'<tr class="info" >';
						echo'<td ><a  href="livreur.php?idrest='.$tab['idRestaurant'].'">'.$tab['nomRestaurant'].'</td>';
						//echo'<td>'.$tab['telephoneRestaurant'].'</td>';
						//echo'<td>'.$tab['adresseRestaurant'].'</td>';
						//echo'<td>'.$tab['e_mail'].'</td>';
					echo'</tr>';
				}
			
			}
		 ?>
	 </table>

</body>
</html>
