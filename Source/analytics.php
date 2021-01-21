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
    require 'utils/users.php';
    checkIfUserIsLoggedIn();
    ?>

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
    <div class="flex">
        <p class="head">All trainings and participants</p>
        <button class="button" onclick="toggleFilter()">Filter</button>
        <form action="utils/download.php" method="POST" class="form">
            <input type="hidden" name="trainingNames">
            <input type="submit" value="Download" />
        </form>
    </div>
    <div class="flex">

        <div class="flex-item-left" id="filter-form">
            <form action="analytics.php" method="POST" class="form">
                <input type="text" name="trainingNames" placeholder="Training Names( splitted by ,)">
                <input type="text" name="trainersNames" placeholder="Trainers Names( splitted by ,)">
                <input type="text" name="traineeNames" placeholder="Trainee Names ( splitted by ,)">

                <input type="submit" value="Search" />
            </form>
        </div>
        <div class="flex-item-right" id="display-table">

            <?php
            require 'utils/filter.php';

            ?>
        </div>

    </div>
    <script type="text/javascript" src="utils/scripts/toggle.js"></script>

</body>

</html>