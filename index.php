<?php
// Initialize Session
if (session_status() === PHP_SESSION_NONE) session_start();

// Import dependencies
require 'src/DatabaseService.php';
require 'src/SexOffender.php';

// Initialize Database Service
$dbService = new DatabaseService('localhost', 'root', '', 'perv_db', 3306);

// Fetch Data
$offenders = $dbService->FetchSexOffenders();



// Compose UI
$page = 'Home';
require 'views/components/head.php';
require 'views/components/navbar.php';
require 'views/pages/index.php';
require 'views/components/footer.php';
require 'views/components/foot.php';
