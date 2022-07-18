<?php

$db_name = 'nbnfmepo_implantador';
$db_host = 'localhost';
$db_user = 'nbnfmepo_implantador';
$db_password = '12345';

$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);
