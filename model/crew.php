<?php
include_once "db.php";
class Crew{

private $pdo;

public function insertCrew($firstname,$lastname,$vessel_type,$sbookno)
{
//Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//write sql statement
$sql="insert into crew(firstname,lastname,vesseltype,sbookno) values (:fname,:lname,:vtype,:sbook)";
// prepare statement
$statement=$this->pdo->prepare($sql);
//
$statement->bindParam("fname",$firstname);
$statement->bindParam("lname",$lastname);
$statement->bindParam("vtype",$vessel_type);
$statement->bindParam("sbook",$sbookno);
//excute
if($statement->execute())
{
    return true;
}
else{
    return false;
}
}

public function getCrews(){
//Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//sql
$sql="select c.*,v.name from crew as c left join vessel as v on c.vesseltype=v.id" ;
//prepare sql;
$statement=$this->pdo->prepare($sql);
$statement->execute();
//fetch
$results=$statement->fetchAll(PDO::FETCH_ASSOC);
return $results;
}

public function getCrewInfo($cid){
 //Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//sql
$sql="select * from crew where id=:cid" ;
//prepare sql;
$statement=$this->pdo->prepare($sql);
$statement->bindParam("cid",$cid);
$statement->execute();
//fetch
$result=$statement->fetch(PDO::FETCH_ASSOC);
return $result;   
}

public function updateCrew($cid,$firstname,$lastname,$vessel_type)
{
//Databas connection
$this->pdo=Database::connect();
$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//sql\
$sql="update crew set firstname=:fname, lastname=:lname, vesseltype=:vtype where id=:cid "  ;
$statement=$this->pdo->prepare($sql);
$statement->bindParam("fname",$firstname);
$statement->bindParam("lname",$lastname);
$statement->bindParam("cid",$cid);
$statement->bindParam("vtype",$vessel_type);
if($statement->execute()){
    return true;
}
else {
    return false;
}
}

public function deleteCrew($cid){
    //delete customer
    $pdo=Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //2.sql statement
    $sql="delete from crew where id=:cid";
    //3. preprare sql statement
    $statement=$pdo->prepare($sql);
    $statement->bindParam(":cid",$cid) ;
    $statement->execute();
    if($statement->execute()){
        return true;
    }
    else {
        return false;
    }
}

}
?>