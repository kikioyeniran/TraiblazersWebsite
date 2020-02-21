<?php
 include("includes/header.php");

if(isset($_POST['submit']))
{

    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $query = "INSERT INTO contact(name, email, phone, message, subject) Values ('$name', '$email', '$phone', '$message', '$subject')";
    if($mysqli->query($query) or die($mysqli->error))
    {

        echo "<script>alert('Your message has been sent Succesfully.')</script>";

    }
    else{
        echo "<script>alert('Your message could not be sent')</script>";
    }

}
?>
<?php
  $query2 = "SELECT * FROM background LIMIT 1";
  $result = $mysqli->query($query2) or die($mysqli->error);
  $row = $result->fetch_assoc();
?>
<section class="hero-wrap hero-wrap-2" style="background-image: url('admin/images/<?php echo $row['contact']?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 class="mb-3 bread">Contact Us</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

		<section class="contact-section bg-primary">
      <div class="container">
        <div class="row no-gutters d-flex contact-info">
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 py-md-5 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Address</h3>
	            <p>Close 2,Block 3 Elekahia Housing Estate, Port-Harcourt, Rivers State, Nigeria.</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 py-md-5 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Contact Number</h3>
	            <p><a href="tel://1234567920">+234 70639 81098</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 py-md-5 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email Address</h3>
	            <p><a href="mailto:info@yoursite.com">info@tbintl.org</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="align-self-stretch box p-4 py-md-5 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-money"></span>
          		</div>
          		<h3 class="mb-4">Give</h3>
	            <p><a href="#">Trailblazers Intl. Support Initiative. Zenith Bank. 1016471008</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
      <div class="container-fluid px-0">
        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form method="POST" action="contact.php" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name" name="fullname">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email" name="email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject"  name="subject">
              </div>
              <div class="form-group">
                <input type="number" class="form-control" placeholder="Phone Number" name="phone">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-md-6 d-flex" style="background-image:url('admin/images/causes-6.jpg');">
          <!-- <div class="blog-img mr-4" style="background-image:url('admin/images/causes-6.jpg');">
          <div><img class="blog-img mr-4" src="admin/images/causes-6.jpg"/></div> -->
          </div>
        </div>
      </div>
    </section>

<?php
include("includes/footer.php");
?>