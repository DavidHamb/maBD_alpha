<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>maBD</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Ma Bande Dessinée !</h1>            
        </header>
        <div id="container">
    	   <nav>
    		  <?php
    		  include("menu.php");
    		  ?>
    	   </nav>
    	   <section>
                <h2>Résultat de la recherche</h2>
                <?php
                // Connexion //////////////////////////
                try{
                    $bdd = new PDO('mysql:host=*******;dbname=*******;charset=utf8', '*******', '*******',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); 
                }
                catch(Exception $e){
                    die('Erreur : '.$e->getMessage());
                }
                // Calcul du nombre de résultats de la saisie ////////////////////
                // Requete
                if($_POST['input_titre']!=NULL){
                    $reponse = $bdd->query('SELECT COUNT(*) AS nbResults FROM albums WHERE lower(titre) LIKE \'%'.htmlspecialchars($_POST['input_titre']).'%\''); 
                }
                elseif($_POST['input_serie']!=NULL){
                    $reponse = $bdd->query('SELECT COUNT(*) AS nbResults FROM albums WHERE lower(serie) LIKE \'%'.htmlspecialchars($_POST['input_serie']).'%\''); 
                } 
                elseif($_POST['input_tome']!=NULL){
                    $reponse = $bdd->query('SELECT COUNT(*) AS nbResults FROM albums WHERE lower(serie) WHERE tome=\''.htmlspecialchars($_POST['input_tome']).'\''); 
                }
                elseif($_POST['input_scenariste']!=NULL){
                    $reponse = $bdd->query('SELECT COUNT(*) AS nbResults FROM albums WHERE lower(scenariste) LIKE \'%'.htmlspecialchars($_POST['input_scenariste']).'%\''); 
                }
                elseif($_POST['input_dessinateur']!=NULL){
                    $reponse = $bdd->query('SELECT COUNT(*) AS nbResults FROM albums WHERE lower(dessinateur) LIKE \'%'.htmlspecialchars($_POST['input_dessinateur']).'%\''); 
                }
                elseif($_POST['input_edition']!=NULL){
                    $reponse = $bdd->query('SELECT COUNT(*) AS nbResults FROM albums WHERE lower(edition) LIKE \'%'.htmlspecialchars($_POST['input_edition']).'%\''); 
                }
                else{
                    $reponse=NULL
                    ?>
                    <p>Aucune recherche...</p>
                    <?php                    
                }
                // Affichage  
                if($reponse!=NULL){               
                    while ($donnees = $reponse->fetch()){
                        echo '<p>'.$donnees['nbResults'].' résultat(s) trouvé(s)</p>';
                    }
                $reponse->closeCursor();                    
                }
                // Requête ////////////////////////////
                if($_POST['input_titre']!=NULL){
                    $reponse = $bdd->query('SELECT * FROM albums WHERE lower(titre) LIKE \'%'.htmlspecialchars($_POST['input_titre']).'%\' ORDER BY serie, tome');
                }
                elseif($_POST['input_serie']!=NULL){
                    $reponse = $bdd->query('SELECT * FROM albums WHERE lower(serie) LIKE \'%'.htmlspecialchars($_POST['input_serie']).'%\' ORDER BY serie, tome');
                }
                elseif($_POST['input_tome']!=NULL){
                    $reponse = $bdd->query('SELECT * FROM albums WHERE tome =\''.htmlspecialchars($_POST['input_tome']).'\' ORDER BY serie, tome');                   
                }
                elseif($_POST['input_scenariste']!=NULL){
                    $reponse = $bdd->query('SELECT * FROM albums WHERE lower(scenariste) LIKE \'%'.htmlspecialchars($_POST['input_scenariste']).'%\' ORDER BY serie, tome');         
                }
                elseif($_POST['input_dessinateur']!=NULL){
                    $reponse = $bdd->query('SELECT * FROM albums WHERE lower(dessinateur) LIKE \'%'.htmlspecialchars($_POST['input_dessinateur']).'%\' ORDER BY serie, tome');       
                }
                elseif($_POST['input_edition']!=NULL){
                    $reponse = $bdd->query('SELECT * FROM albums WHERE lower(edition) LIKE \'%'.htmlspecialchars($_POST['input_edition']).'%\' ORDER BY serie, tome');              
                }
                else{
                    $reponse=NULL
                    ?>
                    <p>Saisissez un mot clé pour l'un des critères pour effectuer la recherche</p>
                    <?php
                }
                // Afichage du résultat  //////////////////////////////////////////:
                if($reponse!=NULL){
                    while ($donnees = $reponse->fetch()){
                        ?>
                        <div id="showResults">
                        <span class="showTitle"><?php echo $donnees['titre']; ?></span>, <span class="showSer"><?php echo $donnees['serie']; ?></span>, tome <?php echo $donnees['tome']; ?>, par <?php echo $donnees['scenariste']; ?> & <?php echo $donnees['dessinateur']; ?>, ed. <?php echo $donnees['edition']; ?> <br/>
                        </div>
                        <?php
                }
                $reponse->closeCursor();
                }
                ?>
    	   </section>
        </div>
    </body>
</html>

