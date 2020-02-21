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
                        <p class="pageheader-text">Edit</p>
                        <div class="page-breadcrumb">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Events</li>
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
                            <h5 class="card-header">Edit Blog Post</h5>
                            <div class="card-body">
                                <!-- ===============EDIT BLOG==========================-->
                                <?php
                                    if(isset($_GET['blog'])){
                                    $id = $_GET['blog'];
                                    $query = "SELECT * FROM blog WHERE id = {$id} ORDER BY id ASC";
                                    $result = $mysqli->query($query) or die($mysqli->error);
                                    $row = $result->fetch_assoc();
                                ?>
                                <form method="post" enctype="multipart/form-data" action="update.php?blog=<?php echo $_GET['blog']?>">
                                    <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Title</label>
                                            <input id="inputText3" type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputText3" class="col-form-label">Author</label>
                                            <input id="inputText3" type="text" class="form-control" name="author" value="<?php echo $row['author'];?>">
                                        </div>
                                        <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Select Date</label>
                                        <div class="input-group date" id="datetimepicker10" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker10" name="dt" value="<?php echo $row['dt'];?>"/>
                                        <div class="input-group-append" data-target="#datetimepicker10" data-toggle="datetimepicker">
                                            <div classs="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                        </div>
                                        </div>
                                        </div>
                                        <script type="text/javascript">
                                        </script>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="image">
                                            <br/>
                                            <label class="custom-file-label" for="customFile">Select Picture</label>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Short Summary</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="summary"><?php echo $row['summary'];?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Main Blog Post</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="main_post"><?php echo $row['main_post'];?></textarea>
                                        </div>
                                        <input type ="submit" name = "upd_blog" id= "upd_blog" value="Update" class="btn btn-primary" />
                                    </form>
                                <?php
                                    }
                                ?>
                                <!-- ===============EDIT EVENT==========================-->
                                <?php
                                    if(isset($_GET['event'])){
                                    $id = $_GET['event'];
                                    $query = "SELECT * FROM events WHERE id = {$id} ORDER BY id ASC";
                                    $result = $mysqli->query($query) or die($mysqli->error);
                                    $row = $result->fetch_assoc();
                                ?>
                                <form method="post" enctype="multipart/form-data" action="update.php?event=<?php echo $_GET['event']?>">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Input Event Theme</label>
                                        <input id="inputText3" type="text" class="form-control" name="theme" value="<?php echo $row['theme'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Input Event Location</label>
                                        <input id="inputText3" type="text" class="form-control" name="location" value="<?php echo $row['location'];?>">
                                    </div>
                                    <div class="form-group">
                                    <label for="inputText3" class="col-form-label">Select Date</label>
                                    <div class="input-group date" id="datetimepicker10" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker10" name="dt" id="dt" value="<?php echo $row['dt'];?>"/>
                                    <div class="input-group-append" data-target="#datetimepicker10" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="custom-file mb-3">
                                        <input type="hidden" name="sixe" value="2000000">
                                        <input type="file" class="custom-file-input" id="customFile" name="image">

                                        <br/>
                                        <label class="custom-file-label" for="customFile">Select Poster</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Short Summary</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="about"><?php echo $row['about'];?></textarea>
                                    </div>
                                    <input type ="submit" name = "upd_event" id= "upd_event" value="Update" class="btn btn-primary" />
                                </form>
                                <?php
                                    }
                                ?>
                                <!-- ===============EDIT STORY==========================-->
                                <?php
                                    if(isset($_GET['story'])){
                                    $id = $_GET['story'];
                                    $query = "SELECT * FROM stories WHERE id = {$id} ORDER BY id ASC";
                                    $result = $mysqli->query($query) or die($mysqli->error);
                                    $row = $result->fetch_assoc();
                                ?>
                                <form method="post" enctype="multipart/form-data" action="update.php?story=<?php echo $_GET['story']?>">
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Name</label>
                                        <input id="inputText3" type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputText3" class="col-form-label">Portforlio</label>
                                        <input id="inputText3" type="text" class="form-control" name="portfolio" value="<?php echo $row['portfolio'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Testimony</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="testimony"><?php echo $row['testimony'];?></textarea>
                                    </div>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="image">
                                        <br/>
                                        <label class="custom-file-label" for="customFile">Select Picture</label>
                                    </div>
                                    <input type ="submit" name = "upd_story" id= "upd_story" value="Update" class="btn btn-primary" />
                                </form>
                                <?php
                                    }
                                ?>
                                <!-- ===============EDIT FREEBOOK==========================-->
                                <?php
                                    if(isset($_GET['freebook'])){
                                    $id = $_GET['freebook'];
                                    $query = "SELECT * FROM freebook WHERE id = {$id} ORDER BY id ASC";
                                    $result = $mysqli->query($query) or die($mysqli->error);
                                    $row = $result->fetch_assoc();
                                ?>
                                    <form method="post" enctype="multipart/form-data" action="update.php?freebook=<?php echo $_GET['freebook']?>">
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Input E-Book Title</label>
                                                <input id="inputText3" type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Input Author</label>
                                                <input id="inputText3" type="text" class="form-control" name="author" value="<?php echo $row['author'];?>">
                                            </div>
                                            <div class="form-group">
                                             <label for="exampleFormControlTextarea1">E-Book Summary(Description)</label>
                                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="summary"><?php echo $row['summary']; ?></textarea>
                                             </div>
                                            <div class="custom-file mb-3">
                                                <input type="hidden" name="sixe" value="2000000">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">

                                                <br/>
                                                <label class="custom-file-label" for="customFile">Select Picture</label>
                                            </div>
                                            <div class="custom-file mb-3">
                                                <input type="hidden" name="sixe" value="2000000">
                                                <input type="file" class="custom-file-input" id="customFile" name="book">

                                                <br/>
                                                <label class="custom-file-label" for="customFile">Select PDF Document</label>
                                            </div>
                                            <input type ="submit" name = "upd_freebook" id= "upd_freebook" value="Update" class="btn btn-primary" />
                                    </form>
                                    <?php } ?>
                                <!-- ===============EDIT EBOOK REGULAR==========================-->
                                <?php
                                    if(isset($_GET['ebook'])){
                                    $id = $_GET['ebook'];
                                    $query = "SELECT * FROM ebooks WHERE id = {$id} ORDER BY id ASC";
                                    $result = $mysqli->query($query) or die($mysqli->error);
                                    $row = $result->fetch_assoc();
                                ?>
                                    <form method="post" enctype="multipart/form-data" action="update.php?ebook=<?php echo $_GET['ebook']?>">
                                        <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Input E-Book Title</label>
                                                <input id="inputText3" type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Input Author</label>
                                                <input id="inputText3" type="text" class="form-control" name="author" value="<?php echo $row['author'];?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Input Link To Publishers</label>
                                                <input id="inputText3" type="text" class="form-control" name="link" value="<?php echo $row['link'];?>">
                                            </div>
                                            <div class="form-group">
                                             <label for="exampleFormControlTextarea1">E-Book Summary(Description)</label>
                                             <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="summary"><?php echo $row['summary']; ?></textarea>
                                             </div>
                                            <div class="custom-file mb-3">
                                                <input type="hidden" name="sixe" value="2000000">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">

                                                <br/>
                                                <label class="custom-file-label" for="customFile">Select Picture</label>
                                            </div>
                                            <input type ="submit" name = "upd_ebook" id= "upd_ebook" value="Update" class="btn btn-primary" />
                                    </form>
                                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
     include("includes/footer.php");
?>