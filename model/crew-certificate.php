<?php
include_once "db.php";
class CrewCertificate{

private $pdo;

public function insertCrewCertificate($crew_id,$certifi_id,$number_value,$issue_value,$expired_value)
{
   
//Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//write sql statement

$sql="insert into crewcreti (crewid,creid,dateissue,dateexp,number) values (:cid,:crid,:dis,:dexp,:num)";
// prepare statement
$statement=$this->pdo->prepare($sql);

$statement->bindParam("cid",$crew_id);
$statement->bindParam("crid",$certifi_id);
$statement->bindParam("dis",$issue_value);
$statement->bindParam("num",$number_value);
$statement->bindParam("dexp",$expired_value);
//excute
if($statement->execute())
{
    return true;
}
else{
    return false;
}
}

public function readCrewCertificate()
{
    //Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//sql
$sql="SELECT cc.id,c.firstname,cr.name,cc.dateissue,cc.number,cc.dateexp from crewcreti as cc left join crew as c on c.id = cc.crewid left join cretificate as cr on cr.id = cc.creid" ;
//prepare sql;
$statement=$this->pdo->prepare($sql);
$statement->execute();
//fetch
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
return $results;
}


}
?>