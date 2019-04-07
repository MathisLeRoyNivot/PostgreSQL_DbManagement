<?php


require_once 'C:\wamp64\www\PostgreSQL_TP\includes\login.inc.php';

$userSession = $_SESSION['username'];

// QUERIES
$userSuper = "SELECT rolsuper FROM pg_roles WHERE rolname = '$userSession';";
$userByPass = "SELECT rolsuper FROM pg_roles WHERE rolname = '$userSession';";
$userCreateRole = "SELECT rolcreaterole FROM pg_roles WHERE rolname = '$userSession';";
$userCreateDb = "SELECT rolcreatedb FROM pg_roles WHERE rolname = '$userSession';";


// Check if user has 'Super User' role
$queryUserSuper = $conn->prepare($userSuper);
$queryUserSuper->execute();
$resultSuper = $queryUserSuper->fetch();
$userIsSuper = $resultSuper[0];

// Check if user has 'By Pass Role' role
$queryUserByPass = $conn->prepare($userByPass);
$queryUserByPass->execute();
$resultByPass = $queryUserByPass->fetch();
$userIsByPass = $resultByPass[0];

// Check if user has 'Create Role' role
$queryUserCreateR = $conn->prepare($userCreateRole);
$queryUserCreateR->execute();
$resultCreateR = $queryUserCreateR->fetch();
$userCanCreateR = $resultCreateR[0];

// Check if user has 'Create Db' role
$queryUserCreateD = $conn->prepare($userCreateRole);
$queryUserCreateD->execute();
$resultCreateD = $queryUserCreateD->fetch();
$userCanCreateD = $resultCreateD[0];