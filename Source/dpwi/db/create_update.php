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
require 'db.php';

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
    if ($result != 'Success')
        echo '<p style="color:red">' . $result . '</p>';
    else {
        header("Location: /trainings.php");
        die();
    }
} else {
    updateTraining(
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
}
echo '<a href="/create_update.php">Go back!</a>';
