<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Solicitar Retirada</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">
  <form method="POST" action="#" class="bg-white p-8 rounded shadow-md w-full max-w-md">
    <h2 class="text-2xl font-bold text-center mb-6">Solicitar Retirada</h2>
    <input type="text" name="instituicao" placeholder="Nome da Instituição" class="w-full mb-4 p-2 border rounded">
    <input type="text" name="item" placeholder="Item desejado" class="w-full mb-4 p-2 border rounded">
    <input type="number" name="quantidade" placeholder="Quantidade" class="w-full mb-4 p-2 border rounded">
    <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded w-full">Solicitar</button>
  </form>
</body>
</html>
