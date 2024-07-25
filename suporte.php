
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Alkalami&family=Montserrat:wght@200&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Play&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
        body {
            margin: 0;
            font-family: 'Noto Sans', sans-serif;
        }

        body * {
            box-sizing: border-box;
        }

        :root {
      --purple: #9400d3;
      --blue: #00285f;
      --gray: #ededed;
    }
        
        header {
      width: 100%;
      height: 140px;
      background: var(--blue);
    }

    .content {
      max-width: 1000px;
      min-width: 300px;
      margin: 0 auto;
      display: flex;
      flex-direction: column;
      padding: 10px;
      font-size: 15px;
      font-family: 'Lato', sans-serif;
    }

    nav {
      width: 100%;
      height: 125px;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
    }

    .brand {
      font-size: 35px;
      color: white;
      cursor: pointer;
      font-family: 'Lato', sans-serif;
    }

    .brand strong {
      font-size: 35px;
      color: var(--purple);
      cursor: pointer;
      font-family: 'Lato', sans-serif;
    }

    nav ul {
      display: flex;
      flex-direction: row;
      margin-top: 10px;
      margin-left: 90px;
    }

    nav ul li {
      list-style: none;
      padding: 10px;
      cursor: pointer;
    }

    nav ul li a {
      color: white;
      text-decoration: none;
      font-family: 'Play', sans-serif;
    }

    nav ul li a:hover {
      color: #9400d3;
    }

    nav ul button {
      border: 2px solid var(--purple);
      background: var(--purple);
      padding: 8px 25px;
      cursor: pointer;
      margin-left: 30px;
      color: white;
      font-weight: bold;
      border-radius: 4px;
      font-family: 'Orbitron', sans-serif;
      letter-spacing: 2px;
    }


    nav ul button:hover {
      transition: background, color 0.6s;
      background: transparent;
      color: var(--purple);
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
            margin: 25px;
            border: none;
            border-radius: 8px;
            outline: none;
            text-transform: uppercase;
            font-weight: 800;
            letter-spacing: 3px;
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
                width: 40vh;
                
            }

            .card-login {
                width: 90%;
            }
            .botão_enviar{
                color: #4907A6;
            }
        }
    </style>
</head>

<body>
<header>
    <div class="content">
      <nav>
        <a href="index.html" style="text-decoration: none; color: wihte;"><a href="index.html" class="brand" style="text-decoration: none; color: white;">Tech</a><a href="index.html" style="font-size: 35px;
          color: var(--purple);
          cursor: pointer;
          font-family: 'Lato', sans-serif;
          text-decoration: none;">Box</a>
        </a>
        <ul>
          <li><a href="index.hmtl">PRODUTOS</a></li>
          <li><a href="#about">SOBRE</a></li>
          <li><a href="devsProject.html">DESENVOLVEDORES</a></li>
          <a href="login.php"><button>LOGIN</button></a>
          <a href="cadastroUsuario.php"><button>CADASTRAR</button></a>
          <a href="suporte.php"><button>SUPORTE</button></a>
        </ul>
        </p>
      </nav>
    </header>
    <form action="" method="POST">
        <div class="form-group">
            <div class="main-login">
                <div class="left-login">
                    <h1>Entre em contato<br>com o nosso suporte especializado</h1>
                    <div class="left-login-image" alt="forms techbox">
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <div class="right-login">
                    <div style="width: 450px;" class="card-login">

                        <img style="height: 500px;" width="400px" src="imagens/qrcode.suporte.png"></img>
    </form>
    </div>
    </div>
    </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>