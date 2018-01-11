<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Formatter\LineFormatter;

require 'vendor/autoload.php';

$faker = Faker\Factory::create('en_GB');

$vars = new StdClass;
$vars->phpversion = phpversion();
$vars->fakename   = $faker->name;

$logger = new Logger('hello-world');
$handler = new StreamHandler('/efs/logs/app.log');
$handler->setFormatter(new LineFormatter("[%datetime%] %level_name%: %message% %context%\n",null, true, true));
$logger->pushHandler( $handler );

$logger->info('app.bootstrap',['fakename' => $vars->fakename]);