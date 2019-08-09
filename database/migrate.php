<?php

require_once __DIR__ . "/../includes/conn.inc.php";

$migrationFiles = array_filter(
    scandir('database/migrations'),
    function($value) {
        return ($value !== ".." && $value !== ".");
    }
);

function migrate($conn, string $file) {
    if (substr($file, strlen($file) - 4) !== ".sql") {
        echo "Only .sql files can be migrated!" . PHP_EOL;
        return;
    }

    $sql = file_get_contents($file);
    $tmpArray = explode(DIRECTORY_SEPARATOR, $file);
    $fileName = $tmpArray[count($tmpArray) -1];

    if(mysqli_query($conn, $sql)) {
        echo  "{$fileName}: Migrated!" . PHP_EOL;
    } else {
        echo "{$fileName}: " . mysqli_error($conn) . PHP_EOL;
    }
}

foreach($migrationFiles as $migrationFile) {
    migrate($conn, __DIR__ . "/migrations/" . $migrationFile);
}

echo "Done!" . PHP_EOL;