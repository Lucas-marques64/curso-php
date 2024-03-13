<?php
$filme = isset($_POST["filme"]) ? $_POST["filme"] : "";

$acao = isset($_POST["acao"]) ? $_POST["acao"] : "";
$aventura = isset($_POST["aventura"]) ? $_POST["aventura"] : "";
$comedia = isset($_POST["comedia"]) ? $_POST["comedia"] : "";
$drama = isset($_POST["drama"]) ? $_POST["drama"] : "";
$infantil = isset($_POST["infantil"]) ? $_POST["infantil"] : "";
$suspense = isset($_POST["suspense"]) ? $_POST["suspense"] : "";
$terror = isset($_POST["terror"]) ? $_POST["terror"] : "";
$anime = isset($_POST["anime"]) ? $_POST["anime"] : "";
$romance = isset($_POST["romance"]) ? $_POST["romance"] : "";
$documentario = isset($_POST["documentario"]) ? $_POST["documentario"] : "";
$ficcao = isset($_POST["ficcao"]) ? $_POST["ficcao"] : "";
$categorias = [
    "acao"          => $acao,
    "aventura"      => $aventura,
    "comedia"       => $comedia,
    "drama"         => $drama,
    "infantil"      => $infantil, 
    "suspense"      => $suspense, 
    "terror"        => $terror, 
    "anime"         => $anime,
    "romance"       => $romance,
    "documentario"  => $documentario,
    "ficcao"        => $ficcao
];

?>

<!-- exibindo o html com s informações enviadas pelo formulario -->
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <p>Filme: <php echo $filme; ?></p>
    <p>Categorias</p>
    <ol>
    <?php
        foreach ($categorias as $key => $value){
            if ($value){
                echo "<li>" . $key . "</li> <br>";
            }
        }
    ?>
    </ol>
 </body>
 </html>
 
