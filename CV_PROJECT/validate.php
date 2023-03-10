
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
  <script src="https://kit.fontawesome.com/9011fb5988.js" crossorigin="anonymous"></script>
  <title>CERTIFICATE VERIFICATION</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
  <!--Header-->
  <header class="header">
    <div class="header-logo-container">
      <img class="logo" src="./imagelogo.png" alt="Shoppeal Tech" />
    </div>
  </header>

 
  <div id = "container">
    <div id ="main">
    <div class="container__item item">
    <?php
if (isset($_POST['submit'])) {
    $textInput = $_POST['textInput'];
$arg = $textInput;
//path of the code
$command = "python C:\Users\Srikanth\Desktop\sam.py " . escapeshellarg($arg);
$output = array();
exec($command, $output);



    if(isset($output[1])) {
        
      $arg1 = $output[1];
      $arg2 = $output[2];
      $arg3 = $output[0];
      $arg4 = $arg3 . "." . trim($arg2);
      ?>
      <script>
       Swal.fire({
      icon: 'success',
      title: 'Validated',
      html:'<iframe src="<?php echo $arg1; ?>" width="400" height="300"></iframe>,'+
    'You can <b>download certificate</b> by clicking the link, ' +
    '<a href="download.php?id=<?php echo $arg4; ?>&name=<?php echo $arg1; ?>">here</a> ',
     
    
      text: 'Your certificate is valid',
    })
      </script>

       <?php 
    } else {
      ?><script>
      Swal.fire({
        icon: 'warning',
    title: 'Not Validated',
    text: 'Your certificate is  invalid',
  })
    </script>
    <?php
    }
}
?>
<div class="box">
		<form class="content" method="post">
        <p>CERTIFICATE VALIDATION</p>
			<input name="textInput" placeholder="Enter Certificate Id" />
            <button type="submit" name="submit"  value="Validate">Validate</button>
			     
		</form>
        </div>
   
	</div>
    </div>
  </div>

   <!-- Footer -->
   <footer>
    <div class="row">

      <div class="col">
        <img src="imagelogo.png" class="logo-footer" alt="img/imagelogo.png">
        <p class="shoppeal">Shoppeal Tech  India's Top 10 E- Learning Startup Recognize by SiliconIndia StartUp City Since 2021</p>     
       </div>

      <div class="col">
        <h3>Contact support
        <div class="underline"><span></span></div>
        </h3>
        <p class="phone-number"> <i class="fas fa-phone"></i><a href="tel:+917304663195" class="phone-number">+91 7304663195</a></p>
        <p class="email-id"> <i class="fas fa-envelope"></i><a href="mailto:support@shoppealtech.com" class="email-id"> support@shoppealtech.com </a></p>
        <p> <i class="fas fa-map-marked-alt"></i>Kalyan,Maharashtra - 421306</p>
        <!-- <p class="address"> Kalyan </p>
        <p class="address">Maharashtra - 421306</p>
        <p class="email-id">support@shoppealtech.com</p>
        <p class="phone-number">+917304663195</p> -->
      </div>

      <div class="col">
        <h3>Social Media
          <div class="underline"><span></span></div>
        </h3>
        <div class="social-icon">
          <a href="https://www.linkedin.com/company/shoppeal/mycompany" class="fa fa-linkedin"  ></a>&emsp;
          <a href="https://m.facebook.com/profile.php?id=100064126540125&_rdr" class="fa fa-facebook"></a>
          <br> <br>
          <a href=" #" class="fa fa-twitter"></a>&emsp;
          <a href="#" class="fa fa-instagram"></a>
         </div>
      </div>

      <div class="col">
        <h3>Links
        <div class="underline"><span></span></div>
        </h3><ul>
        <li><div><a href="https://shoppealtech.com/">Home</a></div></li>
        <li><div><a href="helpdesk.html">Help Desk</a> </div></li>
        <li><div><a href="https://shoppealtech.com/aboutus.html">About</a></div></li>
        <li><div><a href="https://shoppealtech.com/service.html">Service</a></div></li>
       </ul>  
      </div>
    </div>  
    </div>
    <hr>
    <p class="copyright">Shoppeal Tech ??2023 - All Rights Reserved</p>
     </div>
    </footer>
</body>
</html>
