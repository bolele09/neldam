<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link  rel="stylesheet" href="../css/style.css"  />
<title>Document sans titre</title>
<style type="text/css">
body
{
	background-image:url(../img/bg.jpg);
	padding-top:50px;
}
form
{
	
	margin-top:150px;
	position:inherit;
}
.Style5 {
	font-family: "Times New Roman", Times, serif;
	font-size: xx-large;
	color:#FF6600;
}
.Style6 {color: #000000}
</style>
<?php
 require('../Configuration/utilisateurs.php');
 $user=new Utilisateur();
?>
</head>

<body >

<form action="index.php" method="post" class="container">


<table width="437" height="70%" border="0" align="center" class="tab" >
  <caption align="center" class=" Style5" id="entete">AUTHENTIFICATION
  </caption>
  
  <tr>
    <td width="131" height="78" class="etiquette">
	<div align="left" class="etiquette Style6"><strong>Login</strong></div></td>
    <td width="296"><label>
      <input name="log" type="text" value="" size="40"  class="info"/>
    </label></td>
  </tr>
  <tr>
    <td height="92" class="etiquette">
	<div align="left" class="etiquette Style6"><strong>Mot de passe</strong></div></td>
    <td><label>
    <input name="pwd" type="password" size="40" class="info" />
    </label></td>
  </tr>
  <tr>
    <td height="105" colspan="2"><label>
      <div align="center">
        <input name="con" type="submit"  value="Se connecter"  class="btnenreg"/>
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
			header('location:menu_gene.php');
		}
		else
		{
			echo'Login ou mot de passe incorrecte';
		}
		
		
	}
 ?>
</body>
</html>
