<?php
if(isset($_POST['submit'])){

    include_once('config.php');

 $nome = $_POST['nome'];
 $data_nascimento = $_POST['data_nascimento'];
 $E_mail = $_POST['E_mail'];
 $telefone = $_POST['telefone'];
 $Senha = $_POST['Senha'];
 

 $result = mysqli_query($conn,"INSERT INTO cliente(nome,data_nascimento,E_mail,telefone,Senha) 
 VALUES ('$nome','$data_nascimento','$E_mail','$telefone','$Senha')");
}
 ?> <!-- Meio para efetuar a conexão -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>

<body>

        <form action="Clientes.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                    <label for="data_nascimento" class="labelInput">Data de Nascimento</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="E_mail" id="E_mail" class="inputUser" required>
                    <label for="E_mail" class="labelInput">E-mail</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="Senha" id="Senha" class="inputUser" required>
                    <label for="Senha" class="labelInput">Senha</label>
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