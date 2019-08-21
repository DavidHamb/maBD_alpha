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
             <h2>Effectuer une recherche</h2>
            <form action="results.php" method="post">
                    Par titre :<br>
                    <input type="text" name="input_titre"/><br>
                    Par série :<br>
                    <input type="text" name="input_serie"/><br>
                    Par tome :<br>
                    <input type="number" name="input_tome"/><br>
                    Par scénariste :<br>
                    <input type="text" name="input_scenariste"/><br>
                    Par dessinateur :<br>
                    <input type="text" name="input_dessinateur"><br>
                    Par maison d'édition :<br>
                    <input type="text" name="input_edition"><br>
                    <input type="submit" value="Rechercher"/>
             </form>
    	   </section>
        </div>
    </body>
</html>