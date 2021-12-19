 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />
 <link rel="stylesheet" href="../css/style.css">
<title>Liste Catégorie</title>
 <?php 
	  
		 require('../Configuration/Connexion.php');
		 $con=new Connexion();
	
	   ?>
</head>

<body>
	
	 

    <div align="center">
      <?php 
	  
		 include('menu_geran.php');
	
	   ?>
   </div>
   
		<h3 align="center"  class="Style3" > VEUILLEZ CHOISIR LA CATEGORIE DU MENU QUE VOUS SOUHAITEZ ENREGISTRER</h3><br/>
		
	 <?php
	 
	  if(isset($_GET['inf']))
	  
	  {
	  	echo'Enregistrement effectué avec succes';
	  
	  }
	  
	   ?>
  
   <table width="398"  border="0" align="center">
	  <thead>	
	  <tr>
		<td width="300" >
		
		  <div align="center" >
			<h2>CATEGORIES</h2>
		  </div>
		</td>
	  </tr>
	  </thead>
	  
	  <tbody>
	  <?php 
	  $mycon=$con->EtablirConnexion();
	  if($mycon!=false)
	  {
			$req=$mycon->prepare('select * from typemenu order by libelle');
			$req->execute();
			
				while($tab=$req->fetch())
				{
				
					echo'<tr>';
					
						echo'<td align="center" class="info"><a href="mesmenus.php?idtype='.$tab['idtypemenu'].'">'.$tab['libelle'].'</a> </td>';
					echo'</tr>';
					
				}
			
	  }
	  
	  ?>
	  </tbody>
	</table>

	
</body>
</html>
