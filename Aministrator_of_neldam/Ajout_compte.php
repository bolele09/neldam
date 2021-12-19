<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ajout-compte</title>
<link rel="stylesheet" href="../css/style.css" type="text/css"  />
<?php 
	require('../Configuration/Connexion.php');
	$conn=new Connexion();
?>
</head>

<body>
	<div>
	  <?php 
		include('menu_gene.php');
	  ?>
	</div>
	  <h1 align="center" class="Style3"><span class="spann">A</span>jouter un utilisateur</h1> 
	 <div class="container">   
	<form action="Ajout_compte.php" method="post">
	  <table width="437" border="0" align="center">
  <tr>
    <td width="157" class="etiquette"><strong>Prénom</strong></td>
    <td width="270"><label>
      <input name="prenom" type="text" class="info" size="40" required placeholder="prenom de l'utilisateur"/>
    </label></td>
  </tr>
  <tr>
    <td class="etiquette" ><strong>Nom</strong></td>
    <td><label>
      <input name="nom" type="text" class="info" size="40" required placeholder="Nom de l'utilisateur"/>
    </label></td>
  </tr>
  <tr>
    <td class="etiquette"><strong>Email</strong></td>
    <td><label>
      <input name="email" type="text" class="info" size="40" required placeholder="email utilisateur"/>
    </label></td>
  </tr>
  <tr>
    <td class="etiquette"><strong>Login</strong></td>
    <td><label>
    <input name="login" type="text" class="info" size="40" required placeholder="login utilisateur" />
    </label></td>
  </tr>
	 	    
	      <tr>
	        <td class="etiquette"><strong>Mot de passe </strong></td>
      <td><label>
        <input name="password" type="text" class="info" size="40"  required placeholder= "mot de passe de l'utilisateur"/>
        </label></td>
    </tr>
	 <tr>
	        <td colspan="2"><label>
    
              <div align="center">
                <input type="hidden" name="idrest" value="<?php echo $_GET['idrest'] ?>"/>
              </div>
            </label></td>
      </tr>
	      <tr>
	        <td colspan="2"><label>
    
              <div align="center">
                <input type="submit" name="enreg" value="Enregistrer" class="btnenreg"/>
              </div>
            </label></td>
      </tr>
	  
      </table>
</form>
</div>
	<?php
	
		if (isset($_POST['enreg']))
		{
			$svgprn=$_POST['prenom'];
			$svgnm=$_POST['nom'];
			$svgemail=$_POST['email'];
			$svglog=$_POST['login'];
			$svgpwd=$_POST['password'];
			$svgid=$_POST['idrest'];
			
			//connexion
			$connect=$conn->EtablirConnexion();
			if($connect!=false)
			{ 
				$req=$connect->prepare("insert into utilisateurs values ('','$svgprn','$svgnm','$svgemail','$svglog','$svgid')");
				if($req->execute())
				{
					echo'Enregistrement Effectue avec succés!';
				}
				else
				{
					echo'Erreur requete';
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
