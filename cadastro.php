<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
   <main 
   class="d-flex justify-content-center align-itens-center w-50 h-75 card text-bg-success"
   style="height: 50vh">
  <form action="" method="post" class="p-lg-5" >
        <label for="name">Nome</label>
        <input type="text" id="name" name="name" placeholder="Nome" class="form-control">
        
        <label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Email" class="form-control">

        <label for="password">Senha</label>
        <input type="password" id="password" name="password" placeholder="Senha" class="form-control">

        <label for="password">Confirme sua senha</label>
        <input type="password" id="password" name="password" placeholder="Senha" class="form-control">

        <button class="btn btn-light d-grid gap-2 col-6 mx-auto m-3"  type="submit">Entrar</button>
  </form>
</main>
</div>
</body>
</html>
