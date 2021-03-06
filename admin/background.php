<?php require_once("includes/sessions.php"); ?>
<?php confirm_logged_in(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
 include("includes/header.php");
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
                                <p class="pageheader-text">Edit the background images for all pages</p>

                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Update background Image for all pages</li>
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
                     <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card"><?php
                                         $query2 = "SELECT * FROM background WHERE id=1";
                                         $result = $mysqli->query($query2) or die($mysqli->error);
                                         while ($row = $result->fetch_assoc())
                                          {?>
                                    <h5 class="card-header">Update About Page Image</h5>
                                    <div class="card-body">
                                        <form method = "post" enctype="multipart/form-data" action="update.php?upd_about=1">

                                        <img src='images/<?php echo $row['about']?>' alt="user" class="rounded" width="100%">
                                         <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                                <br/>
                                                <label class="custom-file-label" for="customFile">Select another About Background</label>
                                            </div>
                                            <input type ="submit" name = "upd_about_pic" id= "upd_about_pic" value="Update" class="btn btn-primary">
                                        </form>
                                    </div>
                                 </div>
                     </div>

                     <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="card">
                     <h5 class="card-header">Update Events Page Image</h5>
                        <div class="card-body">
                        <form method = "post" enctype="multipart/form-data" action="update.php?upd_events=1">
                         <img src='images/<?php echo $row['events']?>' alt="user" class="rounded" width="100%">
                          <div class="custom-file mb-3">
                          <input type="file" class="custom-file-input" id="customFile" name="image">
                          <br/>
                          <label class="custom-file-label" for="customFile">Select another Events Background</label>
                          </div>
                          <input type ="submit" name = "upd_events_pic" id= "upd_events_pic" value="Update" class="btn btn-primary">
                          </form>
                        </div>                     </div>
                     </div>
                     <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="card">
                     <h5 class="card-header">Update Blog Page Image</h5>
                        <div class="card-body">
                        <form method = "post" enctype="multipart/form-data" action="update.php?upd_blog_img=1">
                         <img src='images/<?php echo $row['blog']?>' alt="user" class="rounded" width="100%">
                          <div class="custom-file mb-3">
                          <input type="file" class="custom-file-input" id="customFile" name="image">
                          <br/>
                          <label class="custom-file-label" for="customFile">Select another Blog Background</label>
                          </div>
                          <input type ="submit" name = "upd_blog_pic" id= "upd_blog_pic" value="Update" class="btn btn-primary">
                          </form>
                        </div>
                     </div>
                     </div>
                     <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="card">
                     <h5 class="card-header">Update Contact Page Image</h5>
                        <div class="card-body">
                        <form method = "post" enctype="multipart/form-data" action="update.php?upd_contact=1">
                         <img src='images/<?php echo $row['contact']?>' alt="user" class="rounded" width="100%">
                          <div class="custom-file mb-3">
                          <input type="file" class="custom-file-input" id="customFile" name="image">
                          <br/>
                          <label class="custom-file-label" for="customFile">Select another Contact Background</label>
                          </div>
                          <input type ="submit" name = "upd_contact_pic" id= "upd_contact_pic" value="Update" class="btn btn-primary">
                          </form>
                        </div>
                     </div>
                     </div>
                     <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                     <div class="card">
                     <h5 class="card-header">Update Blog Single Background Image</h5>
                        <div class="card-body">
                        <form method = "post" enctype="multipart/form-data" action="update.php?upd_testimony=1">
                         <img src='images/<?php echo $row['blogSingle']?>' alt="user" class="rounded" width="100%">
                          <div class="custom-file mb-3">
                          <input type="file" class="custom-file-input" id="customFile" name="image">
                          <br/>
                          <label class="custom-file-label" for="customFile">Select another Testimony Background</label>
                          </div>
                          <input type ="submit" name = "upd_blogsingle_pic" id= "upd_blogsingle_pic" value="Update" class="btn btn-primary">
                          </form>
                        </div>
                     </div>
                     </div>
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Update E-Books Background Image</h5>
                                <div class="card-body">
                                    <form method = "post" enctype="multipart/form-data" action="update.php?upd_ebg=1">
                                    <img src='images/<?php echo $row['ebooks']?>' alt="user" class="rounded" width="100%">
                                    <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="customFile" name="image">
                                    <br/>
                                    <label class="custom-file-label" for="customFile">Select another E-Book Background</label>
                                    </div>
                                    <input type ="submit" name = "upd_ebooks_pic" id= "upd_ebooks_pic" value="Update" class="btn btn-primary">
                                    </form><?php } ?>
                                </div>
                        </div>
                     </div>
               </div>
            </div>
          </div>
        </div>
</div>



<?php
include("includes/footer.php");
?>