<?php
    //incluir arquivo de conexão
    include('database.php');

    $PDO = connect();

//parametros que serão passados atraves de de requisição GET
    //variavel que armazenará o sinal dos sensores
    $temperatura = $_GET['temperatura'];
    $umidade = $_GET['umidade'];
    $reservatorio = $_GET['reservatorio'];
    $sql = "INSERT INTO valores (temperatura,umidade,reservatorio, tempo) VALUES (:temperatura,:umidade,:reservatorio, NOW())";//query slq de conexão

    //procedimento de preparação dos dados para inserção evitando qualquer tipo de ataque
    //stmt (statement) serve para preparar os dados para inserção
    $stmt = $PDO->prepare($sql);
    //estabelece de ondem virão os valores de :sensor1 e :sensor2
    $stmt->bindParam(':temperatura',$temperatura);
    $stmt->bindParam(':umidade',$umidade);
    $stmt->bindParam(':reservatorio',$reservatorio);

    if($stmt->execute()){
        echo "Dados_Salvos_Com_Sucesso";
    } else {
        echo "ERRO: Dados_Não_Foram_Salvos";
    }
?>