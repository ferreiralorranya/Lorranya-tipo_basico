<?php

function conexao()
{
    $pdo = new PDO("mysql:host=localhost, dbname=books", "root", "");
    return $pdo;
}

function getData($table)
{
    $conexao = conexao();
    $query = $conexao->query("select * from {$table}");
    $query->execute();
    return $query->fetchAll();
}

var_dump(getData("usuarios"));