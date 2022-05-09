<?php
// Initialize Session
if (session_status() === PHP_SESSION_NONE) session_start();

// Check if user is logged in
if (isset($_SESSION['user'])) {
    header('Location:index.php');
    die;
}

// Handle form submission  // Check for valid login
 if (isset($_POST['username'])) {
   
    // Import dependencies
    require 'src/DatabaseService.php';
    require 'src/User.php';


    // Initialize Database Service
    $dbService = new DatabaseService('localhost', 'root', '', 'perv_db', 3306);
    $user = $dbService->authenticate($_POST['username'], $_POST['password']);


     if ($user!== null) {
        // Set session and redirect
     //    NOTE: Use $_SESSION['user']
         $_SESSION['user'] = ['first_name' => $user->first_name,
                                'last_name' => $user ->last_name,
                                'email_ddress' => $user->email_address,
                            ];

    header('Location:index.php');
    die;
     } else {
       header('Location:login.php');
       die;
            }

}

// Compose UI
$page = 'Login';
require 'views/components/head.php';
require 'views/components/navbar.php';
require 'views/pages/login.php';
require 'views/components/footer.php';
require 'views/components/foot.php';
