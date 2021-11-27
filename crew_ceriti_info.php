<?php
include_once "controller/crewcercontroller.php";
$ccController=new CrewCerController();
$results = $ccController->showCrewCertificate();
?>
<?php include_once "master_layouts/header.php";?>


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Crew Certificate Info</h1>                        
                    </div>

                    <div class="row">
                        <div class="col">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <td>Crew</td>                                            
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
                        echo "<td>".$result['firstname']."</td>";
                        echo "<td>".$result['name']."</td>";
                        echo "<td>".$result['dateissue']."</td>";
                        echo "<td>".$result['number']."</td>";
                        echo "<td>".$result['dateexp']."</td>";
                        echo "<tr>";
                        }
                        ?>
                        </tbody>
                                </table>
                            </div>
                        </div>
                    
                        </div>
                        
                    </div>
                       

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<?php 
session_destroy();
?>

<?php include "master_layouts/footer.php";?>