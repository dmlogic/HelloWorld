<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_GB');

$vars = new StdClass;
$vars->phpversion = phpversion();
$vars->fakename   = $faker->name;