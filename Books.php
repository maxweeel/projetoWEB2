<?php require_once '../Controller/Auth_Verify.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP HelpDesk - Adcionar novo livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

</head>
<body class="m-5">
<nav class="bg-info d-flex justify-content-between p-3">
    <div>
      <a href="Perfil.php" class="text-white text-decoration-none">Perfil</a>
      <a href="dashboard.php" class="text-white text-decoration-none">Inicio</a>
    </div>
    <a href="../Controller/Auth.php?operation=logout" class="text-white text-decoration-none">Sair</a>
  </nav>
<main class="bg-success card d-flex align-items-center mt-5">
<form action="#" method="post" class="w-75 p-3">
  <label for="user_name">Titulo do Livro</label>    
  <input type="text" id="user_name" name="user_name" class="form-control" required />
  <label for="user_email">Genero do Livro</label>
  <input type="name" id="name" name="autorname" class="form-control" required />
  <label for="chapters">Numero de Capitulos</label>
  <input type="number"id="chapters" name="chaptersnumber" class="form-control" required>
  <label for="user_email">Nome do Autor</label>
  <input type="name" id="name" name="autorname" class="form-control" required />
  <label for="description">Descrição dp Livro</label>
 <textarea name="description" id="description" cols="30" rows="5" class="form-control" required></textarea>
 <button class="btn btn-light mt-3">Registrar</button>
</form>
</main>

</body>
</html>