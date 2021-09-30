<?php

$verificDb = file_exists('database/crudphp.db');

if(!$verificDb):
    $db =  new PDO('sqlite:database/crudphp.db');
    $db->exec("CREATE TABLE cliente (
        id INTEGER PRIMARY KEY ,
        nome VARCHAR (255) NOT NULL,
        email varchar (255) not null,
        sobrenome varchar (255) not null,
        idade int (3) not null);
        ");
endif;

// $db = new SQLite3('mydb.sq3');
// $sql = "CREATE TABLE cliente (
//          id INT PRIMARY KEY NOT NULL,
//          nome VARCHAR (255) NOT NULL,
//          email varchar (255) not null,
//          sobrenome varchar (255) not null,
//          idade int (3) not null);";
// $db->query($sql);
// while ($row = $result->fetchArray(SQLITE3_ASSOC)){
//   echo $row['name'] . ': $' . $row['price'] . '<br/>';
// }
// unset($db);
