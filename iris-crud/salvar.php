<?php
    //incluir arquivo de conexão
    include('database.php');

    $PDO = connect();

//parametros que serão passados atraves de de requisição GET
    //variavel que armazenará o sinal dos sensores
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $valor3 = $_GET['valor3'];
    $sql = "INSERT INTO valores (valor1,valor2,valor3, tempo) VALUES (:valor1,:valor2,:valor3, NOW())";//query slq de conexão

    //procedimento de preparação dos dados para inserção evitando qualquer tipo de ataque
    //stmt (statement) serve para preparar os dados para inserção
    $stmt = $PDO->prepare($sql);
    //estabelece de ondem virão os valores de :sensor1 e :sensor2
    $stmt->bindParam(':valor1',$valor1);
    $stmt->bindParam(':valor2',$valor2);
    $stmt->bindParam(':valor3',$valor3);

    if($stmt->execute()){
        echo "Dados_Salvos_Com_Sucesso";
    } else {
        echo "ERRO: Dados_Não_Foram_Salvos";
    }
?>