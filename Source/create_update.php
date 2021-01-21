<html>

<head>
    <title>Training management</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
</head>

<body>
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require 'db/db.php';
    require_once './utils/DTO/training.php';
    if (isset($_GET['Id']) && is_numeric($_GET['Id'])) {
        $training = getTraining($_GET['Id']);
    } else
        $training = Training::createEmpty();

    $departments = getDepartments();
    $locations = getLocations();
    ?>
    <div class="header">
        <a href="/index.php" class="logo">Training Management</a>
        <div class="header-right">
            <a class="<?= ($activePage == '/index.php' || $activePage == '/') ? 'active' : ''; ?>" href="/index.php">Home</a>
            <a class="<?= ($activePage == '/trainings.php') ? 'active' : ''; ?>" href="/trainings.php">Trainings</a>
            <a class="<?= ($activePage == '/analytics.php') ? 'active' : ''; ?>" href="/analytics.php">Analytics</a>
        </div>
    </div>
    <form action="db/create_update.php" method="POST">
        <input hidden name="TrainingId" value=<?php echo '"' . $training->Id . '"' ?>>
        <label>Training name</label>
        <input type="text" name="TrainingName" id="TrainingName" placeholder="Training name" value=<?php echo '"' . $training->TrainingName . '"' ?>>
        <div class="flex-item">
            <label>Start Date</label>
            <input type="datetime-local" name="StartDate" id="StartDate" value=<?php echo (new DateTime($training->StartDate))->format('Y-m-d\TH:i') ?>>
        </div>
        <div class="flex-item">
            <label>End Date</label>
            <input type="datetime-local" name="EndDate" id="EndDate" value=<?php echo (new DateTime($training->EndDate))->format('Y-m-d\TH:i') ?>>
        </div>
        <label>Invite Url</label>
        <input type="text" id="InviteUrl" name="InviteUrl" placeholder="Invite Url" value=<?php echo '"' . $training->InviteUrl . '"' ?>>

        <label>Cost</label>
        <input type="text" id="Cost" name="Cost" placeholder="Cost" value=<?php echo $training->Cost ?>>
        <label>Departament</label>
        <select name="Departament">
            <?php
            foreach ($departments as $item) {
                $selectedDepartment = $item->Name == $training->Department->Name ? 'selected' : '';
                echo '<option value="' . $item->Id . '"' . $selectedDepartment . '>' . $item->Name . '</option>';
            }
            ?>
        </select>

        <label>TrainerName</label>
        <input type="text" id="TrainerName" name="TrainerName" placeholder="TrainerName" value=<?php echo '"' . $training->Trainer->Name . '"' ?>>
        <label>Participants</label>
        <textarea type="text" id="Participants" name="Participants" placeholder="Participants splitted by ," value='' rows="5"></textarea>
        <label>Location</label>
        <select name="Location">
            <?php
            foreach ($locations as $item) {
                $selectedLocation = $item->Name == $training->Location->Name ? 'selected' : '';
                echo '<option value="' . $item->Id . '"' . $selectedLocation . '>' . $item->Name . '</option>';
            }
            ?>
        </select>

        <input type="submit" value="Submit">
    </form>
</body>

</html>