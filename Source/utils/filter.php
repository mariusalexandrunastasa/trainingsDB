<?php

include_once 'utils/filters/filterByTrainerName.php';
include_once 'utils/filters/filterByTrainingName.php';
include_once 'utils/filters/filterByTraineeName.php';

require_once 'db/db.php';
require_once 'db/db_to_html.php';

class FormGroup
{
    private $trainingNames;
    private $trainerNames;
    private $traineeNames;


    private $trainings;

    function __construct()
    {
        //trainings name
        $this->trainingNames = isset($_POST['trainingNames']) ? $_POST['trainingNames'] : array();
        if ($this->trainingNames != null)
            $this->trainingNames = array_map('trim', explode(',',  $this->trainingNames));

        $this->trainerNames = isset($_POST['trainersNames']) ? $_POST['trainersNames'] : array();
        if ($this->trainerNames != null)
            $this->trainerNames = array_map('trim', explode(',',  $this->trainerNames));

        $this->traineeNames = isset($_POST['traineeNames']) ? $_POST['traineeNames'] : array();
        if ($this->traineeNames != null)
            $this->traineeNames = array_map('trim', explode(',',  $this->traineeNames));
    }

    function get()
    {
        $this->trainings = getActiveTrainingsWithParticipants();
        $byTrainigName = array_filter($this->trainings, array(new FilterByTrainingName($this->trainingNames), 'isOk'));
        $byTrainerName = array_filter($byTrainigName, array(new FilterByTrainerName($this->trainerNames), 'isOk'));
        $byTraineeName = array_filter($byTrainerName, array(new FilterByTraineeName($this->traineeNames), 'isOk'));

        return $byTraineeName;
    }
}

$formGroup = new FormGroup();
$filter_result = $formGroup->get();
displayTrainingsWithParticipants($filter_result);
