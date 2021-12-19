<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>
<?php 
 require('Connexion.php');
 require('Session.php');
 $con=new Connexion();
 $ses=new Session();	
?>
</head>

<body>
	<?php 
	class Utilisateur
	{
		var $iduser;
		var $nom;
		var $pren;
		var $lg;
		var $pwd;
		var $idrest;
		
		function setPrenom($prn)
		{
			$this->pren=$prn;
		}
		
		function getPrenom()
		{
			return $this->pren;
		}
		
		
		function setNom($nm)
		{
			$this->nom=$nm;
		}
		
		function getNom()
		{
			return($this->nom);
		}
		function setLogin($login)
		{
			$this->lg=$login;
		}
		
		function getLogin()
		{
			return $this->lg;
		}
		
		
		
		function setPassword($pass)
		{
			$this->pwd=$pass;
		}
		
		function getPassword()
		{
			return $this->pwd;
		}
		
		function setIden($id)
		{
			$this->iduser=$id;
		}
		
		function getIden()
		{
			return $this->iduser;
		}
		
		function conSess($con,$ses)
		{
			$svgcon=$con->EtablirConnexion();
				if($svgcon!=false)
		 		{
				 $req=$svgcon->prepare("select* from utilisateurs where login='".$this->getLogin()."' and password='".$this->getPassword()."'");
				  if($req->execute())
				  {
				  		if($req->rowCount()==0)
						{
							return false;
						}
						else
						{
							$tab=$req->fetch();
							
							$ses->Sauvegarde('iduser',$tab['idUtilisateur']);
							$ses->Sauvegarde('nom',$tab['nom']);
							$ses->Sauvegarde('pren',$tab['prenom']);
							$ses->Sauvegarde('lg',$tab['login']);
							$ses->Sauvegarde('pwd',$tab['password']);
							$ses->Sauvegarde('idrest',$tab['idRestaurant']);
							return true;
							
						}
				  }
				  else
				  {
				  	echo'Echec de connexion';
				  }
				}
		}
		
		
		
	}	
	?>
</body>
</html>
