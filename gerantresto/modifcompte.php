<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Modifier-compte</title>
</head>

<body>

  <?php 
include ('menu_geran.php');
?>
<h1 class="Style3" align="center">
 Mofifier un compte
</h1>
<form action="modifcompte.php" method="post" class="container">
		
		<table width="498" border="0" align="center">
		  <tr>
			<td width="195" class="etiquette"><div align="left"><strong>Ancien login </strong></div></td>
			<td width="267"><label>
			  <input name="oldlog" type="text" size="40" class="info"  required placeholder="Ancien Login"/>
			</label></td>
		  </tr>
		  <tr>
			<td class="etiquette"><div align="left"><strong>Ancien mot de passe </strong></div></td>
			<td><label>
			  <input name="oldpwd" type="text" size="40" class="info" required placeholder="Ancien mot de passe"/>
			</label></td>
		  </tr>
		  <tr>
			<td class="etiquette"><div align="left"><strong>Nouveau login </strong></div></td>
			<td><label>
			  <input name="newlog" type="text" size="40" class="info" required placeholder="Nouveau login"/>
			</label></td>
		  </tr>
		  <tr>
			<td class="etiquette"><div align="left"><strong>Nouveau mot de passe </strong></div></td>
			<td><label>
			  <input name="newpwd" type="text" size="40" class="info" required placeholder="Nouveau mot de passe"/>
			</label></td>
		  </tr>
		  <tr>
			<td class="etiquette"><div align="left"><strong>Confirmation</strong></div></td>
			<td><label>
			  <input name="conf" type="text" size="40" class="info" required placeholder="confirmation"/>
			</label></td>
		  </tr>
		  <tr>
			<td colspan="2"><label>
            <div align="center">
              <input name="modif" type="submit" id="enreg"  class="btnenreg" value="Modifier" />
            </div>
			</label></td>
		  </tr>
  </table>

	
</form>
	<?php
		if(isset($_POST['modif']))
		{
			$anlg=$_POST['oldlog'];
			$anpwd=$_POST['oldpwd'];
			$newlg=$_POST['newlog'];
			$newpwd=$_POST['newpwd'];
			$conf=$_POST['conf'];
			
			
			if( $newpwd!=$conf)
			{
				echo'Les deux mots de passe saisis ne sont pas conforme';
				exit();
			}
			else
			{
				if($connect=$con->EtablirConnexion())
				{
					$req=$connect->prepare("select * from utilisateurs where login='$anlg' and password='$anpwd'");
					$req->execute();
					
						if($req->rowCount()==0)
						{
							 echo'Login ou mot de passe incorrect!';
						}
						else
						{
							$maj=$connect->prepare("update utilisateurs set login='$newlg' and password='$newpwd' where login='$anlg' and password='$anpwd'");
							
									if($maj->execute())
									{
										echo' Modification effectuée avec succés';
									}
									else
									{
										echo'Erreur Requete';
									}
						}
					
					
				}
			
		
		}
		}
	 ?>

</body>
</html>
