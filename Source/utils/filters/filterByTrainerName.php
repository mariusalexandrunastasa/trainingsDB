<?php
class FilterByTrainerName
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
            if (stripos($training['TrainerName'], $item) !== false) {
                return true;
            }
        }
        return false;
    }
}
