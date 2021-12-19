<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
 require('../Configuration/Session.php');
 $ses=new Session();
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
<link rel="stylesheet" href="../css/style.css" type="text/css"  />
</head>
<body>

<div align="center" class="menu">

    <div class="menuelt">
        <a href="listetypes.php" >MENU</a>
    </div>  

    <div class="menuelt">
        <a href="typemenu.php" >TYPE MENU</a>
    </div>

    <div class="menuelt">
        <a href="Livreur.php" class="couleur"> LIVREUR </a>
    </div>

    <div class="menuelt">
        <a href="" class="couleur"> INVENTAIRE </a>
    </div>

    <div class="menuelt">
        <a href="ajoutcompte.php" class="couleur">AJOUT COMPTE</a>
    </div>

    <div class="menuelt">
        <a href="modifcompte.php" class="couleur">MODIFIER COMPTE</a>
    </div>
</div>
    <br>

    <?php 
            echo "BIENVENUE ". ucfirst($ses->Recup('pren'))." ". strtoupper($ses->Recup('nom'));
    ?>
</body>

</html>
