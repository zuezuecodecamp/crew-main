<?php
include_once "controller/crewcontroller.php";
$cid=$_POST['id'];
$crewController=new CrewController();
$result=$crewController->removeCrew($cid);
$results = '';
if ($result){
    $results=$crewController->showCrews();
    $output="";
    foreach($results as $result)
    {
        // Variable Type
        $output.="<tr>";
        $output.="<td>" . $result['firstname']."</td>";
    
        $output.= "<td>". $result['lastname']."</td>";
        $output.= "<td>". $result['rank']."</td>";
        $output.= "<td>". $result['vesseltype']."</td>";
        $output.= "<td>". $result['nationality']."</td>";
        $output.="<td cid=". $result['id'] ."><a href='crew_detail.php?cid=". $result['id'] ."' class='btn btn-success'><i class='fa fa-eye'></i></a><a href='crew_edit.php?cid=". $result['id'] ."'  class='btn btn-warning'><i class='fa fa-edit'></i></a> <a class='btn btn-danger delete'><i class='fa fa-trash'></i></a></td>";
        $output.="</tr>";
        //Array Type (Json Type)
    // $output[]=$result;

    }
    echo $output;
}







?>