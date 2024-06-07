<?php
if(isset($_POST['submit'])){

    include_once('config.php');

 $Modelo = $_POST['Modelo'];
 $Ano = $_POST['Ano'];
 $cambio = $_POST['cambio'];
 $Combustivel = $_POST['Combustivel'];
 $Cor = $_POST['Cor'];

 $result = mysqli_query($conn,"INSERT INTO Carros(Modelo,Ano,cambio,Combustivel, Cor) 
 VALUES ('$Modelo','$Ano','$cambio','$Combustivel','$Cor')");
}
 ?> <!-- Meio para efetuar a conexão -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>

<body>

        <form action="carros.php" method="POST">
            <fieldset>
                <legend><b>Cadastro de Veiculos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="Modelo" id="Modelo" class="inputUser" required>
                    <label for="Modelo" class="labelInput">Modelo do Veiculo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="Ano" id="Ano" class="inputUser" required>
                    <label for="Ano" class="labelInput">Ano do veiculo</label>
                <br><br>
                <p>Câmbio</p>
                <input type="radio" id="cambio" name="cambio" value="cambio" required>
                <label for="feminino">Manual</label>
                <br>
                <input type="radio" id="cambio" name="cambio" value="cambio" required>
                <label for="masculino">Automatico</label>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Combustivel" id="Combustivel" class="inputUser" required>
                    <label for="Combustivel" class="labelInput">Combustivel</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="Cor" id="Cor" class="inputUser" required>
                    <label for="Cor" class="labelInput">Cor</label>
                <br><br>
                <input type="submit" name="submit" id="submit">
                <a href="pagina1.php">
                <input type="button" value="Retornar a pagina inicial">
                </a>
            </fieldset>
        </form>
    </div>

</body>

</html>