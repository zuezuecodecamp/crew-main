<?php
include_once "model/crew.php";
class CrewController extends Crew {

    public function addCrew($firstname,$lastname,$vessel_type,$sbookno)
    {
        return $this->insertCrew($firstname,$lastname,$vessel_type,$sbookno);
    }
    public function showCrews()
    {
        return $this->getCrews();
    }
    public function showCrewInfo($cid)
    {
        return $this->getCrewInfo($cid);
    }
    public function editCrew($cid,$firstname,$lastname,$vessel_type)
    {
        return $this->updateCrew($cid,$firstname,$lastname,$vessel_type);
    }

    public function removeCrew($cid)
    {
        return $this->deleteCrew($cid);
    }

}
?>