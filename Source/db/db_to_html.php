<?php

require_once 'db.php';
function displayTrainingsTable()
{
    $trainings = getActiveTrainings();
    echo 'Total Trainings: ' . count($trainings);
    echo ' <table id="trainings">
<tr>
    <th>Id</th>
    <th>Training Name</th>
    <th>Start Date</th>    
    <th>End Date</th>
    <th>Invite Url</th>
    <th>Cost</th>
    <th>Departament</th>
    <th>Trainer</th>
    <th>Location</th>
    <th>Actions</th>

</tr>';
    for ($i = 0; $i < count($trainings); $i++) {
        echo '<tr>';
        echo '<td>' .  $trainings[$i]['Id'] . '</td>';
        echo '<td>' .  $trainings[$i]['TrainingName'] . '</td>';
        echo '<td>' .  $trainings[$i]['StartDate'] . '</td>';
        echo '<td>' .  $trainings[$i]['EndDate'] . '</td>';
        echo '<td>' .  $trainings[$i]['InviteUrl'] . '</td>';
        echo '<td>' .  $trainings[$i]['Cost'] . '</td>';
        echo '<td>' .  $trainings[$i]['Departament'] . '</td>';
        echo '<td>' .  $trainings[$i]['TrainerName'] . '</td>';
        echo '<td>' .  $trainings[$i]['Location'] . '</td>';
        echo '<td>' . '<a class="action-button" href=db/delete.php?Id=' . $trainings[$i]['Id'] . '>Delete</a>' .
            '<a class="action-button" href=create_update.php?Id=' . $trainings[$i]['Id']  . '>Edit</a>'
            . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
function displayTrainings($trainings)
{
    echo '<div>Total Trainings: ' . count($trainings) . '</div>';
    if (count($trainings) == 0) {
        echo "<br>Did not find any trainigs";
        return;
    }
    echo ' <table id="trainings">
<tr>
    <th>Id</th>
    <th>Training Name</th>
    <th>Start Date</th>    
    <th>End Date</th>
    <th>Invite Url</th>
    <th>Cost</th>
    <th>Departament</th>
    <th>Trainer</th>
    <th>Location</th>
    <th>Actions</th>

</tr>';
    foreach ($trainings as $training) {
        echo '<tr>';
        echo '<td>' .  $training['Id'] . '</td>';
        echo '<td>' .  $training['TrainingName'] . '</td>';
        echo '<td>' .  $training['StartDate'] . '</td>';
        echo '<td>' .  $training['EndDate'] . '</td>';
        echo '<td>' .  $training['InviteUrl'] . '</td>';
        echo '<td>' .  $training['Cost'] . '</td>';
        echo '<td>' .  $training['Departament'] . '</td>';
        echo '<td>' .  $training['TrainerName'] . '</td>';
        echo '<td>' .  $training['Location'] . '</td>';
        echo '<td>' . '<a class="action-button" href=db/delete.php?Id=' . $training['Id'] . '>Delete</a>' .
            '<a class="action-button" href=create_update.php?Id=' . $training['Id']  . '>Edit</a>'
            . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
