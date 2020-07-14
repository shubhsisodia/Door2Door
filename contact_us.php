<?php
include "includes/common.php"
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Contact Us | E-Store.com</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
    </head>

<body style="padding-top: 50px;">
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <br>
    
<div class="container">
    <div class="row">
        <div class="col-sm-10">
		  <h1 class="title">LIVE SUPPORT</h1>
		  <h3>24 hours | 7 days a week | 365 days a year Live Technical Support</h3><br>
          <div>
             <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters. There are many variations of passages of Lorel Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
          </div>
      </div>
        <div class="col-sm-2">
         <img align="right" src="img/contact.png" alt="contact us">
        </div>
    </div>
    

    <div class="row">
    <div class="col-sm-8">
        <div class="contact-form">
            <h2>CONTACT US</h2>
	           <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="sendemail.php">
				    
                    <div class="form-group col-sm-11">
                        <label>Name:</label>
				        <input type="text" name="name" class="form-control" required="required" >
				    </div>
				    
                    <div class="form-group col-sm-11">
                        <label>Email:</label>
				        <input type="email" name="email" class="form-control" required="required">
				    </div>
				    
                    <div class="form-group col-sm-11">
                        <label>Message:</label>
				        <textarea name="message" id="message" required="required" class="form-control" rows="7" ></textarea>
				    </div>
				            
                    <div class="form-group col-sm-11">
				                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
				    </div>
				</form>
        </div>
    </div>
	    		
        <div class="col-sm-4">
	       <div class="contact-info">
	           <h2 class="title">Contact Information :</h2>
	               <address>
				    <p>500 Lorem Ipsum Dolar Sit,</p>
				    <p>22-56-3-5 Sit Amet, Lorem,</p>
				    <p>USA</p>
				    <p>Phone:(00) 222 666 444</p>
				    <p>Fax:(000) 000 00 00 0</p>
				    <p>Email: info@Door2Door.com</p>
                                    <p>Follow On: Facebook, Twitter</p>
	               </address>
	               
	            
            </div>
        </div>
    </div>
</div>



      <?php include 'includes/footer.php'; ?>
    <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
