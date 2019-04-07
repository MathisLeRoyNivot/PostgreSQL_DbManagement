<?php

require '../login.inc.php';

$userSession = $_SESSION['username'];

$userInfo = "SELECT rolsuper FROM pg_roles WHERE rolname = '$userSession';";
$queryUserInfo = $conn->prepare($userInfo);
$queryUserInfo->execute();
$result = $queryUserInfo->fetch();

$userDataInfo = $result[0];
echo $userDataInfo;