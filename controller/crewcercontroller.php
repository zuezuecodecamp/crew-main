<?php
include_once "model/crew-certificate.php";
class CrewCerController extends CrewCertificate {

    public function addCrewCertificate($crew_id,$certifi_id,$number_value,$issue_value,$expired_value)
    {
        return $this->insertCrewCertificate($crew_id,$certifi_id,$number_value,$issue_value,$expired_value);
    }

    public function showCrewCertificate()
    {
        return $this->readCrewCertificate();
    }
    
}
?>