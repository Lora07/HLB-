<?php

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HLB Staff</title>
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">		
		
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.transitions.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" href="css/etlinefont.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    
  </head>
  <body data-spy="scroll" data-target="#main-menu">
    
  <!--Start page loader-->
  <div id="pageloader">   
        <div class="loader">
          <img src="images/progress.gif" alt='loader' />
        </div>
   </div>
   <!--End Page loader -->

   <!--Navigation logo-->
   <header id="header">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
                        <div class="logo-nav">
                                <a href="index.php">
                                    <!-- <img src="images/logo.png" alt="Company logo" /> -->
                                    
                                </a>
                                <div class="big">HLB Mekonsult</div>
                            </div>
                        <!-- Nav-->
                        <div class="clear-toggle"></div>
                            <div id="main-menu" class="collapse scroll navbar-right">
                                <ul class="nav">	
                                <li class="active"> <a href="#home">Home</a> </li>						
                                <li> <a href="#application">Application</a> </li>
                                <li> <a href="#clearance">Clearance</a> </li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
   </header>

   <!--Slider-->
   <section id="home" class="home">
             <div class="slider-overlay"></div>
            <div class="flexslider">
                <ul class="slides scroll">
                    <li class="first">
                        <div class="slider-text-wrapper">  
                            <div class="container">
                                <div class="big">Application Form </div>     
                                <?php
                                    $files=scandir("uploads");
                                    $a=2;
                                    $b=3; 
                                ?>
                                <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>" class="middle btn btn-white">Download</a>
                            </div>       
                        </div>
                        <img src="images/1.jpg" alt="">
                    </li>
                    
                    <li class="secondary">
                        <div class="slider-text-wrapper"> 
                            <div class="container">                       
                                <div class="big">Staff Exit Clearance </div>          
                                <a download="<?php echo $files[$b] ?>" href="uploads/<?php echo $files[$b] ?>"  class=" middle btn btn-white">Download</a>
                            </div>
                         </div>
                        <img src="images/2.jpg" alt="">
                    </li>
                </ul>
            </div>
   </section>

   <!-- User uploads the complete form -->
   <section  id="application" class="section">
       <div class="container">
           <div class="row">
              
              <!--upload application form-->
              <div class="col-md-12">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-upload"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Upload Application Form</h4>
                         <p>Please make sure you are uploading the right form</p>
                            <form action="downloadEA.php" method="post" enctype="multipart/form-data" >
                                <h3>Upload File</h3>
                                <input type="file" name="file"> <br>
                                <button type="submit" value="Upload">Upload</button>
                            </form>
                      </div>
                  </div>
              </div>
           </div>
       </div>
   </section>

   <!-- Start Facts-->
  <section id="facts" class="section parallax">
    <div class="overlay"></div>
       <div class="container">
       </div> <!-- /.container -->
  </section>
  <!--End Facts-->

   <section  id="clearance" class="section">
       <div class="container">
           <div class="row">
              
            <!--upload Staff exit clearance form-->
              <div class="col-md-12">
                  <div class="features-icon-box">
                  
                      <div class="features-icon">
                      <i class="fa fa-upload"></i>
                      </div>
                      
                      <div class="features-info">
                         <h4>Upload Staff exit clearance Form</h4>
                         <p>Please make sure you are uploading the right form</p>
                         <form action="downloadSC.php" method="post" enctype="multipart/form-data" >
                                <h3>Upload File</h3>
                                <input type="file" name="file"> <br>
                                <button type="submit" value="Upload">Upload</button>
                            </form>
                      </div>
                  </div>
              </div>
           </div>
       </div>
   </section>

   <!--Footer-->

    <a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

    <!--Plugins-->
	<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    
  </body>
</html>

<!-- <form method="POST" enctype="multipart/form-data" action="upload.php" >
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form> -->
<!-- <div class="container">
      <div class="row">
        <form action="download.php" method="post" enctype="multipart/form-data" >
          <h3>Upload File</h3>
          <input type="file" name="file"> <br>
          <button type="submit" value="Upload">Upload</button>
        </form>
      </div>
    </div> -->
<!-- <?php

// $files=scandir("uploads");
// for($a=2; $a<count($files);$a++){
//     //display download link
//     ?>
//     <p>
//         <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>">
//             <?php echo $files[$a] ?>
//         </a>
//     </p>
//     <?php
// } -->