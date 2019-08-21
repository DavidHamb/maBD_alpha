    <?php
  $host_name = '*******';
  $database = '*******';
  $user_name = '*******';
  $password = '*******';
  $dbh = null;
  try {
    $bdd = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
  } catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage();
    die();
  }
    // Ajout d'une entrée dans la table 
    $req = $bdd->prepare('INSERT INTO albums(titre, serie, tome, scenariste, dessinateur, edition) VALUES(:titre, :serie, :tome, :scenariste, :dessinateur, :edition)');
    $req->execute(array(
        'titre' => $_POST['input_titre'],
        'serie' => $_POST['input_serie'],
        'tome' => $_POST['input_tome'],
        'scenariste' => $_POST['input_scenariste'],
        'dessinateur' => $_POST['input_dessinateur'],
        'edition' => $_POST['input_edition'],
        ));
echo "
<script type='text/javascript'>document.location.replace('feed.php');</script>";
exit(); 
  //header('Location: http://legolem.info/feed.php'); // redirection
?>