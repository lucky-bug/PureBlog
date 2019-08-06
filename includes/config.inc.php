<?php

$APP_CONFIG = parse_ini_file(__DIR__ . '/../config/app.ini', true);
$DB_CONFIG = parse_ini_file(__DIR__ . '/../config/database.ini', true);
$DEFAULT_DB_CONFIG = $DB_CONFIG[$DB_CONFIG['global']['default']];
