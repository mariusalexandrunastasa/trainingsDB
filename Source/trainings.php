<html>

<head>
    <title>Training management</title>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_forms.css">

</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once 'utils/users.php';
    checkIfUserIsLoggedIn();
    ?>
    <?php
    $activePage = $_SERVER['REQUEST_URI'];
    ?>
    <div class="header">
        <a href="/index.php" class="logo">Training Management</a>
        <div class="header-right">
            <a class="<?= ($activePage == '/index.php' || $activePage == '/') ? 'active' : ''; ?>"
                href="/index.php">Home</a>
            <a class="<?= ($activePage == '/trainings.php') ? 'active' : ''; ?>" href="/trainings.php">Trainings</a>
            <a class="<?= ($activePage == '/analytics.php') ? 'active' : ''; ?>" href="/analytics.php">Analytics</a>
        </div>
    </div>
    <div><a href="create_update.php" class="button" id="buttonAdd">Create new Training</a></div>

    <div class="content">
        <?php
        require_once 'db/db.php';
        require_once 'db/db_to_html.php';
        $trainings = getActiveTrainings();
        displayTrainings($trainings);
        ?>
    </div>
</body>

</html>