<?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recupera os dados do formulário
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        // Conexão com o banco de dados (substitua as informações conforme necessário)
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "TestePHP";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Insere os dados na tabela
        $sql = "INSERT INTO contato (nome, telefone, email) VALUES ('$nome', '$telefone', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "Dados inseridos com sucesso!";
            echo "<br>";
            echo "<a href='teste.php'>Enviar novo formulário</a>";
        } else {
            echo "Erro ao inserir os dados: " . $conn->error;
        }

        // Fecha a conexão
        $conn->close();
    }
    ?>