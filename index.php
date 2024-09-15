<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Formulário de Cadastro</h1>
    <form action="Pessoa.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br><br>

        <label for="cpf">CPF:</label>
        <input type="text" id="cpf" name="cpf" required><br><br>

        <label for="telefone">Telefone</label>
        <input type="text" id="telefone" name="telefone" required><br><br>

        <label for="tipo">Tipo:</label>
        <select id="tipo" name="tipo" required>
            <option value="Cliente">Cliente</option>
            <option value="Funcionario">Funcionário</option>
            <option value="Gerente">Gerente</option>
            <option value="Diretor">Diretor</option>
        </select><br><br>

        <div id="Cliente.php" style="display: none;">
            <label for="tipo">Tipo:</label>
            <input type="email" id="email" name="email"><br><br>

            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco"><br><br>
        </div>

        <div id="Funcionario.php" style="display: none;">
            <label for="cep">CEP:</label>
            <input type="number" id="cep" name="cep"><br><br>
            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo"><br><br>
            <label for="turno">Turno:</label>
            <input type="text" id="text" name="text"><br><br>
            <label for="registro">Registro:</label>
            <input type="text" id="registro" name="registro"><br><br>
            <label for="datanasc">Data de Nascimento:</label>
            <input type="number" id="datanasc" name="datanasc"><br><br>
            <label for="tipocontrato">Tipo de Contrato:</label>
            <input type="text" id="tipocontrato" name="tipocontrato"><br><br>
            <label for="salario">Salário:</label>
            <input type="number" id="salario" name="salario"><br><br>
        </div>

        <div id="Gerente.php" style="display: none;">
            <label for="setor">Setor:</label>
            <input type="text" id="setor" name="setor"><br><br>
        </div>

        <div id="Diretor.php" style="display: none;">
        </div>

        <button type="submit">Cadastrar</button>
    </form>

    <script>
        const Pessoa = document.getElementById('Pessoa.php');
        const Cliente = document.getElementById('Cliente.php');
        const Funcionario = document.getElementById('Funcionario.php');
        const Gerente = document.getElementById('Gerente.php');
        const Diretor = document.getElementById('Diretor.php');

        tipoSelect.addEventListener('change', function() {
            Pessoa.style.display = 'none';
            Cliente.style.display = 'none';
            Funcionario.style.display = 'none';
            Gerente.style.display = 'none';
            Diretor.style.display = 'none';

            switch (this.value) {
                case 'Pessoa':
                    Pessoa.style.display = 'block';
                case 'Cliente':
                    Pessoa.style.display = 'block';
                    Cliente.style.display = 'block';
                    break;
                case 'Funcionario':
                    Pessoa.style.display = 'block';
                    Funcionario.style.display = 'block';
                    break;
                case 'Gerente':
                    Funcionario.style.display = 'block';
                    Gerente.style.display = 'block';
                    break;
                case 'Diretor':
                    Funcionario.style.display = 'block';
                    Gerente.style.display = 'block';
                    Diretor.style.display = 'block';
                    break;
            }
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>