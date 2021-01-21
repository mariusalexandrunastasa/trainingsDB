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
$participants = $_POST['Participants'];
require_once 'db.php';

if (!is_numeric($trainingId) || $trainingId == 0) {
    $result = createTraining(
        $trainingName,
        $startDate,
        $endDate,
        $inviteUrl,
        $cost,
        $departamentId,
        $trainerName,
        $locationId,
        $participants
    );
    if (!$result)
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
        echo 'update ' . $trainingId;
        echo '<p style="color:red">' . $result . '</p>';
    } else {
        header("Location: /trainings.php");
        die();
    }
}

echo '<a href="/trainings.php">Go back!</a>';
