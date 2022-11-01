<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
   
    <div id="cad">
        <h1>Fazer cadastro</h1>
    </div>
    <div id="forcad">
        <form action="cadastrss.php" method="post">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Nome completo" required><br>
            <label for="email">E-mail</label>
            <input type="text" name="email" placeholder=" Digite aqui seu melhor E-mail" required><br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" required><br>
            <label for="datanascimento">Data de nascimento</label>
            <input type="date" name="datanascimento" required><br>
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" required><br>
            <label for="endereco">Endereço</label>
            <input type="text" name="endereco" required><br>
            <label for="celular">Celular</label>
            <input type="text" name="celular" placeholder="Com DDD" required><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>

    <div id="volhome">
        <a href="index.php">Voltar a Home</a>
    </div>
</body>
</html>
