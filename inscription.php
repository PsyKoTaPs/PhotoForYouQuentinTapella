<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sworm - Free CSS Template by ZyPOP</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" />
<!--
sworm, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
</head>
<body>
   <?php include 'include/connect.php'?>
<div id="container">
	<div id="header">
            <h1><a href="index.php">PhotoForYou</a></h1>
        
        <div class="clear"></div>
    </div>
    <?php            include 'include/nav.php';?>
    <div id="body">
		<form action="traitement.php" method="post">
								
								Prénom: <input type="text" name="prenom" placeholder="Prenom"><br><br>
								Nom: <input type="text" name="nom" placeholder="Nom"><br><br>
								Types: <SELECT name="Type" size="1">
								<OPTION value="client">Client</OPTION>
								<OPTION value="photographe">Photographe</OPTION>
								</SELECT><br><br>
								Pseudo: <input type="text" name="pseudo" placeholder="Pseudo"><br><br>
		                       	mail : <input type="text" name="mail" placeholder="mail"><br><br>
		                       	Mot de passe : <input type="password" name="pwd" placeholder="Mot de passe"><br><br>
		                       	Confirmation mot de passe : <input type="password" name="pwd2" placeholder="Confirmation"><br><br>

		                       <input type="submit" value="Confirmer">
		 </form>
        <div class="sidebar">
            <ul>	
               <li>
                   <?php include 'include/cotedroit.php'?>
                </li>
             
            </ul> 
        </div>
    	<div class="clear"></div>
    </div>
    <div id="footer">
    
        <div class="footer-bottom">
            <p>&copy; YourSite 2010. Design by <a href="http://zypopwebtemplates.com/">Free CSS Templates</a> by ZyPOP</p>
         </div>
    </div>
</div>
</body>
</html>





