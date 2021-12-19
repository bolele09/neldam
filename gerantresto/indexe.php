<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Document sans titre</title>
<link href="../css/style.css" rel="stylesheet">
<style type="text/css">
body
{
	margin-top:100px;
	background-image:url(../img/back.jpg);
	}
form
{
	background-color:#0000CC;
	margin-top:100;
}
.Style4 {
	color: #FF6600;
	font-weight: bold;
	font-size: xx-large;
}
</style>
<?php
 require('../Configuration/utilisateurs.php');
 $user=new Utilisateur();
?>
</head>

<body >


<form action="index.php" method="post" class="container">


<table width="435" height="372%" border="0" align="center"  class="tab">
  <caption align="center" class="titreliste Style4">
  <span class="etiquette">AUTHENTIFICATION</span><br />
  </caption>
  
  <tr>
    <td width="128" height="28%" class="etiquette"><div align="left"><strong>Login</strong></div></td>
    <td width="297"><label>
      <input name="log" type="text" value="" size="40" class="info"/>
    </label></td>
  </tr>
  <tr>
    <td height="42%" class="etiquette"><div align="left"><strong>Mot de passe</strong></div></td>
    <td><label>
    <input name="pwd" type="password" size="40"  class="info"/>
    </label></td>
  </tr>
  <tr>
    <td height="30%" colspan="2"><label>
      <div align="center">
        <input name="con" type="submit" class="btnenreg" value="Se connecter" />
        </div>
    </label></td>
    </tr>
</table>
</form>

<?php
	if ( isset($_POST['con']))
	
	{
		$svglog=$_POST['log'];
		$svgpwd=$_POST['pwd'];
		$user->setLogin($svglog);
		$user->setPassword($svgpwd);
		if($user->conSess($con,$ses))
		{
			header('location:menu_geran.php');
		}
		else
		{
			echo'Login ou mot de passe incorrecte';
		}
		
		
	}
 ?>
</body>
</html>
