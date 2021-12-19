<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php
	 require('../Configuration/Connexion.php');
	$con=new Connexion();
	?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Type-menu</title>
<link href="../css/style.css" rel="stylesheet">
</head>

<body>
	
	  <?php
		include('menu_geran.php');
	 ?>
	 
	 <h1 align="center" class="Style3">
	  <em><strong>	 ENREGISTRER TYPE MENU</strong></em>    </h1>
	  <form action="typemenu.php" method="post" class="container">
	  
	  	<table width="362" border="0" align="center">
		  <tr>
			<td width="79" class="etiquette"><div align="left"><strong>Libellé</strong></div></td>
			<td width="273"><label>
			<input name="lib"  class="info" type="text" id="lib" size="40" />
			</label></td>
		  </tr>
		   <!--<tr>
			<td width="79" class="etiquette"></td>
			<td><input name="idresto"  class="info" type="text" value=""/></td>
		   </tr>-->
		  <tr>
			<td>&nbsp;</td>
			<td><input name="enreg" type="submit"  class="btnenreg" value="Enregistrer" /></td>
		  </tr>
	    </table>

	  
	  </form>

	<?php
	if (isset($_POST['enreg']))
	{
		$svglib=$_POST['lib'];
		//$svgidrestau=$_POST['idresto'];
		$svgidrestau=$ses->Recup('idrest');
		$mycon=$con->EtablirConnexion();
		if($mycon!=false)
		{
			$req=$mycon->prepare("insert into typemenu values ('','$svglib','$svgidrestau')");
			if($req->execute())
			{
				echo'enregistrement effectue!';
				
			}
			else
			{
				echo'Erreur enregistrement';
			}
		}
		else
		{
			echo'echec de connexion!';
		}
	}
	
	 ?>
</body>
</html>
