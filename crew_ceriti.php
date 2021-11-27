<?php

include_once "controller/certificatecontroller.php";

$certificateController=new CertificateController();
$results=$certificateController->showCertificate();

include_once "controller/crewcontroller.php";
include_once "controller/crewcercontroller.php";
$ccController=new CrewCerController();


$crewcontroller=new CrewController();
$crews=$crewcontroller->showCrews();
if(isset($_POST['submit'])){
    foreach($results as $result){
        $number = $result['id'];//field name
        $issue  = 'issue_'.$result['id'];
        $expired = 'expired_'.$result['id'];
        
        $number_value = $_POST[$number];
        $issue_value = $_POST[$issue];
        $expired_value = $_POST[$expired];
        $crew_id = $_POST['crew'];
        $certifi_id = $result['id'];

        if($crew_id and $certifi_id and $number_value and $issue_value and $expired_value){
            $re = $ccController->addCrewCertificate($crew_id,$certifi_id,$number_value,$issue_value,$expired_value);
            if($re){
                header("location:crew_ceriti_info.php");
            }
            
        }

       
    
    }
}



?>
<?php include_once "master_layouts/header.php";?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Crew Certificate</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add Crew </a>
                    </div>
                    

                    <!-- Content Row -->
                    <form method="post">
                        <div class="col-md-4">
                                <label class="form-label">Crew</label>
                                <select class="form-select" name="crew">
                                    <?php
                                    foreach($crews as $crew){
                                        echo "<option value=".$crew["id"].">".$crew["firstname"]."-".$crew["sbookno"]."</option>";
                                    }
                                    ?>
                                    
                                    
                                </select>
                        </div>
                        <div class="row">
                            <div class="col">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <td>Certificate ID</td>
                                            <td> Certificate</td>
                                            <td> Date Issue</td>
                                            <td> Number</td>
                                            <td> Date Expired</td>
                                            
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                            <?php
                            foreach($results as $result){
                            echo "<tr>";
                            echo "<td>".$result['id']."</td>";
                            echo "<td>" . $result['name']."</td>";   
                            $number = $result["id"] ;
                            $issue = "issue_".$result["id"];
                            $expired = "expired_".$result["id"];
                            ?>
                            <td>
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control date_issue " name = "<?php echo $issue; ?>"  placeholder="Date Issue">
                            </td>
                            <td>                        
                            <input type="text" class="form-control" name="<?php echo $number; ?>" id="number" placeholder="Number">
                            </td>
                            <td>
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-calendar"></i></span>
                            <input type="text" class="form-control date_expired" name = "<?php echo $expired; ?>"  placeholder="Date Expired">
                            </td>
                            <?php                     
                            echo "</tr>";
                            }
                            ?>
                            </tbody>
                                    </table>
                                </div>
                            </div>
                        
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col">
                                <button name="submit" class="btn btn-primary">Save</button>                               
                            </div>
                        </div>
                    </form>
                   

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php 
session_destroy();
?>

<?php include "master_layouts/footer.php";?>