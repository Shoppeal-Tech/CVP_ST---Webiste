<?php require_once("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Poppins"
    />
  <title>CERTIFICATE VERIFICATION</title>
  <style>

    label, button {
      font-size: 16px;
      cursor: pointer;
    }

    input, textarea {
      border: 3px solid black;
      padding: .4em 1em;
      border-radius: 6px;
    }

    form {
      display: grid;
      grid-row-gap: 0px;
      justify-content: center;
    }

    button {
      margin-top: 10px;
      background: #00b6d8;
      color: black;
      padding: 10px 0;
      border: 0;
      border-radius: 6px;
    }
    .box
{
  width: 450px;
  margin: 4px auto;
  padding: 2px;
  background-color: #eaab00; /* gold */
  /* Single pixel data uri image http://jsfiddle.net/LPxrT/ 
  /* background-image: gold, gold, white */
  background-image: url('data:image/gif;base64,R0lGODlhAQABAPAAAOqrAP///yH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='),  url('data:image/gif;base64,R0lGODlhAQABAPAAAOqrAP///yH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=='),
url('data:image/gif;base64,R0lGODlhAQABAPAAAP///////yH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==');
  background-repeat: no-repeat;
  background-size: 0 2px, 0 100%, 0% 2px;
  background-position: top center, top center, bottom center;
  -webkit-animation: drawBorderFromCenter 4s;
}

.content
{
  background: white;
  padding: 3em;
  text-align: center;
  text-transform: uppercase;
}


/* Chrome, Safari, Opera */
@-webkit-keyframes drawBorderFromCenter {
    0% {
      background-size: 0 2px, 0 0, 100% 100%;
    }
    20% {
      background-size: 100% 2px, 100% 0, 100% 100%;
    }
    66%
    {
      background-size: 100% 2px, 100% 98%, 100% 100%;
    }
    99%
    {
      background-size: 100% 2px, 100% 98%, 0 2px;
    }
}

</style>
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
    $res=mysqli_query($db,"SELECT * from items WHERE id=$textInput");
    if(mysqli_num_rows($res) > 0) {
        $k="uploads/";
        $row=mysqli_fetch_array($res)
      ?>
      <script>
        Swal.fire({
      icon: 'success',
      title: 'Validated',
      html:
    'You can <b>download certificate</b> by clicking the link, ' +
    '<a href="download.php?id=' + <?php echo $row['id']; ?> + '">here</a> ',
      imageUrl: "<?php echo $k.$row['image']; ?>",
    imageWidth: 550,
    imageHeight: 225,
    imageAlt: "Eagle Image",
    
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
        <p class="phone-number"> <i1 class="fas fa-phone"></i1><a href="tel:+917304663195" class="phone-number">+91 7304663195</a></p>
        <p class="email-id"> <i1 class="fas fa-envelope"></i1><a href="mailto:support@shoppealtech.com" class="email-id"> support@shoppealtech.com </a></p>
        <p> <i1 class="fas fa-map-marked-alt"></i1>Kalyan,Maharashtra - 421306</p>
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
          <a href="https://www.linkedin.com/company/shoppeal/mycompany" class="fa fa-linkedin"></a>
          <a href="https://m.facebook.com/profile.php?id=100064126540125&_rdr" class="fa fa-facebook"></a>
          <br><br>
          <a href=" #" class="fa fa-twitter"></a>
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
    <p class="copyright">Shoppeal Tech ©2023 - All Rights Reserved</p>
     </div>
    </footer>
</body>
</html>
