<?php
class FilterByTraineeName
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
            foreach ($training->TrainingParticipants as $tps) {
                if (stripos($tps->Participant->Name, $item) !== false) {
                    return true;
                }
            }
        }
        return false;
    }
}
