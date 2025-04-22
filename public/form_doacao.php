<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Registrar Doação</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
  <form method="POST" action="/mvc20251/controller/DoacaoController.php" class="bg-white p-8 rounded shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Registrar Doação</h2>
    
    <input type="number" name="doador_id" placeholder="ID do Doador" class="w-full mb-4 p-2 border rounded">
    
    <input type="number" name="instituicao_id" placeholder="ID da Instituição" class="w-full mb-4 p-2 border rounded">
    
    <textarea name="descricao" placeholder="Descrição da Doação" class="w-full mb-4 p-2 border rounded h-24 resize-none"></textarea>
    
    <button type="submit" class="bg-green-600 text-white py-2 px-4 rounded w-full">Registrar Doação</button>
  </form>
</body>
</html>
