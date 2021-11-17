<!DOCTYPE html>
<html lang="pt-br
">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Múltiplo</title>
</head>
<body>
    <h1>Fazendo Upload de Vários Arquivos</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    
    <p><input type="file" name="file[]" id="file" multiple></p>
    <p><input type="submit" value="Enviar" name="submit"></p>
    
</form>

<?php
if(isset($_POST["submit"])) {
    $aformats = ["jpg", "jpeg", "png", "gif", "JPEG"];

    foreach($_FILES["file"]["name"] as $nvalue) {
        $ext = pathinfo($nvalue, PATHINFO_EXTENSION);

        if(in_array($ext, $aformats)) {
            $folder = "arquivos/";

            foreach($_FILES["file"]['tmp_name'] as $tmpvalue) {
            $tmpn = $tmpvalue;
            $newtmpn = uniqid(). ".$ext";
    
            if(move_uploaded_file($tmpn, $folder.$newtmpn)) {
                $msg = "Deu tudo Certo";
            }}
        } else {
            $msg = "Formato Inválido";
        }
    } echo $msg;
}
?>
</body>
</html>