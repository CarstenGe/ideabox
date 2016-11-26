<?php
define('DB_SERVER', 'localhost'); //fdb15.freehostingeu.com or sql303.byethost11.com
define('DB_USERNAME', 'root'); //2140083_users or b11_18795585
define('DB_PASSWORD', ''); //Ve6
define('DB_DATABASE', 'user_registration'); //2140083_users or b11_18795585_users
 
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>