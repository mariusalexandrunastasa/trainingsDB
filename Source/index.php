<html>

<head>
    <title>Training management</title>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
    $activePage = $_SERVER['REQUEST_URI'];
    ?>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once 'utils/users.php';
    checkIfUserIsLoggedIn();
    ?>

    <div class="header">
        <a href="/index.php" class="logo">Training Management</a>
        <div class="header-right">
            <a class="<?= ($activePage == '/index.php' || $activePage == '/') ? 'active' : ''; ?>" href="/index.php">Home</a>
            <a class="<?= ($activePage == '/trainings.php') ? 'active' : ''; ?>" href="/trainings.php">Trainings</a>
            <a class="<?= ($activePage == '/analytics.php') ? 'active' : ''; ?>" href="/analytics.php">Analytics</a>
            <a href="/logout.php">Logout</a>
        </div>
    </div>

    <img src="utils/images/banner.jpg" alt="home image">
</body>

</html>