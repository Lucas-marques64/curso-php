<?php 

$clientes = [
    ["name" => "Peter Parker", "email" => "parker.peter@hotmail.com"],
    ["name" => "Mary Jane", "email" => "maryjane@yahoo.com"],
    ["name" => "Gwen Stacy", "email" => "stacy.gwen@gmail.com"],
    ["name" => "Otto Octavius", "email" => "dr.octavius@outloock.com"],
    ["name" => "Norman Osborn", "email" => "greengoblin@osborn.com"],
    ["name" => "Harry Osborn", "email" => "greengoblin2@osborn.com"],
];

echo "<hr>";

foreach ($clientes as $cliente) {
    foreach($cliente as $chave => $valor){
        echo $chave .":" . $valor . "<br>";
    }
    echo "<br>";
}
 

// foreach ($clientes as $cliente) {
//     echo "<strong>Nome: </strong>" . $cliente["name"] . "<br>";
//     echo "<stron>E-mail: </stron>" . $cliente["email"] . "<br>";
//     echo "<br>";
// }

// echo "<hr>";

// foreach ($clientes as $key => $value) {
//     echo $key + 1 . "-" . $value["name"] . "-" . $value["email"] . "<br>";
// }