<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho PRW 2° Bimestre</title>
    <link rel="stylesheet" href="../style/style_header.css">
    <style>
        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
            background-color: #f2f2f2;
        }
        th, td{
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            color: black;
        }
        th {
            background-color: wheat;
        }
        table a
        {
            color: black;
        }
    </style>
</head>
<body>
    <header>
        <div id="title">
            <h1 class="title-h1">Tabela</h1>
            <h1>Caixa</h1>
        </div>
            <ul>
            <a href="../index.html" id="inscreva-se-btn"><li>Home</li></a>
            <a href="Cadastro1.html" id="inscreva-se-btn"><li>Cadastro de Caixa</li></a>
            <a href="Consulta.php" id="inscreva-se-btn"><li>Consulta de Caixa</li></a>
            </ul>

    </header>
    <br><br><br>
    <?php
        include('../Includes/include.php');

        // Consulta SQL
        $sql = "SELECT id, data, tipo, valor, historico, cheque
                FROM fluxo_caixa";

        // Executar a consulta
        $result = mysqli_query($con, $sql);

        // Verificar se a consulta foi bem-sucedida
        if (!$result) {
            die('Erro na consulta: ' . mysqli_error($con));
        }
    ?>
        <table>
            <tr>
                <th>Código</th>
                <th>Data</th>
                <th>Tipo</th>
                <th>Valor</th>
                <th>Histórico</th>
                <th>Cheque</th>
                <th>Atualizar</th>
                <th>Deletar</th>
            </tr>
            <?php
                // Exibir os dados da consulta
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['data']."</td>";
                    echo "<td>".$row['tipo']."</td>";
                    echo "<td>".$row['valor']."</td>";
                    echo "<td>".$row['historico']."</td>";
                    echo "<td>".$row['cheque']."</td>";
                    echo "<td><a href ='Altera.php?id=".$row['id']."'>Alterar</a></td>";
                    echo "<td><a href ='Delete.php?id=".$row['id']."'>Deletar</a></td>";
                    echo "</tr>";
                }
            ?>
</body>
</html>