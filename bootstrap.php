<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_GB');

$vars = new StdClass;
$vars->phpversion = phpversion();
$vars->fakename   = $faker->name;

$pdo = new PDO(
                sprintf('mysql:host=%s;;port=%s;dbname=%s;charset=utf8',$_SERVER['RDS_HOSTNAME'],$_SERVER['RDS_PORT'],$_SERVER['RDS_DB_NAME']),
                $_SERVER['RDS_USERNAME'],
                $_SERVER['RDS_PASSWORD']
            );
$statement = $pdo->query("SELECT value FROM settings WHERE id=1");
$row = $statement->fetch(PDO::FETCH_ASSOC);

$vars->dbvalue    = $row['value'];
