<?php
require_once __DIR__ . '/../dao/DoacaoDAO.php';

$dao = new DoacaoDAO();
$doacoes = $dao->listarTodos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Doações Registradas</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
  <h1 class="text-2xl font-bold mb-4">Doações Registradas</h1>
  <table class="table-auto w-full bg-white shadow-md rounded">
    <thead>
      <tr class="bg-gray-200">
        <th class="px-4 py-2">ID</th>
        <th class="px-4 py-2">Doador</th>
        <th class="px-4 py-2">Item</th>
        <th class="px-4 py-2">Quantidade</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($doacoes as $d): ?>
      <tr>
        <td class="border px-4 py-2"><?= $d['id'] ?></td>
        <td class="border px-4 py-2"><?= $d['doador'] ?></td>
        <td class="border px-4 py-2"><?= $d['item'] ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
