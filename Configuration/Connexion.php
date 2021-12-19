<?php 
 	class Connexion
	{	
		//creation des attributs
		var $nserv="localhost";
		var $nbd="samarestobd";
		var $login="root";
		var $mdp="";
		//var $connect="";
		//Connexion a la base de donnee
		//function Connexion(){
			
		//}
		function EtablirConnexion()
		{
			// si la connexion reussi
			if($connect= new PDO('mysql:host='.$this->nserv.';dbname='.$this->nbd,$this->login, $this->mdp))
			
				{
					 return $connect;
				}
			else
			// echec de la connexion
				{
					return false;
				}
				
		}
			
	}
?>