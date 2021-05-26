<?php
// Initialize Session
if (session_status() === PHP_SESSION_NONE) session_start();

// Check if user is logged in


if (!isset($_SESSION['user'])) {
    header('Location:index.php');
    die;
}

// Handle form submission
if (isset($_POST['firstName'])) {
    // Import dependencies
    require 'src/DatabaseService.php';
    require 'src/SexOffender.php';

    // Initialize Database Service
    $dbService = new DatabaseService('localhost', 'root', '', 'perv_db', 3306);

    // Insert Sex Offender
    $dbService->InsertSexOffender(new SexOffender(
        0,
        $_POST['national_id'],
        $_POST['firstName'],
        $_POST['lastName'],
        new DateTimeImmutable($_POST['dateOfBirth']),
        $_POST['gender'],
        $_POST['occupation'],
        $_POST['sexualOffenceCommitted'],
        $_POST['yearIn'],
       empty($_POST['yearOut']) ?null:
        $_POST['yearOut']
    ));

    // Redirect to list
    header('Location:index.php');
}

// Compose UI
$page = 'Register';
require 'views/components/head.php';
require 'views/components/navbar.php';
require 'views/pages/register.php';
require 'views/components/footer.php';
require 'views/components/foot.php';
