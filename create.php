<?php  
$username = 'root';
  $password = '';
try {
  
  $pdo = new PDO('mysql:host=localhost;dbname=meubancodedados', $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
  $stmt = $pdo->prepare('INSERT INTO minhaTabela VALUES(:nome)');
  $stmt->execute(array(
    ':nome' => 'Fabiano Cruz'
  ));
   
  echo $stmt->rowCount(); 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}  

?>