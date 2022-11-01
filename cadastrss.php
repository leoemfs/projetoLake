<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $datanascimento = $_POST['datanascimento'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $celular = $_POST['celular'];
    
    if($email != "" and $senha != "" and $nome != "" and $datanascimento != "" and $cpf != "" and $endereco != ""
    and $celular != ""){
            echo "Cadastrado com sucesso!";
        }else{
            echo "Erro ao fazer o login";
        }
?>

</body>
</html>
