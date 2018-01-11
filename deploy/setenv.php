<?php
$manifest = json_decode( file_get_contents('/opt/elasticbeanstalk/deploy/manifest'),true);
$appVer = array_keys(current($manifest['RuntimeSources']))[0];
file_put_contents('/var/www/html/public_html/.env','APP_VER='.$appVer);