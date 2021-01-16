<html>

<head>
    <title>Training management</title>
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_forms.css">

</head>

<body>
    <?php
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
        <div class="flex-item-left">
            <form action="analytics.php" method="POST" class="form">
                <input type="text" name="trainingNames" placeholder="Training Names">
                <input type="text" name="trainersNames" placeholder="Trainers Names">

                <input type="submit" value="Search" />
            </form>
        </div>
        <div class="flex-item-right">
            <?php
            //include 'utils/table.php';
            require 'utils/filter.php';

            ?>
        </div>

    </div>
</body>

</html>