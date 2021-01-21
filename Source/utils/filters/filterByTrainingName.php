<?php
class FilterByTrainingName
{
    private $names;

    function __construct($names)
    {
        $this->names = $names;
    }

    function isOk($training)
    {
        if (empty($this->names))
            return true;
        foreach ($this->names as $item) {
            if (stripos($training->TrainingName, $item) !== false) {
                return true;
            }
        }
        return false;
    }
} ?>