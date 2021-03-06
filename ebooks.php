<?php
 include("includes/header.php")
?>
<?php
  $query2 = "SELECT * FROM background LIMIT 1";
  $result = $mysqli->query($query2) or die($mysqli->error);
  $row = $result->fetch_assoc();
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('admin/images/<?php echo $row['ebooks']?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">Our E-Books</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>E-books <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
            <div class="row">
              <h3>Our Free E-books</h3>
              <?php
                $query2 = "SELECT * FROM freebook";
                $result = $mysqli->query($query2) or die($mysqli->error);
                while($row = $result->fetch_assoc()){
              ?>
                <div class="col-md-12 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch d-md-flex">
                    <a href="#" class="block-20" style="background-image: url('admin/images/<?php echo $row['picture']?>');">
                    </a>
                    <div class="text d-block pl-md-4">
                      <div class="meta mb-3">
                        <div><a href="#"><?php echo $row['author']?></a></div>
                      </div>
                      <h3 class="heading"><a href="#"><?php echo $row['title']; ?></a></h3>
                      <p><?php echo $row['summary']; ?> </p>
                      <p><a href="admin/ebooks/<?php echo $row['book']?>" download class="btn btn-primary py-2 px-3">Download</a></p>
                    </div>
                  </div>
                </div>
                <?php } ?>
						</div>
            <div class="row">
              <h3>Other Books By Trailblazers</h3>
              <?php
                $query2 = "SELECT * FROM ebooks";
                $result = $mysqli->query($query2) or die($mysqli->error);
                while($row = $result->fetch_assoc()){
              ?>
                <div class="col-md-12 d-flex ftco-animate">
                  <div class="blog-entry align-self-stretch d-md-flex">
                    <a href="#" class="block-20" style="background-image: url('admin/images/<?php echo $row['picture']?>');">
                    </a>
                    <div class="text d-block pl-md-4">
                      <div class="meta mb-3">
                        <div><a href="#"><?php echo $row['author']?></a></div>
                      </div>
                      <h3 class="heading"><a href="#"><?php echo $row['title']; ?></a></h3>
                      <p><?php echo $row['summary']; ?> </p>
                      <p><a href="<?php echo $row['link']?>" class="btn btn-primary py-2 px-3" target="_blank">Visit Publishers</a></p>
                    </div>
                  </div>
                </div>
                <?php } ?>
						</div>
						<div class="row mt-5">
		          <div class="col">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar ftco-animate">
            <!-- <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon ion-ios-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div> -->

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
                  <h3 class="heading-1"><a href="#"><?php echo $row['title']?></a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span><?php echo $date." ".$m_time; ?></a></div>
                    <div><a href="#"><span class="icon-person"></span><?php echo $row['author']?></a></div>
                  </div>
                </div>
              </div>
				  <?php } ?>
              <!-- <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading-1"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> April 09, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div> -->
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
              <p>"The hero is the one who kindles a reat light in the world, who sets up blazing torches for all men to see by. The saint is the man who walks through the dark parts of the world, himself a light." - Felix Alder</p>
            </div>
          </div>

        </div>
      </div>
    </section> <!-- .section -->


<?php
include("includes/footer.php");
?>