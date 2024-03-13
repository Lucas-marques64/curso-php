<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Delicias.com.ida</title>
</head>
<body>
    <form action="processando_pedido.php" method="post">
    <label>O que você deseja pedir:</label>
        <select name="cardapio">
            <option value="0">-- Selecione o seu pedido --</option>
            <option value="1">Bife à cavalo com batata fritas</option>
            <option value="2">Frango empanado com purê de batatas</option>
            <option value="3">Filé de peixe com molho de tomate</option>
            <option value="4">Açaí com camarão</option>
        </select>
    <input type="submit">
    </form>   
</body>
</html>