<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho PRW 2° Bimestre</title>
    <link rel="stylesheet" href="../style/style_header.css">
</head>
<body>
    <header>
        <div id="title">
            <h1 class="title-h1">Consulta</h1>
            <h1>Caixa</h1>
        </div>
            <ul>
            <a href="../index.html" id="inscreva-se-btn"><li>Home</li></a>
            <a href="Listar1.php" id="inscreva-se-btn"><li>Tabela de Caixa</li></a>
            <a href="Cadastro1.html" id="inscreva-se-btn"><li>Cadastro de Caixa</li></a>
            </ul>
    </header>
            <main>
        <aside class="form-flex">
        <div class="form-container">
            <p class="title">Consulta de Fluxo de Caixa</p>
            <form class="form" action="ConsultaEXE.php" method="post">
                <div class="input-group">
                    <label for="nome">Tipo de consulta:</label>
                    <input type="radio" name="tipo" id="tipo" value="saldo">
                    <label for="nome">Saldo Total</label>
                    <input type="radio" name="tipo" id="tipo" value="saida">
                    <label for="nome">Total Saída</label>
                    <input type="radio" name="tipo" id="tipo" value="entrada">
                    <label for="nome">Total Entrada</label>
                </div>
                <input class="sign" type="submit" value="Enviar">
            </form>
        </div>
    </aside>
</body>
</html>