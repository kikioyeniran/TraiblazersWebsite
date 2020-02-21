<?php
 include("includes/header.php")
?>
<?php
  $query2 = "SELECT * FROM background LIMIT 1";
  $result = $mysqli->query($query2) or die($mysqli->error);
  $row = $result->fetch_assoc();
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('admin/images/<?php echo $row['about']?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">About Us</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <?php
      $query2 = "SELECT * FROM bio LIMIT 1";
      $result = $mysqli->query($query2) or die($mysqli->error);
      $row = $result->fetch_assoc();
    ?>
		<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url('admin/images/<?php echo $row['picture']?>');">
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate">
			          	<span class="subheading">A Few Words About Us</span>
			            <h2 class="mb-4">We have been building Trail Blazers for more than <span class="number" data-number="10">0</span> Years</h2>
			            <p><?php echo $row['biotext']?></p>
			            <!-- <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
			            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p> -->
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="services-section py-5 py-md-0 bg-light">
      <div class="container">
        <div class="row"><h3 class="core">Core Values</h3></div>
        <div class="row no-gutters d-flex">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-volunteer"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Truth</h3>
                <p>Truth is knowing your character is shaped by everyday choices. - Vince Lombardi</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-charity"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Integrity</h3>
                <p>There is no real excellence that can be seperated from right living. - David S Jordan</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services active d-block">
              <div class="icon"><span class="flaticon-adoption"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Discipline</h3>
                <p>Liberty is the right to discipline ourselves in order not to be disciplined by others. - Georges Clemenceau (1814 - 1929)</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-open-book"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Excellence</h3>
                <p>We are what we repeatedly do, excellence then is not an act but a habbit. - Aristotle</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
      $query2 = "SELECT * FROM about LIMIT 1";
      $result = $mysqli->query($query2) or die($mysqli->error);
      $row = $result->fetch_assoc();
    ?>
    <section class="ftco-mission">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4 py-4 py-md-5 ftco-animate">
    				<div class="py-md-4 pb-md-5">
	    				<h3>About Our Team!</h3>
	    				<p><?php echo $row['mission']?></p>
    				</div>
    			</div>
    			<div class="col-md-4 py-4 py-md-5 ftco-animate">
    				<div class="py-md-4 pb-md-5">
	    				<h3>About the Vision Coordinator</h3>
	    				<p><?php echo $row['vision']?></p>
    				</div>
    			</div>
    			<div class="col-md-4 py-4 py-md-5 img" style="background-image: url('admin/images/<?php echo $row['picture']?>');"></div>
    		</div>
    	</div>
    </section>

   	<section class="testimony-section">
      <div class="container">
        <div class="row ftco-animate justify-content-center">
        	<div class="col-md-6 d-flex">
        		<div class="testimony-img" style="background-image: url(images/testimony-img.png);"></div>
        	</div>
          <div class="col-md-6 py-5">
          	<div class="heading-section heading-section-white pt-4 ftco-animate">
		          <h2 class="mb-0">Success Stories</h2>
		        </div>
            <div class="carousel-testimony owl-carousel ftco-owl">
              <?php
                $query2 = "SELECT * FROM stories";
                $result = $mysqli->query($query2) or die($mysqli->error);
                while($row = $result->fetch_assoc()){
              ?>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4"><?php echo $row['testimony']?></p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url('admin/images/<?php echo $row['picture']?>');">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name"><?php echo $row['name']?></p>
	                    <span class="position"><?php echo $row['portfolio']?></span>
	                  </div>
	                </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-gallery">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row no-gutters">
						<?php
              $query2 = "SELECT * FROM gallery ORDER BY id DESC";
              $result = $mysqli->query($query2) or die($mysqli->error);
              while ($row = $result->fetch_assoc())
              {
            ?>
							<div class="col-md-3 ftco-animate">
								<a href="admin/images/<?php echo $row['picture']; ?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(admin/images/<?php echo $row['picture']?>);">
									<div class="icon mb-4 d-flex align-items-center justify-content-center">
		    						<span class="icon-instagram"></span>
		    					</div>
								</a>
							</div>
            <?php } ?>
						</div>
					</div>
				</div>
			</div>
		</section>

<?php
include("includes/footer.php");
?>