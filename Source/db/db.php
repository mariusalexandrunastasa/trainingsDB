<?php

function connect()
{
    $host = 'localhost';
    $user = 'root';
    $pass = 'masterrc';
    $db = 'trainingDB';

    $mysqli = new mysqli($host, $user, $pass, $db);
    if ($mysqli->connect_error) {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }
    return $mysqli;
}


function logIn($username, $password)
{
    $mysqli = connect();
    $result = $mysqli->query(
        'SELECT COUNT(*) AS UserCount FROM Users WHERE '
            . 'username=' . "'$username'"
            . ' AND '
            . 'password=' . "'$password'"
    );
    $row = $result->fetch_assoc();
    return $row['UserCount'];
}
function getActiveTrainings()
{
    $mysqli = connect();
    $result = $mysqli->query('SELECT 
    t.Id as Id,
    TrainingName as TrainingName,
    t.StartDate as StartDate,
    t.EndDate as EndDate,
    t.InviteUrl as InviteUrl,
    t.Cost as Cost,
    d.Name as Departament,
    tr.Name as TrainerName,
    l.Name as Location
    FROM Trainings as t
    INNER JOIN Locations as l on l.Id=t.LocationId
    INNER JOIN Departments as d on d.Id=t.DepartamentId
    INNER JOIN Trainers as tr on tr.Id=t.TrainerId
    WHERE t.IsDeleted=false
    ');
    $rows = [];
    foreach ($result as $row) {
        $rows[] = $row;
    }
    return $rows;
}

function getDepartments()
{
    $mysqli = connect();

    $result = $mysqli->query('SELECT 
    Id,Name
    FROM Departments
    ');
    $rows = [];
    foreach ($result as $row) {
        $rows[] = $row;
    }
    return $rows;
}

function getLocations()
{
    $mysqli = connect();
    $result = $mysqli->query('SELECT
    Id,Name
    From Locations
    ');
    $rows = [];
    foreach ($result as $row) {
        $rows[] = $row;
    }
    return $rows;
}

function deleteTraining($id)
{
    $mysqli = connect();
    $sql = "UPDATE Trainings SET IsDeleted=true  WHERE id=" . $id;
    $mysqli->query($sql);
    return $mysqli->affected_rows;
}
function getTraining($id)
{
    $mysqli = connect();
    $result = $mysqli->query('SELECT 
    t.Id as Id,
    TrainingName as TrainingName,
    t.StartDate as StartDate,
    t.EndDate as EndDate,
    t.InviteUrl as InviteUrl,
    t.Cost as Cost,
    d.Name as Departament,
    tr.Name as TrainerName,
    l.Name as Location
    FROM Trainings as t
    INNER JOIN Locations as l on l.Id=t.LocationId
    INNER JOIN Departments as d on d.Id=t.DepartamentId
    INNER JOIN Trainers as tr on tr.Id=t.TrainerId
    WHERE t.Id=' . $id);
    return $result->fetch_assoc();
}

function departmentExists($departamentId)
{
    $mysqli = connect();
    $result = $mysqli->query('SELECT
    Id
    From Departments
    WHERE Id=' . $departamentId . '
    ');
    return $result->num_rows == 1;
}
function locationExists($locationId)
{
    $mysqli = connect();
    $result = $mysqli->query('SELECT
    Id
    From Locations
    WHERE Id=' . $locationId . '
    ');
    return $result->num_rows == 1;
}

function getTrainerId($trainerName)
{
    $mysqli = connect();
    $result = $mysqli->query('SELECT
    *
    From Trainers
    WHERE Name="' . $trainerName . '"
    ');
    return $result->num_rows >= 1 ? $result->fetch_assoc()['Id'] : -1;
}

function createTrainer($trainerName)
{
    $mysqli = connect();
    $mysqli->query('INSERT INTO Trainers(Name) VALUES ("' . $trainerName . '")');
    return $mysqli->insert_id;
}
function createTraining($trainingName, $startDate, $endDate, $inviteUrl, $cost, $departamentId, $trainerName, $locationId)
{
    $validationResult = validateTraining($trainingName, $startDate, $endDate, $inviteUrl, $cost, $departamentId, $trainerName, $locationId);

    if ($validationResult != VALIDATION_OK)
        return $validationResult;

    $trainerId = getTrainerId($trainerName);

    if ($trainerId == -1) {
        $trainerId =  createTrainer($trainerName);
    }

    return 'Success';
}
function updateTraining($trainingId, $trainingName, $startDate, $endDate, $inviteUrl, $cost, $departamentId, $trainerName, $locationId)
{
    $validationResult = validateTraining($trainingName, $startDate, $endDate, $inviteUrl, $cost, $departamentId, $trainerName, $locationId);
    if ($validationResult != VALIDATION_OK)
        return $validationResult;

    $trainerId = getTrainerId($trainerName);
    if ($trainerId == -1) {
        $trainerId =  createTrainer($trainerName);
    }

    $mysqli = connect();
    $mysqli->query(
        'UPDATE Trainings SET '
            . ' TrainingName =' . "' $trainingName '"
            . ', StartDate=' . "'$startDate'"
            . ', EndDate=' . "'$endDate'"
            . ', InviteUrl=' . "' $inviteUrl '"
            . ', Cost=' . (float)$cost
            . ', DepartamentId=' . (int)$departamentId
            . ', LocationId=' . (int)$locationId
            . ', TrainerId=' . (int) $trainerId
            . ' WHERE Id=' . (int)$trainingId
    );
    return $mysqli->affected_rows;
}

function validateTraining($trainingName, $startDate, $endDate, $inviteUrl, $cost, $departamentId, $trainerName, $locationId)
{
    if (!departmentExists($departamentId)) {
        return INVALID_DEPT;
    }
    if (!locationExists($locationId)) {
        return INVALID_LOC;
    }

    if (strlen($trainingName) < 2)
        return INVALID_TRAINING_LEN;

    if (!is_numeric($cost)) {
        return INVALID_COST_TYPE;
    } else if ($cost < 1)
        return INVALID_COST_VALUE;

    if (strlen($trainerName) < 2)
        return INVALID_TRAINER_LEN;

    if (Date($startDate) >= Date($endDate))
        return INVALID_DATES;

    return VALIDATION_OK;
}
