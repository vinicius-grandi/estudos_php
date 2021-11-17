<?php
// conexão
require_once "db_connect.php";
// sessão
session_start();
// botão enviar
    if(isset($_POST['submit'])) {
        $name = mysqli_escape_string($connect, $_POST['nuser']);
        $psw = mysqli_escape_string($connect, $_POST['psw']);

        if(empty($name) || empty($psw)) {
        $erros[] = "<script>alert(\"Nenhum dos campos pode permanecer vazio\")</script>";
        } else {

            $sql = "SELECT login FROM usuarios WHERE login = '$name'";
            $res = mysqli_query($connect, $sql);

            if(mysqli_num_rows($res) > 0) {
                
                $psw = md5($psw);
                $sql = "SELECT * FROM usuarios WHERE login = '$name' AND senha = '$psw'";
                $res = mysqli_query($connect, $sql);

                if(mysqli_num_rows($res) == 1) {

                    $dados = mysqli_fetch_array($res);
                    mysqli_close($connect);
                    $_SESSION['logged'] = true;
                    $_SESSION['user_id'] = $dados['id'];
                    header('Location: home.php');
            } else {
                $erros[] = "<script>alert(\"Senha Inexistente\")</script>";
            }
            } else {
                $erros[] = "<script>alert(\"Usuário Inexistente\")</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Procedural</title>
    <style>
        body {
            background-image: linear-gradient(to bottom, gray 49%, black);
            background-attachment: fixed;
        }
        .container {
            display: flex;
            flex-direction: column;
            background-color: rgb(233, 233, 233);
            height: 300px;
            width: 50%;
            border-radius: 5%;
            margin: auto;
            text-align: center;
        }
        
        .container #submit {
            margin: auto;
            width: fit-content;
            padding: .200rem;
        }
        
        .container p {
            font-size: 1.1rem;
            font-family: Arial, Helvetica, sans-serif;
            margin: .9rem;
        }

        #login {
            background-color: white;
            width: fit-content;
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
    if(!empty($erros)) {
        foreach($erros as $erro) {
        echo $erro;
        }
    }
    ?>
    <div class="container">
        <h1>Sistema de Login</h1>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <p><label for="nuser">Nome de usuário:</label></p><input type="text" name="nuser" id="nuser">

            <p><label for="psw">Senha: </label></p><input type="password" name="psw" id="psw">

            <p><input type="submit" value="Entrar" name="submit" id="submit"></p>
            </form>
        
    </div>
</body>
</html>