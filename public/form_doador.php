
<form method="POST" action="/mvc20251/public/processa_doador.php">
  <input type="text" name="nome" placeholder="Nome do doador">
  <input type="email" name="email" placeholder="Email">
  <button type="submit">Cadastrar</button>
</form>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?> 