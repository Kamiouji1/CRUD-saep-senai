<?php
require_once("config.php");

function conexao() {
    $conn = new mysqli (HOSTNAME, USERNAME, PASSWORD, DATABASE);
    return $conn;
}