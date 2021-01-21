<?php

class BaseObject
{
    public $Id;
    public $Name;
    public function __construct($id, $name)
    {
        $this->Id = $id;
        $this->Name = $name;
    }
    public static function createEmpty()
    {
        return new self(
            0,
            ''
        );
    }
}
class Location extends BaseObject
{
    public function __construct($id, $name)
    {
        parent::__construct($id, $name);
    }
}
class Trainer extends BaseObject
{
    public function __construct($id, $name)
    {
        parent::__construct($id, $name);
    }
}
class Department extends BaseObject
{
    public function __construct($id, $name)
    {
        parent::__construct($id, $name);
    }
}
class Participant extends BaseObject
{
    public function __construct($id, $name)
    {
        parent::__construct($id, $name);
    }
}

class TrainingParticipant
{
    public $Participant;
    public $TrainingId;
    public $IsInvited;

    public function __construct($participant, $trainingId, $IsInvited)
    {
        $this->Participant = $participant;
        $this->TrainingId = $trainingId;
        $this->IsInvited = $IsInvited;
    }
}
class Training
{
    public $Id;
    public $TrainingName;
    public $StartDate;
    public $EndDate;
    public $InviteUrl;
    public $Cost;
    public $Location;
    public $Department;
    public $Trainer;
    public $TrainingParticipant;

    public function __construct(
        $Id,
        $TrainingName,
        $StartDate,
        $EndDate,
        $InviteUrl,
        $Cost,
        $Location,
        $Department,
        $Trainer,
        $TrainingParticipants
    ) {
        $this->Id = $Id;
        $this->TrainingName = $TrainingName;
        $this->StartDate = $StartDate;
        $this->EndDate = $EndDate;
        $this->InviteUrl = $InviteUrl;
        $this->Cost = $Cost;
        $this->Location = $Location;
        $this->Department = $Department;
        $this->Trainer = $Trainer;
        $this->TrainingParticipants = $TrainingParticipants;
    }
    public static function createEmpty()
    {
        return new self(
            0,
            '',
            Date("Y-m-d H:i:s"),
            Date("Y-m-d H:i:s"),
            '',
            0,
            Location::createEmpty(),
            Department::createEmpty(),
            Trainer::createEmpty(),
            array()
        );
    }
}
