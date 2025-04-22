<?php
// Formulário simples para cadastro de instituição
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastrar Instituição</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
  <form method="POST" action="#" class="bg-white p-8 rounded shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Cadastrar Instituição</h2>
    <input type="text" name="nome" placeholder="Nome da Instituição" class="w-full mb-4 p-2 border rounded">
    <input type="email" name="email" placeholder="Email" class="w-full mb-4 p-2 border rounded">
    <input type="text" name="endereco" placeholder="Endereço" class="w-full mb-4 p-2 border rounded">
    <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded w-full">Cadastrar</button>
  </form>
</body>
</html>
