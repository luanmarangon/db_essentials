<?php
require 'conexao.php';


try {
    $read = $connect->prepare('SELECT * FROM Cidades, Estados');
    $read->setFetchMode(PDO::FETCH_ASSOC);
    $read->execute();

    $result = $read->fetchAll();
} catch (PDOException $e) {
    echo $e->getMessage();
}


// var_dump($result);
$count = $connect->prepare('SELECT count(id_cidade) total_cidades FROM Cidades');
$count->setFetchMode(PDO::FETCH_ASSOC);
$count->execute();
$resultCount = $count->fetchAll();

var_dump($resultCount);


foreach ($result as $cidade) {
    echo "Nome da Cidade: {$cidade['cidade']} - {$cidade['sigla']} <br>";

    echo "<hr>";
}
