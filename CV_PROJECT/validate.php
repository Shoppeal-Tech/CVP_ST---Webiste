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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>CERTIFICATE VERIFICATION</title>
</head>
<body>
  
  <div id = "container">
    <div id ="main">
    <div class="container__item item">
    <?php
if (isset($_POST['submit'])) {
    $textInput = $_POST['textInput'];
    $db = new PDO('mysql:host=localhost;dbname=certificate', 'root', '');
    $stmt = $db->prepare("SELECT * FROM certificate_tbl WHERE certificate_id = :textInput or certificate_link=:textInput");
    $stmt->execute(['textInput' => $textInput]);
    $result = $stmt->fetch();
    if($result) {
      ?>
      <script>
        Swal.fire({
      icon: 'success',
      title: 'Validated',
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
			<input name="textInput" placeholder="Enter Certificate Link or Id" />
            <button type="submit" name="submit"  value="Validate">Validate</button>
			
      
		</form>
        </div>
    <script>
  function submitForm() {
    // Code to submit form
    ...
    // Show success message
    Swal.fire({
      icon: 'success',
      title: 'Form Submitted',
      text: 'Thank you for your submission!',
    })
  }
</script>
	</div>
    </div>
  </div>
</body>
</html>
