<?php 
$cardapio = $_POST['cardapio'];

$width = '200';

$img1 ="<img src= 'img/chambari.jpg' alt='Bife' width='" . $width . "'>";
$img2 ="<img src= 'img2/frango.jpg' alt='Frango empanado' width='" . $width . "'>";
$img3 ="<img src= 'img3/peixe.jpg' alt='Peixe ao molho de tomate' width='" . $width . "'>";
$img4 ="<img src= 'img4/acai.jpg' alt='Açaí' width='" . $width . "'>";

echo"<h1>$cardapio</h1>";
switch ($cardapio) {
    case '1':
        echo "Um bife à cavalo saindo a galapo!";
        echo "<br>" . $img1;
        break;
    case '2':
        echo "Saindo um frango empanado com purêno capricho";
        echo "<br>" . $img2;
         break;
    case '3':
        echo "O peixe já foi fisgado e o tomate colhido, agora é só aguardar o preparo!";
        echo "<br>" . $img3;
        break;
    case '4':
        echo "Saindo um açaí do grosso com camarão, só do graúdo!";
        echo "<br>" . $img4;
        break;
    
    default:
        echo "Selecione uma das opções!";
        break;
}

