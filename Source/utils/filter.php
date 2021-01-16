<?php

include_once 'utils/filters/filterByTrainerName.php';
include_once 'utils/filters/filterByTrainingName.php';

class FormGroup
{
    private $trainingNames;
    private $trainerNames;

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

        foreach ($this->trainerNames as $item) {
            echo $item;
        }
    }

    function get()
    {
        $this->trainings = getActiveTrainings();
        $byTrainigName = array_filter($this->trainings, array(new FilterByTrainingName($this->trainingNames), 'isOk'));
        $byTrainerName = array_filter($byTrainigName, array(new FilterByTrainerName($this->trainerNames), 'isOk'));

        return $byTrainerName;
    }
}
require_once 'db/db.php';
require_once 'db/db_to_html.php';
$formGroup = new FormGroup();
$filter_result = $formGroup->get();
displayTrainings($filter_result);
