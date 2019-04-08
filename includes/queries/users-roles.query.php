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


$userInsert = "SELECT is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'insert' & grantee = '$userSession';";
$userSelect = "SELECT is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'select' & grantee = '$userSession';";
$userUpdate = "SELECT is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'update' & grantee = '$userSession';";
$userDelete = "SELECT is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'delete' & grantee = '$userSession';";
$userTruncate = "SELECT is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'truncate' & grantee = '$userSession';";
$userReference = "SELECT is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'reference' & grantee = '$userSession';";
$userTrigger = "SELECT is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'trigger' & grantee = '$userSession';";