<?php
require 'conexao.php';


for ($i = 1; $i <= 500; $i++) {
    $create = $connect->prepare('INSERT INTO Estados (estado, sigla) VALUES ("Estado_' . $i . '", "' . $i . '")');
    $create->execute();
    $lastInsertIdEstado = $connect->lastInsertId();
    // var_dump($create);
    // var_dump($lastInsertId);

    echo "Inserindo o Registro: {$lastInsertIdEstado}";
}

for ($j = 1; $j < 500; $j++) {
    $create = $connect->prepare('INSERT INTO Cidades (id_estado, cidade) VALUES (' . $j . ', "Cidade_' . $j . '")');
    $create->execute();
    $lastInsertIdCidade = $connect->lastInsertId();
    // var_dump($create);
    // var_dump($lastInsertId);

    echo "Inserindo o Registro: {$lastInsertIdCidade}";
}


// $create = $connect->prepare('INSERT INTO Estados (estado, sigla) VALUES ("Bahia", "BA")');
// $create->execute();
// $lastInsertId = $connect->lastInsertId();
// var_dump($create);
// var_dump($lastInsertId);
