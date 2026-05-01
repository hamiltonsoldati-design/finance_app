<?php

//Conexão com o banco de dados

$dbServer = getenv("DB_SERVER") ?: '127.0.0.1';
$dbUser = getenv("DB_USER") ?: 'sa';
$dbPassword = getenv("DB_PASSWORD") ?: '1234';
$dbName = getenv("DB_NAME") ?: 'bdcontta';

$connectionString = "host=$dbServer dbname=$dbName user=$dbUser password=$dbPassword";
$bdConexao = pg_connect($connectionString);

if (!$bdConexao) {
    // Em produção, você pode querer logar o erro em vez de exibi-lo com die()
    die("Erro na conexão com o banco de dados: " . pg_last_error());
}
