<?php
$pdo = new PDO('mysql:host=localhost;dbname=bd', 'root', '');
//$pdo = new PDO('mysql:host=localhost;dbname=webi', 'id16168272_security', 'Projeto-integrador1');

if (isset($_GET['codigo'])) {
    $codigo = $_GET['codigo'];
    $nome = "";
    $email = "";
    $senha = "";

    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE codigo = ?");

    if ($sql->execute(array($codigo))) {
        $info = $sql->fetchall(PDO::FETCH_ASSOC);

        foreach($info as $key => $values){
            $codigo = $values['codigo'];
            $nome = $values['nome'];
            $email = $values['email'];
            $senha = $values['senha'];
        }
    }
}
if (isset($_POST['codigo'])) {

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (isset($_POST['cbkadministrador'])) {
        $administrador = true;
    } else {
        $administrador = false;
    }
    if (isset($_POST['cbkativo'])) {
        $ativo = true;
    } else {
        $ativo = false;
    }
    $sql = $pdo->prepare("UPDATE usuarios SET codigo=?, nome=?, email=?, senha=?
                        WHERE codigo = ?");
    if ($sql->execute(array($codigo, $nome, $email, $senha, $codigo))) {
        echo 'Alterado com sucesso';
    } else {
        echo 'erro ao alterar';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        #field {
            width: 350px;
        }

        #fundo {
            background-color: lightgray
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>

<body id="fundo">
    <center>
    <fieldset id="field">
        <legend>Alterar Usuário</legend>
        <form action="" method="post">
            Codigo: <input type="text" name="codigo" value="<?php $codigo ?>" required><br>
            Nome: <input type="text" name="nome" value="<?php $nome ?>" required><br>
            Login/Email: <input type="text" name="email" value="<?php $email ?>" required><br>
            Senha: <input type="password" name="senha" id="password" value="<?php $senha ?>" required><br>
            <br>
    </fieldset>
    <input type="submit" name="acao" value="Alterar">
    </center>
    </form>
    <script>
        var password = document.getElementById("password"),
            confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
            if (password.value != confirm_password.value) {
                confirm_password.setCustomValidity("Senhas diferentes!");
            } else {
                confirm_password.setCustomValidity('');
            }
        }

        password.onchange = validatePassword;
        confirm_password.onkeyup = validatePassword;
    </script>
</body>

</html>