<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Identificação</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="log">
        <h1>Fazer login</h1>
    </div>
    <div id="for">
        <form action="valid_login.php" method="post">
            <label for="email">E-mail</label>
            <input type="text" name="email" placeholder="Digite aqui o E-mail" required><br>
            <label for="senha">Senha</label>
            <input type="password" name="senha" placeholder="Ex:Exmplsnh_2" required><br>
            <input type="submit" value="Entrar">
        </form>
    </div>
    <div id="fad">
        <a href="cadastro.php">Fazer cadastro</a>
    </div>
</body>
</html>
