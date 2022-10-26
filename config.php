<?Php

    $dbHost = '10.5.4.55';
    $dbUsername = 'felipe-cintra';
    $dbpassword = 'Tempo@1201';
    $dbName = 'inventario';

    $conexao = new mariadbi($dbHost, $dbUsername, $dbpassword, $dbName);

    if($conexao->connect_errno)
    {
        echo "Erro"
    }
    else
    {
        echo "Conexão efetuada com sucesso";
    }
?>