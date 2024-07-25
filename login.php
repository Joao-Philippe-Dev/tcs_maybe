<?php
session_start();
$_SESSION['email'] = "";
$_SESSION['senha'] = "";

$pdo = new PDO('mysql:host=localhost;dbname=bd', 'root', '');
include_once __DIR__ . './mysql.php';

if (isset($_POST['acao'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = $pdo->prepare("SELECT * FROM login
                                WHERE email = ? AND senha = ?");

    if ($sql->execute(array($email, $senha))) {
        if ($sql->rowCount() > 0) {
            $info = $sql->fetchall(PDO::FETCH_ASSOC);
            foreach ($info as $key => $values) {
                $_SESSION['email'] = $values['email'];
                $_SESSION['senha'] = $values['senha'];
            }
            echo '<div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
              Cadastrado com sucesso
            </div>
          </div>';
            echo '<script>location.href="index.php";</script>';
        } else {
            echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              Erro ao cadastrar
            </div>
          </div>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap');

        body {
            margin: 0;
            font-family: 'Noto Sans', sans-serif;
        }

        body * {
            box-sizing: border-box;
        }

        .main-login {
            width: 100vw;
            height: 100vh;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left-login {
            width: 50vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .left-login>h1 {
            font-size: 2, 5vw;
            color: #4907A6;
        }

        .left-login-image {
            width: 30vw;
        }

        .right-login {
            width: 50vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card-login {
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 30px 35px;
            background: black;
            border-radius: 20px;
            box-shadow: 0px 10px 40px #00000056;
        }

        .card-login>h1 {
            color: white;
            font-weight: 800;
            margin: 0%;
        }

        .textfield {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            margin: 10px 0px;
        }

        .textfield>input {
            width: 100%;
            border: none;
            border-radius: 10px;
            padding: 15px;
            background: #514869;
            color: #f0ffffde;
            font-size: 12pt;
            box-shadow: 0px 10px 40px #00000056;
            outline: none;
            box-sizing: border-box;
        }

        .textfield>label {
            color: #f0ffffde;
            margin-bottom: 10px;
        }

        .textfield>input::placeholder {
            color: #f0ffff94;
        }

        .btn-login {
            width: 100%;
            padding: 16px 0px;
            margin: 10px;
            border: none;
            margin-right: 60px;
            border-radius: 8px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 1px;
            color: #ffffff;
            background: #4907A6;
            cursor: pointer;
        }

        @media only screen and (max-width: 950px) {
            .card-login {
                width: 85%;
            }
        }

        @media only screen and (max-width: 600px) {
            main.login {
                flex-direction: column;
            }

            .left-login>h1 {
                display: none;
            }

            .left-login {
                width: 100%;
                height: auto;
            }

            .right-login {
                width: 100%;
                height: auto;
            }

            .left-login-image {
                width: 50vh;
            }

            .card-login {
                width: 90%;
            }
            .btn-login2{
            width: 100%;
            padding: 16px 0px;
            margin: 10px;
            border: none;
            border-radius: 8px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 1px;
            color: #ffffff;
            background: #4907A6;
            cursor: pointer;
            }
        }
    </style>
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <form action="index.html" method="POST">
        <div class="form-group">
            <div class="main-login">
                <div class="left-login">
                    <h1>Faça login<br>E fique por dentro das novidades</h1>
                    <a href="index.html"><img src="imagens/tech2.png" class="left-login-image" alt="Logo TechBox"></a>
                </div>
                <div class="right-login">
                    <div class="card-login">
                        <h1>LOGIN</h1>
                        <div class="textfield">
                            <label for="usuario">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required placeholder="Email">
                        </div>
                        <div class="textfield">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha" class="form-control" id="exampleInputPassword" aria-describedby="senhaHelp" name="senha" required placeholder="Senha">
                        </div>
                        <a href="index.html"><button class="btn-login" name="acao">Login</button></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>