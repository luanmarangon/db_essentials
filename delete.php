<?php
require 'conexao.php';


// $delete = $connect->prepare('DELETE FROM Estados WHERE id_estado  = 10 ');
// $delete->execute();

try {
    for ($i = 1; $i <= 500; $i++) {
        for ($j = 0; $j < 500; $j++) {
            $delete = $connect->prepare('DELETE FROM Cidades WHERE id_cidade = ' . $j . '');
            $delete->execute();
        }
        $delete = $connect->prepare('DELETE FROM Estados WHERE id_estado = ' . $i . '');
        $delete->execute();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
