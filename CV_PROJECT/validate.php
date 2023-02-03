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
I{
	position: absolute;
	width: 120px;
	height: 120px;
	border-radius: 50%;
	-webkit-animation: 'screen'  infinite;
  animation: 'screen'  infinite;
}


I:nth-child(1){
	top:20px;
	left:30px;
		background: -webkit-radial-gradient(center, ellipse cover,  rgba(2,226,252,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #02e2fc;
	animation-duration: 5s;
}

I:nth-child(2){
	top:420px;
	left:30px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(250,160,2,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #faa002;
	animation-duration: 21s;
}

I:nth-child(3){
	top:550px;
	left:880px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(20,252,2,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #14fc02;
	animation-duration: 5s;
}

I:nth-child(4){
	top:5px;
	left:1030px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(252,2,196,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #fc02c4;
	animation-duration: 4s;
}

I:nth-child(5){
	top:280px;
	left:12px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(139,44,148,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #8b2c94;
	animation-duration: 5s;
}

I:nth-child(6){
	top:550px;
	left:30px;
background: -webkit-radial-gradient(center, ellipse cover,  rgba(251,184,41,0.65) 0%,rgba(0,0,0,0) 100%);
box-shadow:0px 0px 5px 0px #FBB829; 
	animation-duration: 6s;
}

I:nth-child(7){
	top:650px;
	left:50px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(195,255,104,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #C3FF68; 
	animation-duration: 15s;
}

I:nth-child(8){
	top:20px;
	left:860px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,0,102,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #FF0066; 
	animation-duration: 5s;
}
I:nth-child(9){
	top:896px;
	left:132px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,255,0,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #FFFF00; 
	animation-duration: 13s;
}

I:nth-child(10){
	top:578px;
	left:357px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(127,175,27,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #7FAF1B; 
	animation-duration: 4s;
}

I:nth-child(11){
	top:380px;
	left:230px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(1,210,255,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #01D2FF; 
	animation-duration: 5s;
}

I:nth-child(12){
	top:570px;
	left:1100px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(237,247,255,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #EDF7FF; 
	animation-duration: 6s;
}

I:nth-child(13){
	top:600px;
	left:600px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(0,255,255,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #00FFFF; 
	animation-duration: 7s;
}

I:nth-child(14){
	top:200px;
	left:520px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(0,0,255,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #0000FF; 
	animation-duration: 14s;
}

I:nth-child(15){
	top:370px;
	left:500px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(16,225,228,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #10e1e4; 
	animation-duration: 9s;
}

I:nth-child(16){
	top:620px;
	left:730px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,51,0,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow:0px 0px 5px 0px #FF3300; 
	animation-duration: 3s;
}
I:nth-child(17){
	top:62px;
	left:330px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,234,232,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #FFEAE8;
	animation-duration: 4s;
}

I:nth-child(18){
	top:0px;
	left:250px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,229,0,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #FFE500;
	animation-duration: 5s;
}

I:nth-child(19){
	top:600px;
	left:180px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,102,153,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #FF6699;
	animation-duration: 6s;
}

I:nth-child(20){
	top:987px;
	left:13px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(84,156,204,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #549CCC;
	animation-duration: 7s;
}

I:nth-child(21){
	top:120px;
	left:930px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(184,175,3,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #B8AF03;
	animation-duration: 8s;
}

I:nth-child(22){
	top:80px;
	left:700px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(171,250,249,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #ABFAF9;
	animation-duration: 5s;
}

I:nth-child(23){
	top:350px;
	left:720px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(127,15,255,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #7F0FFF;
	animation-duration: 2s;
}

I:nth-child(24){
	top:997px;
	left:678px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(48,128,0,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #308000;
	animation-duration: 3s;
}

I:nth-child(25){
	top:714px;
	left:246px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,38,38,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #FF2626;
	animation-duration: 4s;
}

I:nth-child(26){
	top:0px;
	left:480px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(15,29,215,0.65) 0%,rgba(0,0,0,0) 100%);
box-shadow: 0px 0px 5px 0px #0F1DD7;
	animation-duration: 5s;
}

I:nth-child(27){
	top:456px;
	left:1000px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(51,102,153,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #336699;
	animation-duration: 6s;
}

I:nth-child(28){
	top:350px;
	left:865px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(70,172,255,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #46ACFF;
	animation-duration: 7s;
}

I:nth-child(29){
	top:100px;
	left:100px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(222,4,5,0.65) 0%,rgba(0,0,0,0) 100%);
box-shadow: 0px 0px 5px 0px #DE0405;
	animation-duration: 8s;
}

I:nth-child(30){
	top:1087px;
	left:722px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(77,254,21,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #4DFE15;
	animation-duration: 9s;
}

I:nth-child(31){
	width:200px;
	height:200px;
	top:795px;
	left:605px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(243,10,70,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #F30A46;
	animation-duration: 1s;
}

I:nth-child(32){
	top:234px;
	left:678px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(245,253,45,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #F5FD2D;
	animation-duration: 2s;
}

I:nth-child(33){
	top:270px;
	left:1230px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(178,0,255,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #B200FF;
	animation-duration: 3s;
}
I:nth-child(34){
	width:200px;
	height:200px;
	top:1126px;
	left:332px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(102,204,255,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #66CCFF;
	webkit-animation-duration: 4s;
}

I:nth-child(35){
	top:407px;
	left:83px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(20,243,175,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #14F3AF;
	animation-duration: 5s;
}

I:nth-child(36){
	width:200px;
	height:200px;
	top:176px;
	left:297px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(100,245,102,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #64F566;
	animation-duration: 6s;
}

I:nth-child(37){
	width:300px;
	height:300px;
	top:820px;
	right:10px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(236,218,65,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #ECDA41;
	animation-duration: 7s;
}

I:nth-child(38){
	top:500px;
	left:500px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,61,45,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #FF3D2D;
	animation-duration: 8s;
}


I:nth-child(39){
	top:20px;
	right:26px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(74,73,235,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #4A49EB;
	animation-duration: 9s;
}

I:nth-child(40){
	width:200px;
	height:200px;
	top:251px;
	left:1053px;
	background: -webkit-radial-gradient(center, ellipse cover,  rgba(255,72,0,0.65) 0%,rgba(0,0,0,0) 100%);
	box-shadow: 0px 0px 5px 0px #FF4800;
	animation-duration: 10s;
}


@keyframes screen {
	from {
		opacity: 0;
	}

	25%{
		opacity: 0.3;
		transform: scale3d(3, 3, 4);
	}

	50%{
		opacity: 0.75;
	}

	75%{
		opacity: 1;

	}

	to{
		opacity: 0;
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
    <nav class="navigation">
      <a class="navigation-link" href="register.html">Register</a>
      <a class="navigation-link" href="sign-in.html">Sign In</a>
    </nav>
  </header>

  <I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
<I></I>
  
  <div id = "container">
    <div id ="main">
    <div class="container__item item">
    <?php
if (isset($_POST['submit'])) {
    $textInput = $_POST['textInput'];
    $res=mysqli_query($db,"SELECT * from items WHERE id=$textInput");
    if($res) {
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
