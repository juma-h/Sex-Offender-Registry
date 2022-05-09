<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">
    <a class="navbar-brand" href="">Sex Offender Registry</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto"> 
            
            <?php if (isset($_SESSION['user'])) : ?>
                <li class="nav-item"><a href="register.php" class="nav-link">Register a Perv</a></li>
        <?php endif ?>    
        </ul>

        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['user'])) : ?>
                <span class="navbar-text mr-2">Hello,<?="{$_SESSION['user']['first_name']}{$_SESSION['user']['last_name']}"?></span>
                <li class="nav-item ml-2"><a class="nav-link" href="logout.php">Log Out</a></li>
            <?php else : ?>
                <li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>