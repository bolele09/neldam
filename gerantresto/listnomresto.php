<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Liste-restaurant</title>
	<link href="../css/style.css" >
	<style type="text/css">
	<!--
	.Style1
	 {
		font-size: 36px;
		font-weight: bold;
	 }
	-->
	</style>
</head>

<body>
	
	<?php
		include('menu_geran.php');
	 ?>
	<div align="center" class="Style1 Style3" ><em>
    Liste des Restaurants	 	</em></div>
	 <table width="350" border="1" align="center" class="container">
		<thead class="thead">
			<tr>
			
				<td class="etiquette" ><div align="center" class="Style1">Restaurants </div></td>
			
			</tr>
	   </thead>
 

		<?php
			$mycon=$con->EtablirConnexion();
			if($mycon!=false)
			{
				$req=$mycon->prepare('select * from restaurant order by nomRestaurant');
				$req->execute();
				
				while($tab=$req->fetch())
				{
					echo'<tr  class="info">';
						
					echo'<td> <center> <a href="mesmenus.php?idtype='.$_GET['idtype'].'&idrest='.$tab['idRestaurant'].'">'.$tab['nomRestaurant'].'</a></center></td>';
						
					echo'</tr>';
				}
				
			}
		 ?>
	</table>

</body>
</html>
