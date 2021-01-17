<?php
$trainingId = $_POST['TrainingId'];
$trainingName = $_POST['TrainingName'];
$startDate = $_POST['StartDate'];
$endDate = $_POST['EndDate'];
$inviteUrl = $_POST['InviteUrl'];
$cost = $_POST['Cost'];
$departamentId = $_POST['Departament'];
$trainerName = $_POST['TrainerName'];
$locationId = $_POST['Location'];
require_once 'db.php';

if (!is_numeric($trainingId)) {
    $result = createTraining(
        $trainingName,
        $startDate,
        $endDate,
        $inviteUrl,
        $cost,
        $departamentId,
        $trainerName,
        $locationId
    );
    if ($result < 1)
        echo '<p style="color:red">' . $result . '</p>';
    else {
        header("Location: /trainings.php");
        die();
    }
} else {
    $result =  updateTraining(
        $trainingId,
        $trainingName,
        $startDate,
        $endDate,
        $inviteUrl,
        $cost,
        $departamentId,
        $trainerName,
        $locationId
    );
    if ($result != 1) {
        echo '<p style="color:red">' . $result . '</p>';
    } else {
        header("Location: /trainings.php");
        die();
    }
}

echo '<a href="/trainings.php">Go back!</a>';
