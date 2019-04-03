<?php

session_start();
session_destroy();
header('Location: ../../../../PostgreSQL_TP/views/login.php');
exit;