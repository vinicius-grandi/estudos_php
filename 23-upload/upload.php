<!DOCTYPE html>
<html lang="pt-br
">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <h1>Fazendo Upload de Arquivos</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    
    <p><input type="file" name="file" id="file"></p>
    <p><input type="submit" value="Enviar" name="submit"></p>
    
</form>

<?php
if(isset($_POST["submit"])) {
    $aformats = ["jpg", "jpeg", "png", "gif", "JPEG"];
    $ext = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

    if(in_array($ext, $aformats)) {
        $folder = "arquivos/";
        $tmpn = $_FILES["file"]['tmp_name'];
        $newtmpn = uniqid(). ".$ext";

        if(move_uploaded_file($tmpn, $folder.$newtmpn)) {
            echo "Deu tudo certo";
        }
    } else {
        echo "Formato Inválido";
    }
}
?>
</body>
</html>