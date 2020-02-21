<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
 include("includes/header.php")
?>

<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Home</h2>
                                <p class="pageheader-text">View List of Registered Attendees</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->


                    <div class="row">
                     <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="card">
                                <h5 class="card-header">List of Registered Attendees</h5>

                                    <div class="table-responsive ">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Church</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Event Theme</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $id = $_GET['event'];
                                                $count = 0;
                                                $query2 = "SELECT * FROM eventregistration WHERE eventID={$id} ORDER BY id ASC";
                                                $result = $mysqli->query($query2) or die($mysqli->error);
                                                while ($row = $result->fetch_assoc())
                                                 {
                                                     $count++;
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $count;?></th>
                                                    <td><?php echo $row['name'];?></td>
                                                    <td><?php echo $row['church'];?></td>
                                                    <td><?php echo $row['phoneNumber'];?></td>
                                                    <td><?php echo $row['theme'];?></td>
                                                </tr>
                                                 <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                     </div>

                                     </div>
</div>



<?php
include("includes/footer.php");
?>