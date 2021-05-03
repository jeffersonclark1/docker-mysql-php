<?php
  $pdo = new PDO('mysql:host=db;dbname=es21','es21estudent', 'es21password');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $consulta = $pdo->query("SELECT * FROM places;");

  while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
      echo "id: {$linha['id']} - Name: {$linha['name']}<br />";
  }
?>