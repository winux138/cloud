<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>
 <?php
$mysqli = new mysqli("192.168.0.31","root","root", "testapp");
if ($mysqli->connect_errno) {
    echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else {
    echo "Connexion réussie à MySQL :)";
}
?>
</body>
</html>
