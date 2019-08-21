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
                <h2>Ajouter un album</h2>
                <p>Tous les champs sont obligatoires.</p>
                <form action="feed_send.php" method="post">
                    Titre* :<br>
                    <input type="text" name="input_titre" id="titre"/><br>
                    Série* :<br>
                    <input type="text" name="input_serie" id="serie"/><br>
                    Tome* :<br>
                    <input type="number" name="input_tome" id="tome"/><br>
                    Scénariste* :<br>
                    <input type="text" name="input_scenariste" id="scenariste"/><br>
                    Dessinateur* :<br>
                    <input type="text" name="input_dessinateur" id="dessinateur"><br>
                    Maison d'édition* :<br>
                    <input type="text" name="input_edition" id="edition"><br>
                    <input type="submit" value="Envoyer"/>
             </form>
    	   </section>
        </div>
        
        <script type="text/javascript" src="validation.js"></script>
        
    </body>
</html>