<?php


require_once 'C:\wamp64\www\PostgreSQL_TP\includes\login.inc.php';

$userSession = $_SESSION['username'];

// QUERIES
$userInsert = "SELECT grantee, table_schema, table_name, privilege_type, is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'INSERT' AND grantee = '$userSession' AND table_schema != 'pg_catalog' AND table_schema != 'information_schema';";
$queryUserInsert = $conn->prepare($userInsert);
$queryUserInsert->execute();
$resultInsert = $queryUserInsert->fetch();
$userCanInsert = $resultInsert[4];

$userSelect = "SELECT grantee, table_schema, table_name, privilege_type, is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'SELECT' AND grantee = '$userSession' AND table_schema != 'pg_catalog' AND table_schema != 'information_schema';";
$queryUserSelect = $conn->prepare($userSelect);
$queryUserSelect->execute();
$resultSelect = $queryUserSelect->fetch();
$userCanSelect = $resultSelect[4];

$userUpdate = "SELECT grantee, table_schema, table_name, privilege_type, is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'UPDATE' AND grantee = '$userSession' AND table_schema != 'pg_catalog' AND table_schema != 'information_schema';";
$queryUserUpdate = $conn->prepare($userUpdate);
$queryUserUpdate->execute();
$resultUpdate = $queryUserUpdate->fetch();
$userCanUpdate = $resultUpdate[4];

$userDelete = "SELECT grantee, table_schema, table_name, privilege_type, is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'DELETE' AND grantee = '$userSession' AND table_schema != 'pg_catalog' AND table_schema != 'information_schema';";
$queryUserDelete = $conn->prepare($userDelete);
$queryUserDelete->execute();
$resultDelete = $queryUserDelete->fetch();
$userCanDelete = $resultDelete[4];

$userTruncate = "SELECT grantee, table_schema, table_name, privilege_type, is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'TRUNCATE' AND grantee = '$userSession' AND table_schema != 'pg_catalog' AND table_schema != 'information_schema';";
$queryUserTruncate = $conn->prepare($userTruncate);
$queryUserTruncate->execute();
$resultTruncate = $queryUserTruncate->fetch();
$userCanTruncate = $resultTruncate[4];

// $userReference = "SELECT grantee, table_schema, table_name, privilege_type, is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'REFERENCE' AND grantee = '$userSession' AND table_schema != 'pg_catalog' AND table_schema != 'information_schema';";
// $queryUserReference = $conn->prepare($userReference);
// $queryUserReference->execute();
// $resultReference = $queryUserReference->fetch();
// $userCanReference = $resultReference[4];

$userTrigger = "SELECT grantee, table_schema, table_name, privilege_type, is_grantable FROM information_schema.role_table_grants WHERE privilege_type = 'TRIGGER' AND grantee = '$userSession' AND table_schema != 'pg_catalog' AND table_schema != 'information_schema';";
$queryUserTrigger = $conn->prepare($userTrigger);
$queryUserTrigger->execute();
$resultTrigger = $queryUserTrigger->fetch();
$userCanTrigger = $resultTrigger[4];