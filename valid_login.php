<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    if($email != "" and $senha != ""){
            echo "Login realizado com sucesso!";
        }else{
            echo "Erro ao fazer o login";
        }
?>

</body>
</html>
