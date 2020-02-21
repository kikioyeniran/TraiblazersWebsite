<?php
 include("includes/header.php");
 require_once("admin/includes/functions.php ")
?>
<?php
if(isset($_GET['blog'])){
?>
<?php
  $query2 = "SELECT * FROM background LIMIT 1";
  $result = $mysqli->query($query2) or die($mysqli->error);
  $row = $result->fetch_assoc();
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('admin/images/<?php echo $row['blogSingle']?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">Full Blog Post</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <?php
      $id = $_GET['blog'];
      $query2 = "SELECT * FROM blog WHERE id={$id} LIMIT 1";
      $result = $mysqli->query($query2) or die($mysqli->error);
      $row = $result->fetch_assoc();
    ?>
		<section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 order-md-last ftco-animate">
            <h2 class="mb-3"><?php echo $row['title'];?></h2>
            <p><?php echo $row['summary'];?></p>
            <p>
              <img src="admin/images/<?php echo $row['picture'];?>" alt="" class="img-fluid">
            </p>
            <p><?php echo $row['main_post'];?></p>
            <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">child</a>
                <a href="#" class="tag-cloud-link">help</a>
                <a href="#" class="tag-cloud-link">give</a>
                <a href="#" class="tag-cloud-link">charity</a>
              </div>
            </div>

          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-2">Recent Blog Posts</h3>
              <?php
                $query2 = "SELECT * FROM blog";
                $result = $mysqli->query($query2) or die($mysqli->error);
                while($row = $result->fetch_assoc()){
                $dt = $row['dt'];
                $new_dt = explode(" ", $dt);
                //$date = $new_dt[0];
                $date = date("M-jS, Y", strtotime($new_dt[0]));
                $timw = $new_dt[1];
                $new_time = explode(".", $timw);
                $timee = $new_time[0];
                $new_timee = explode(":", $timee);
                $m_time = $new_timee[0] . ":" . $new_timee[1];
              ?>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url('admin/images/<?php echo $row['picture']?>');"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="blog"><a href="#"><?php echo $row['title']?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo $date." ".$m_time; ?></a></div>
                    <div><a href="#"><span class="icon-person"></span><?php echo $row['author']?></a></div>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-2">Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">donate</a>
                <a href="#" class="tag-cloud-link">charity</a>
                <a href="#" class="tag-cloud-link">non-profit</a>
                <a href="#" class="tag-cloud-link">organization</a>
                <a href="#" class="tag-cloud-link">child</a>
                <a href="#" class="tag-cloud-link">abuse</a>
                <a href="#" class="tag-cloud-link">help</a>
                <a href="#" class="tag-cloud-link">volunteer</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3 class="heading-2">Think About It!</h3>
              <p></p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->

<?php
include("includes/footer.php");
}else{
  redirect_to("blog.php");
}

?>



