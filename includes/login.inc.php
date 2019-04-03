<?php

session_start();

require './../db/db-config.php';

if (isset($_POST['submit'])) {
    try {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
    } catch (PDOException $e) {
        echo 'Please login you back';
        die();
    }
}

if(empty($_SESSION)) {
  header("Location: ../../../../PostgreSQL_TP/views/login.php");
} else {
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
}
    

$dbInfo = "pgsql:host=$dbServer;port=$dbPort;dbname=$dbName;user=$username;password=$password";
// create a PostgreSQL database connection
$conn = new PDO($dbInfo);

// if(isset($_POST['submit'])) {
//     // $_SESSION['username'] = $_POST['username'];
//     // $_SESSION['password'] = $_POST['password'];
//     // $username = $_SESSION['username'];
//     // $password = $_SESSION['password'];
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     $dbInfo = "pgsql:host=$dbServer;port=$dbPort;dbname=$dbName;user=$username;password=$password"; 

//     // create a PostgreSQL database connection
//     $conn = new PDO($dbInfo);
//     try {
//         // display a message if connected to the PostgreSQL successfully
//         if($conn){
//             echo "<script>console.log('%c Connexion établie avec la base de données PostgreSQL', 'color: #bada55')</script>";
//             //header("Location: ./../../../PostgreSQL_TP/views/home.php");
//             echo "<script>console.log('Successfully connected.')</script>";

//             $tableList = "SELECT table_name FROM information_schema.tables WHERE table_schema = 'public';";
//             foreach ($conn->query($tableList) as $row) {
//                 print $row[0] . "\t";
//             }
//             // $result = pg_query($conn, $tableList);
//             // if (!$result) {
//             // echo "Une erreur s'est produite.\n";
//             // exit;
//             // }

//             // while ($row = pg_fetch_row($result)) {
//             // echo "$row[0]";
//             // echo "<br />\n";
//             // }


//         } elseif(!$con) {
//             echo "<script>Alert('Identifiants incorrects')</script>";
//             echo "<script>console.error('%c Impossible d'établir une connexion avec la base de données PostgreSQL', 'color: #bada55')</script>";
//         }
//     } catch (PDOException $e){
//         // report error message
//         echo $e->getMessage();
//     }
// } else {
//     echo '<script>console.error("Erreur")</script>';
// }