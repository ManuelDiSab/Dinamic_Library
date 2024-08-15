<?php
/**
 * definisco le variabili per la connessione al database
 */
$indirizzo = "localhost";
$db = "foto";
$utente = "root";
$password = "";
/**
 * CONNESSIONE A MySQL ATTRAVERSO LE MySQLi
 */

$mysqli = new mysqli($indirizzo, $utente, $password, $db);
if ($mysqli->connect_error) {
    die('errore di connessione (' . $mysqli->connect_errno . ')' . $mysqli->connect_error);
} else {
    //echo 'connesso con le MySQLi a' . $mysqli->host_info . '<br>';
}