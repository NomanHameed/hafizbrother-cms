<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="add-product.php" class="nav-link">Add Products</a>
            </li>
            <li class="nav-item">
                <a href="change-password.php" class="nav-link">Change Password</a>
            </li>
            <li class="nav-item">
                <a href="logout.php" class="nav-link">Logout</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link"><?php echo $_SESSION['login_user']; ?></a>
            </li>
        </ul>
    </div>
</nav>
<br>
