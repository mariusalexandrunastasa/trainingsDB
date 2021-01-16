<html>

<head>
    <title>Training management</title>
    <link rel="stylesheet" href="style.css">

</head>
<?php
$id = $_GET['Id'];
require 'db/db.php';
if (is_numeric($id)) {
    $training = getTraining($id);
}
$departments = getDepartments();
$locations = getLocations();
?>

<form action="db/create_update.php" method="POST">
    <input hidden name="trainingId" value=<?php echo '"' . $training['Id'] . '"' ?>>
    <label>Training name</label>
    <input type="text" name="trainingName" id="trainingName" placeholder="Training name" value=<?php echo '"' . $training['TrainingName'] . '"' ?>>
    <div class="flex-item">
        <label>Start Date</label>
        <input type="datetime-local" name="startDate" id="startDate" value=<?php echo (new DateTime($training['StartDate']))->format('Y-m-d\TH:i') ?>>
    </div>
    <div class="flex-item">
        <label>End Date</label>
        <input type="datetime-local" name="endDate" id="EndDate" value=<?php echo (new DateTime($training['EndDate']))->format('Y-m-d\TH:i') ?>>
    </div>
    <label>Invite Url</label>
    <input type="text" id="InviteUrl" name="inviteUrl" placeholder="Invite Url" value=<?php echo '"' . $training['InviteUrl'] . '"' ?>>

    <label>Cost</label>
    <input type="text" id="Cost" name="cost" placeholder="Cost" value=<?php echo $training['Cost'] ?>>
    <label>Departament</label>
    <select name="departament">
        <?php
        foreach ($departments as $item) {
            $selectedDepartment = $item['Name'] == $training['Departament'] ? 'selected' : '';
            echo '<option value="' . $item['Id'] . '"' . $selectedDepartment . '>' . $item['Name'] . '</option>';
        }
        ?>
    </select>

    <label>TrainerName</label>
    <input type="text" id="TrainerName" name="trainerName" placeholder="TrainerName" value=<?php echo '"' . $training['TrainerName'] . '"' ?>>

    <label>Location</label>
    <select name="location">
        <?php
        foreach ($locations as $item) {
            $selectedLocation = $item['Name'] == $training['Location'] ? 'selected' : '';
            echo '<option value="' . $item['Id'] . '"' . $selectedLocation . '>' . $item['Name'] . '</option>';
        }
        ?>
    </select>

    <input type="submit" value="Submit">
</form>
</body>

</html>