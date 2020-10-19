<?php
include_once('User.php');
include_once('Admin.php');
$admin= new Admin(7,'nfyu7u@gmail.com',12346,bhfgywu,'user 112');
echo $admin->getInfor();