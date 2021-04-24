<?php 
require("conn.php");
require("header.php");
//---------------
if(!isset($_POST['fname']) ||
  !isset($_POST['fphone']) || 
  !isset($_POST['femail']) || 
  !isset($_POST['fmessage']) ) {echo '';}
else{
	
$name=$_POST['fname'];
$phone=$_POST['fphone'];
$email=$_POST['femail'];
$message=$_POST['fmessage'];
	

$sql="INSERT INTO feedback (`full_name` , `phone_number` , `email` , `message` ) VALUES ('$name','$phone','$email','$message')";
	/*
$sql="INSERT INTO feedback  VALUES ('','$name','$phone','$email','$message')";*/
	
$query=mysqli_query($conn,$sql);
		
}
?>

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact
        <small>AS</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
          <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=westland%20nairobi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://putlocker-is.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google map location for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>

        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
            westlands  , Nairobi
            <br>Parklands street, NB 90210
            <br>
          </p>
          <p>
            <abbr title="Phone">Phone</abbr>: (+254)71245678
          </p>
          <p>
            <abbr title="Email">Email</abbr>:
            <a href="mailto:name@example.com">FurnitureTimberyaard@example.com
            </a>
          </p>
          <p>
            <abbr title="Hours">open Hours</abbr>: Saturday - Friday: 9:00 AM to 6:00 PM
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        
       <div class="col-lg-8 mb-4">
          <h3>Send us a Message</h3>
          <form action="" method="post" name="sentMessage" id="contactForm" novalidate  >
            <div class="control-group form-group">
              <div class="controls">
                <label>Full Name:</label>
                <input type="text" class="form-control" id="name" name="fname" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone" name="fphone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="femail" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Message:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" name="fmessage" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>        
          </form>
        </div>
      </div>
      <!-- /.row -->
 
    </div>

<?php
include("footer.php");
?>
