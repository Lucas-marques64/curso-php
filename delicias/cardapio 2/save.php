<?php
 $lanches["hamburguer_simples"]     = isset($_POST["hamburguer_simples"]) ? $_POST["hamburguer_simples"] : "";
 $lanches["x-burguer"]              = isset($_POST["x-burguer"]) ? $_POST["x-burguer"] : "";
 $lanches["misto_quente"]           = isset($_POST["misto_quente"]) ? $_POST["misto_quente"] : "";
 $lanches["pizza_do_calabreso"]     = isset($_POST["pizza_do_calabreso"]) ? $_POST["pizza_do_calabreso"] : "";
 $lanches["pizza_portuguesa"]       = isset($_POST["pizza_portuguesa"]) ? $_POST["pizza_portuguesa"] : "";
 $lanches["pizza_4_queijos"]        = isset($_POST["pizza_4_queijos"]) ? $_POST["pizza_4_queijos"] : "";
 $lanches["pizza_muzzarela"]        = isset($_POST["pizza_muzzarela"]) ? $_POST["pizza_muzzarela"] : "";
 $lanches["pizza_acai_com_charque"] = isset($_POST["pizza_acai_com_charque"]) ? $_POST["pizza_acai_com_charque"] : "";
 $lanches["pizza_de_calabacon"]     = isset($_POST["pizza_de_calabacon"]) ? $_POST["pizza_de_calabacon"] : "";
 $lanches["hot-dog"]                = isset($_POST["hot-dog"]) ? $_POST["hot-dog"] : "";
 $lanches["omelete"]                = isset($_POST["omelete"]) ? $_POST["omelete"] : "";

 $bebidas["coca_cola_2l"]           = isset($_POST["coca_cola_2l"]) ? $_POST["coca_cola_2l"] : "";
 $bebidas["coca_cola_1l"]           = isset($_POST["coca_cola_1l"]) ? $_POST["coca_cola_1l"] : "";
 $bebidas["coca_cola_latinha"]      = isset($_POST["coca_cola_latinha"]) ? $_POST["coca_cola_latinha"] : "";
 $bebidas["guarana_1l"]             = isset($_POST["guarana_1l"]) ? $_POST["guarana_1l"] : "";
 $bebidas["guarana_latinha"]        = isset($_POST["guarana_latinha"]) ? $_POST["guarana_latinha"] : "";
 $bebidas["soda_latinha"]           = isset($_POST["soda_latinha"]) ? $_POST["soda_latinha"] : "";
 $bebidas["fanta_uva_latinha"]      = isset($_POST["fanta_uva_latinha"]) ? $_POST["fanta_uva_latinha"] : "";
 $bebidas["fanta_laranja_latinha"]  = isset($_POST["fanta_laranja_latinha"]) ? $_POST["fanta_laranja_latinha"] : "";
 $bebidas["sprite"]                 = isset($_POST["sprite"]) ? $_POST["sprite"] : "";
 $bebidas["pepsi"]                  = isset($_POST["pepsi"]) ? $_POST["pepsi"] : "";
 $bebidas["espoca_bucho"]           = isset($_POST["espoca_bucho"]) ? $_POST["espoca_bucho"] : "";

 $pedidos = [
    "lanches" => $lanches, 
    "bebidas" => $bebidas
 ];

 foreach ($pedidos as $chave => $valor) {
    foreach ($valor as $key => $value) {
        echo $key . "<br>";
    }
    echo "<hr>";
 }
//  echo "<pre>";
//  print_r($pedidos);
//  echo "</pre>";
