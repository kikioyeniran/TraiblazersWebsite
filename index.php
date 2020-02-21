<?php
 include("includes/header.php")
?>

<?php
    $query2 = "SELECT * FROM home";
    $result = $mysqli->query($query2) or die($mysqli->error);
    $row = $result->fetch_assoc()
?>
<div class="hero-wrap" style="background-image: url('admin/images/<?php echo $row['picture']?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-6 order-md-last ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo $row['text']?></h1>
            <p><a href="#" class="btn btn-black py-3 px-4">Join Us</a></p>
          </div>
          <div class="col-md-6 d-none d-md-block">
          	<div class="play-video pb-5 d-flex align-items-center">
          		<p><a href="#" class="popup-vimeo"><span class="icon"><i class="ion-ios-play "></i></span> <span class="play">Play video</span></a></p>
          	</div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-volunteer">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-7 img-volunteer" style="background-image: url(images/about.jpg);">
    				<div class="row no-gutters justify-content-end">
    					<div class="col-lg-7">
    						<div class="text py-5 pl-md-4 pr-md-3">
    							<h2 class="mb-4">Stand Out Always!</h2>
    							<p>"We believe that our children and teenagers are not just the future of the church or nation,
                    they are a part of today. Its our pleasure to come alongside with parents and support their
                    efforts to raise TRAILBLAZERS!" - Nina Obikudo</p>
    							<p><a href="#" class="btn btn-primary py-3 px-4">Join now</a></p>
    						</div>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-5 d-flex align-items-center bg-black">
    				<div class="about-text py-5 pl-md-5">
    					<h2>We've reached out to <span>over </span><strong class="number" data-number="500">0</strong> Children and Teenagers</h2>
    					<p>We run seminars, conferences, mentoring and character development services, guidance and counseling services
                to children and teenagers individually and/or collectively in homes, schools, churches and other organisations.
              </p>
    					<!-- <p><a href="#" class="btn btn-black py-3 px-4">Donate now</a></p> -->
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

    <section class="ftco-section ftco-causes">
    	<div class="container">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section text-center ftco-animate">
            <h2 class="mb-4">An organization aimed at raising world Influencers</h2>
            <p>Refocusing and redirecting children and teenagers to be passionate about being Influencers in their world and time.</p>
          </div>
        </div>
    	</div>
    	<div class="container">
        <div class="row">
        	<div class="col-md-12">
        		<div class="carousel-causes owl-carousel">
        			<div class="item">
		        		<a href="#" class="causes text-center">
		        			<div class="img" style="background-image: url(images/causes-1.jpg);"></div>
		        			<h2>Kiddies Bible Club</h2>
		        		</a>
        			</div>
        			<div class="item">
	        			<a href="#" class="causes text-center">
		        			<div class="img" style="background-image: url(images/causes-2.jpg);"></div>
		        			<h2>Teens Conferences and Seminars</h2>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="causes text-center">
		        			<div class="img" style="background-image: url(images/causes-3.jpg);"></div>
		        			<h2>Mentoring &amp; Character Development Services</h2>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="causes text-center">
		        			<div class="img" style="background-image: url(images/causes-4.jpg);"></div>
		        			<h2>Guidance &amp; Counselling Services</h2>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="causes text-center">
		        			<div class="img" style="background-image: url(images/causes-5.jpg);"></div>
		        			<h2>Edufund Scheme</h2>
		        		</a>
	        		</div>
        		</div>
        	</div>
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

              <!-- <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name">Jeff Nucci</p>
	                    <span class="position">Businessman</span>
	                  </div>
	                </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name">Jeff Nucci</p>
	                    <span class="position">Businessman</span>
	                  </div>
	                </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name">Jeff Nucci</p>
	                    <span class="position">Businessman</span>
	                  </div>
	                </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap pb-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                  </div>
                  <div class="d-flex">
	                  <div class="user-img" style="background-image: url(images/person_1.jpg)">
	                  </div>
	                  <div class="pos ml-3">
	                  	<p class="name">Jeff Nucci</p>
	                    <span class="position">Businessman</span>
	                  </div>
	                </div>
                </div>
              </div> -->
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