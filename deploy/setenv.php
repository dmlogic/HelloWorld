<?php
$manifest = json_decode( file_get_contents('/opt/elasticbeanstalk/deploy/manifest'),true);
$appVersion=md5(array_keys(current($manifest['RuntimeSources']))[0]);
$str = <<<END
APP_PATH=/var/www/html/
MAIL_TRANSPORT=LOG
APP_ENVIRONMENT=production
CACHEBUSTER={$appVersion},
END;

file_put_contents('/var/www/html/public_html/.env',$str);