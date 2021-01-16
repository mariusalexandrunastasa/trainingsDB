<?php
require_once 'db.php';
function displayTrainings($trainings)
{
    echo '<div style="text-align: center;">Total Trainings: ' . count($trainings) . '</div>';
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
