# 1 GET ALL TRAINIGS WITH ALL DETAILS
$sqlAllTrainingsWithDetails = "SELECT t.TrainingName,t.StartDate,t.EndDate,t.InviteUrl,t.IsDeleted, tr.Name,l.Name,d.Name\n"
    . "FROM Trainings t\n"
    . "INNER JOIN Trainers tr on t.TrainerId=tr.Id\n"
    . "INNER JOIN Locations l on t.LocationId=l.Id\n"
    . "INNER JOIN Departments d on t.DepartamentId=d.Id";


#2 GET TRAININGS AVAILABLE NEXT WEEK
$sqlTrainingsAvailableNextWeek = "SELECT t.TrainingName,t.StartDate,t.EndDate,t.InviteUrl,t.IsDeleted, tr.Name,l.Name,d.Name\n"
    . "FROM Trainings t\n"
    . "INNER JOIN Trainers tr on t.TrainerId=tr.Id\n"
    . "INNER JOIN Locations l on t.LocationId=l.Id\n"
    . "INNER JOIN Departments d on t.DepartamentId=d.Id\n"
    . "WHERE t.StartDate>=now() AND t.EndDate<=now() + INTERVAL 7 day";

#3 GET TRAININGS AVAILABLE NEXT WEEK FOR TRAININGS THAT ARE FOR C# or GIT 
$sqlTrainingsAvailableNextWeekForCorGit = "SELECT t.TrainingName,t.StartDate,t.EndDate,t.InviteUrl,t.IsDeleted, tr.Name,l.Name,d.Name\n"
    . "FROM Trainings t\n"
    . "INNER JOIN Trainers tr on t.TrainerId=tr.Id\n"
    . "INNER JOIN Locations l on t.LocationId=l.Id\n"
    . "INNER JOIN Departments d on t.DepartamentId=d.Id\n"
    . "WHERE (t.StartDate>=now() AND t.EndDate<=now() + INTERVAL 7 day)\n"
    . "AND (t.TrainingName LIKE \'%C#%\' OR t.TrainingName LIKE \'%GIT%\')";

#4 GET ALL PARTICIPANTS FROM LAST 3 MONTHS
$sqlAllParticipantsFromLast3Months = "SELECT t.TrainingName,t.StartDate,t.EndDate,p.name\n"
    . "FROM Trainings t\n"
    . "INNER JOIN Trainers tr on t.TrainerId=tr.Id\n"
    . "INNER JOIN TrainingParticipants tp on tp.TrainingId=t.Id\n"
    . "INNER JOIN Participants p on p.Id=tp.ParticipantId\n"
    . "WHERE ( t.StartDate>=now() - INTERVAL 3 month AND t.EndDate<=now())";
	
#5 GET TOTAL COST FOR GIT-Trainings
$sqlTotalCostGitTrainings = "SELECT (CASE WHEN t.TrainingName LIKE \'%GIT%\' THEN \'GIT\' END) as Name , COUNT(*) as \'How Many\', Sum(t.Cost) as \'Total Cost\'\n"
    . "FROM Trainings t\n"
    . "GROUP BY (CASE WHEN t.TrainingName LIKE \'%GIT%\' THEN \'GIT\' END)\n"
    . "HAVING Name=\'GIT\'";

#6 GET PERSONS who didn't participate at any trainings
$sqlPersonsAbsentAtAnyTrainings = "SELECT p.Name,p.JobTitle\n"
    . "from Participants p\n"
    . "LEFT JOIN TrainingParticipants tp on p.Id=tp.ParticipantId\n"
    . "WHERE tp.TrainingId IS NULL";

#7 GET PERSON WITH MOST Attendances
$sqlPersonWithMotsPresents = "SELECT p.name, COUNT(*) as attendances\n"
    . "from Participants p\n"
    . "INNER JOIN TrainingParticipants tp on p.Id=tp.ParticipantId\n"
    . "WHERE tp.TrainingId\n"
    . "GROUP BY p.Id\n"
    . "ORDER BY attendances DESC\n"
    . "LIMIT 1";