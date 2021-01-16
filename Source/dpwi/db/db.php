<?php

function connect()
{
    $host = 'localhost';
    $user = 'root';
    $pass = 'masterrc';
    $db = 'traingdDB';

    $mysqli = new mysqli($host, $user, $pass, $db);
    if ($mysqli->connect_error) {
        die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
    }
    return $mysqli;
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
    $sql = "DELETE FROM Trainings WHERE id=" . $id;
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
    if (!departmentExists($departamentId)) {
        return 'Validation Error! Invalid department';
    }
    if (!locationExists($locationId)) {
        return 'Validation Error! Invalid location';
    }

    if (strlen($trainingName) < 2)
        return 'Validation Error! Training name must be at least 3 chars long';

    if (!is_numeric($cost)) {
        return 'Validation Error! Cost must be numeric';
    } else if ($cost < 1)
        return 'Validation Error! Cost must be greater than 1';

    if (strlen($trainerName) < 2)
        return 'Validation Error! Trainer name must be at least 3 chars long';


    $trainerId = getTrainerId($trainerName);
    echo $trainerId;

    if ($trainerId == -1) {
        $trainerId =  createTrainer($trainerName);
    }

    //return 'Success';
}
function updateTraining($trainingId, $trainingName, $startDate, $endDate, $inviteUrl, $cost, $departamentId, $trainerName, $locationId)
{
}
