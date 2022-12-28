<?php
require 'conexao.php';

// $update = $connect->prepare('UPDATE Estados SET estado = "Teste", sigla = "TE" where id_estado = 10 ');
// $update->execute();

try {
    for ($i = 1; $i <= 500; $i++) {
        $update = $connect->prepare('UPDATE Estados SET estado = "Teste", sigla = "TE" where id_estado = '.$i.' ');
        $update->execute();
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}