<html>

<head>
    <title>Training management</title>
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php
    $activePage = $_SERVER['REQUEST_URI'];
    ?>

    <div class="header">
        <a href="/index.php" class="logo">Training Management</a>
        <div class="header-right">
            <a class="<?= ($activePage == '/index.php' || $activePage == '/') ? 'active' : ''; ?>" href="/index.php">Home</a>
            <a class="<?= ($activePage == '/trainings.php') ? 'active' : ''; ?>" href="/trainings.php">Trainings</a>
            <a class="<?= ($activePage == '/analytics.php') ? 'active' : ''; ?>" href="/analytics.php">Analytics</a>
        </div>
    </div>


</body>

</html>