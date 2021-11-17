<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulários</title>
    <style>
        #erro {
            color: red;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        legend {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Formulários</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <fieldset>
        <legend>Informações Pessoais</legend>

        <p><label for="name">Nome:</label> <input type="text" name="name" id="name" placeholder="Seu nome"></p>

        <p><label for="nyear">Idade:</label> <input type="text" name="nyear" id="nyear" placeholder="Sua Idade"></p>

        <p><label for="etxt">Email:</label> <input type="text" name="etxt" id="etxt" placeholder="Seu email"></p>

        <p><label for="ip">IP:</label> <input type="text" name="ip" id="ip" placeholder="Seu IP"></p>

        <input type="submit" value="Enviar" name="subm">
    </fieldset>
    </form>
<?php
if(isset($_POST["subm"])) {
    // //Array de erro
    // $erros = [];

    // //Validações
    // if(!$idade = filter_input(INPUT_POST, 'nyear', FILTER_VALIDATE_INT)) {
    //     array_push($erros, "Você precisa inserir uma idade.");
    // }

    // if(!$email = filter_input(INPUT_POST,'etxt',FILTER_VALIDATE_EMAIL)) {
    //     array_push($erros, "Você precisa inserir um email.");
    // }

    // if(!$peso = filter_input(INPUT_POST, "weight", FILTER_VALIDATE_FLOAT)) {
    //     array_push($erros, "Você precisa inserir seu peso.");
    // }

    // if(!$IP = filter_input(INPUT_POST, "ip",FILTER_VALIDATE_IP)) {
    //     array_push($erros, "Você precisa inserir seu IP.");
    // }
    
    // // Mensagem de Erro
    // if(!empty($erros)) {
    //     foreach($erros as $erro) {
    //         echo "<li id=\"erro\">$erro";
    //     }
    // } else {
    //     echo "Todos seus dados estão corretos";
    // }
        $nome = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "$nome <br>";

        $idade = filter_input(INPUT_POST, "nyear", FILTER_SANITIZE_NUMBER_INT);
        echo "$idade <br>";
}

?>
</body>
</html>