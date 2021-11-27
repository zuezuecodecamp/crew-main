<?php
include_once "model/certificate.php";
class CertificateController extends Certificate {

    public function addCertificate($name)
    {
        return $this->insertCertificate($name);
    }
    public function showCertificate(){
        return $this->readCertificate();
    }
  

}
?>