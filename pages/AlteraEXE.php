<?php
    include('../Includes/include.php');
    $id = $_POST['id'];
    $data = $_POST['data'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];
    $historico = $_POST['historico'];
    $cheque = $_POST['cheque'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cidade</title>
</head>
<body>
    <h1>Alteração de Cidade</h1>
    <?php
        $sql = "UPDATE fluxo_caixa SET data = '$data', tipo = '$tipo', valor = '$valor', historico = '$historico', cheque = '$cheque' WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result)
            echo "Dados Atualizados!";
        else
            echo "Erro ao atualizar dados!<br>".mysqli_error($con);
    ?>
</body>
</html>