<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Contato</title>
</head>
<body>
    <h2>Formulário de Contato</h2>

    <form method="POST" action="processa_formulario.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" id="telefone" required><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
