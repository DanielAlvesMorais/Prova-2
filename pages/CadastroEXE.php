<?php
        include('../Includes/include.php');
        $data = $_POST['data'];
        $tipo = $_POST['tipo'];
        $valor = $_POST['valor'];
        $historico = $_POST['historico'];
        $cheque = $_POST['cheque'];

        echo "<h1>Dados do Caixa</h1>";

        $sql = "INSERT INTO fluxo_caixa (data, tipo, valor, historico, cheque)";
        $sql .= " VALUES('".$data."','".$tipo."','".$valor."','".$historico."','".$cheque."')";
        echo $sql;

        $result = mysqli_query($con,$sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso!!</h2>";
        }else{
            echo "<h2>Erro ao cadastrar!</h2>";
            echo mysqli_error($con);
        }
    ?>