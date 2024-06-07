<?php
if(isset($_POST['submit'])){

    include_once('config.php');

 $nome_completo = $_POST['nome_completo'];
 $CPF = $_POST['CPF'];
 $data_de_nascimento = $_POST['data_de_nascimento'];
 $telefone = $_POST['telefone'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];

 $result = mysqli_query($conn,"INSERT INTO funcionario(nome_completo,CPF,data_de_nascimento,telefone,email,senha) 
 VALUES ('$nome_completo','$CPF','$data_de_nascimento','$telefone','$email','$senha')");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Inicial</title>
</head>
<body>

        <form action="funcionario.php" method="POST">
            <fieldset>
                <legend><b>Funcionario</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome_completo" id="nome_completo" class="inputUser" required>
                    <label for="nome_completo" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="CPF" id="CPF" class="inputUser" required>
                    <label for="CPF" class="labelInput">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="date" name="data_de_nascimento" id="data_de_nascimento" class="inputUser" required>
                    <label for="data_de_nascimento" class="labelInput">Data de Nascimento</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">E-mail</label>
                </div>
           
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
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