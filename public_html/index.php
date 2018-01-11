<?php
var_dump("v4");
require '../bootstrap.php';
?><!DOCTYPE html>
<html>
<head>
    <title>Test App</title>
</head>
<body>
<h1>Hello world!</h1>
<p>
    You're running PHP version <strong><?=$vars->phpversion?></strong>
</p>
<p>
    Your composer Faker install worked, and your random name is <strong><?=$vars->fakename?></strong>
</p>
<p>
    Your app version is <?=get_env('CACHEBUSTER')?>
</p>
<p>
    Your encryption key is <?=get_env('APP_ENCRYPTION_KEY')?>
</p>
</body>
</html>
<?php
phpinfo();