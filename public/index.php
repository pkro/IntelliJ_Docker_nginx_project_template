<?php
xdebug_info();
echo $_SERVER['SERVER_NAME'];
echo $_SERVER['PHP_IDE_CONFIG'];
$x=0;
for ($i = 0; $i <= 100; $i++) {
    $x += $i;
    echo $x;
}
phpinfo();