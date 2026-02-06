<?php
$host='localhost';
$db ='home_style_db';
$user='root';
$pass'';
$charset='utf8mb4';
  

$dsn="mysql:host=$host;dbname=$db;charset=$charset";

$options=[
    PDO::ATTR_ERRMODE =>
    PDO::ATTR_ERRMODE_EXCEPTION,
    //ERROR CORRECTION

    PDO::ATTR_DEFAULT_FETCH_MODE=>
    PDO::FETCH_ASSOC,
    //RETURNS DATA IN ARRAY FORM

    PDO::ATTR_EMULATE_PREPARES=>
    false,
];


try{
    //to start a connection
    $pdo=new PDO($dsn, $user, $pass. $options);

}
catch(\PDOException $e)
{
    die("Database connection failed:".
    $e->getMessage();)
}
?>