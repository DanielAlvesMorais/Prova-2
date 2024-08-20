<?php
    include('../Includes/include.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM fluxo_caixa WHERE id = $id";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
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
            <h1 class="title-h1">Altera</h1>
            <h1>Caixa</h1>
        </div>
            <ul>
            <a href="../index.html" id="inscreva-se-btn"><li>Home</li></a>
            <a href="Listar1.php" id="inscreva-se-btn"><li>Tabela de Caixa</li></a>
            <a href="Consulta.php" id="inscreva-se-btn"><li>Consulta de Caixa</li></a>
            </ul>
    </header>
    <main>
        <aside class="form-flex">
        <div class="form-container">
            <p class="title">Alteração de Fluxo de Caixa</p>
            <form class="form" action="AlteraEXE.php" method="post">
                <div class="input-group">
                    <label for="data">Data:</label>
                    <input type="date" name="data" id="data" value="<?php echo $row['data'] ?>">
                </div>
                <div class="input-group">
                    <label for="nome">Tipo:</label>
                    <input type="radio" name="tipo" id="tipo" value="Entrada">
                    <label for="nome">Entrada</label>
                    <input type="radio" name="tipo" id="tipo" value="Saida">
                    <label for="nome">Saída</label>
                </div>
                <div class="input-group">
                    <label for="nome">Valor:</label>
                    <input type="text" name="valor" id="valor" value="<?php echo $row['valor'] ?>">
                </div>
                <div class="input-group">
                    <label for="nome">Histórico:</label>
                    <input type="text" name="historico" id="historico" value="<?php echo $row['historico'] ?>">
                </div>
                <div class="input-group">
                    <label for="nome">Cheque:</label>
                    <select name="cheque" id="cheque">
                        <option value="Sim" <?php echo $row['cheque'] == "Sim" ? "selected" : ""?>>Sim</option>
                        <option value="Não" <?php echo $row['cheque'] == "Não" ? "selected" : ""?>>Não</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <input class="sign" type="submit" value="Enviar">
            </form>
        </div>
    </aside>
</main>
</body>
</html>