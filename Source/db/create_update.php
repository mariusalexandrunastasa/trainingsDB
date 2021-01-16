<?php
$trainingId = $_POST['trainingId'];
$trainingName = $_POST['trainingName'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$inviteUrl = $_POST['inviteUrl'];
$cost = $_POST['cost'];
$departamentId = $_POST['departament'];
$trainerName = $_POST['trainerName'];
$locationId = $_POST['location'];
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
