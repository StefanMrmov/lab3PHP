<?php
$db= new SQLite3(__DIR__.'/database/products_db');

$createTableQuery = <<<SQL
CREATE TABLE IF NOT EXISTS products (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    description TEXT UNIQUE NOT NULL,
    price REAL NOT NULL
);
SQL;

$result = $db->query($createTableQuery);
if($db->exec($createTableQuery)){
    echo "created";
}else{
    echo "not created" . $db->lastErrorMsg();
}

$db->close();
?>


