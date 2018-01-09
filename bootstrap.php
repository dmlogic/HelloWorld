<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_GB');

$vars = new StdClass;
$vars->phpversion = phpversion();
$vars->fakename   = $faker->name;

$pdo = new PDO('mysql:host=localhost;dbname=persist', 'root', 'password');
$statement = $pdo->query("SELECT value FROM settings WHERE id=1");
$row = $statement->fetch(PDO::FETCH_ASSOC);

$vars->dbvalue    = $row['value'];
