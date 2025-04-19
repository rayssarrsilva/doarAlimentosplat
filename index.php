<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sistema de Doações</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900 font-sans min-h-screen flex items-center justify-center">
  <div class="bg-white p-8 rounded-xl shadow-lg max-w-xl w-full text-center">
    <h1 class="text-3xl font-bold text-blue-600 mb-4">Sistema de Doações</h1>
    <p class="text-lg text-gray-600 mb-6">Conectando doadores a instituições de caridade.</p>
    
    <div class="grid grid-cols-1 gap-4">
      <!-- Parte da Rayssa -->
      <a href="public/form_doador.php" class="bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded-lg transition">
        Cadastrar Doador
      </a>
      <a href="public/form_instituicao.php" class="bg-green-600 hover:bg-green-700 text-white py-2 px-4 rounded-lg transition">
        Cadastrar Instituição
      </a>

      <!-- Parte do Mateus -->
      <a href="public/form_doacao.php" class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded-lg transition">
        Registrar Doação
      </a>
      <a href="public/listar_doacoes.php" class="bg-indigo-600 hover:bg-indigo-700 text-white py-2 px-4 rounded-lg transition">
        Visualizar Doações
      </a>
      <a href="public/solicitar_retirada.php" class="bg-red-600 hover:bg-red-700 text-white py-2 px-4 rounded-lg transition">
        Solicitar Retirada
      </a>
    </div>
  </div>
</body>
</html>
