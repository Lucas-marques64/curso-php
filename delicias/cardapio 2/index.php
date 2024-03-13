<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fake Food</title>
</head>
<body>
    <h1>Cardápio</h1>
    <form method="post" action="save.php">
        <fieldset>
            <legend>Lanches</legend>

            <input type="checkbox" name="hamburguer_simples"> hamburguer simples <br>
            <input type="checkbox" name="x-burguer"> x-burguer <br>
            <input type="checkbox" name="misto_quente"> misto quente <br>
            <input type="checkbox" name="pizza_do_calabresa"> pizza do calabreso <br>
            <input type="checkbox" name="pizza_portuguesa"> pizza portuguesa <br>
            <input type="checkbox" name="pizza_4_queijos"> pizza 4 queijos <br>
            <input type="checkbox" name="pizza_muzzarela"> pizza muzzarela <br>
            <input type="checkbox" name="pizza_acai_com_charque"> pizza açaí com charque <br>
            <input type="checkbox" name="pizza_de_calabacon"> pizza de calabacon <br>
            <input type="checkbox" name="hot-dog"> hot-dog <br>
            <input type="checkbox" name="omelete"> omelete <br>
        </fieldset>
    
        <fieldset>
            <legend>bebidas</legend>

            <input type="checkbox" name="coca_cola_2l"> coca-cola 2l <br>
            <input type="checkbox" name="coca_cola_1l"> coca-cola 1l <br>
            <input type="checkbox" name="coca_cola_latinha"> coca-cola latinha <br>
            <input type="checkbox" name="guarana_1l"> guarana 1l <br>
            <input type="checkbox" name="guarana_latinha"> guarana latinha <br>
            <input type="checkbox" name="soda_latinha"> soda limonada latinha <br>
            <input type="checkbox" name="fanta_uva_latinha"> fanta uva latinha <br>
            <input type="checkbox" name="fanta_laranja_latinha"> fanta laranja latinha <br>
            <input type="checkbox" name="sprite"> sprite <br>
            <input type="checkbox" name="pepsi"> pepsi <br>
            <input type="checkbox" name="espoca_bucho"> espoca bucho <br>
        </fieldset>
         <input type="submit" value="fazer pedido">
    </form>  
</body>
</html>