<?php

require_once 'config.inc.php';

$conn = mysqli_connect(
    "{$DEFAULT_DB_CONFIG['db_host']}:{$DEFAULT_DB_CONFIG['db_port']}",
    $DEFAULT_DB_CONFIG['db_user'],
    $DEFAULT_DB_CONFIG['db_pass'],
    $DEFAULT_DB_CONFIG['db_name']
);

if (!$conn) {
    echo "Not Connected!";
} else {
    echo "Connected";
}
