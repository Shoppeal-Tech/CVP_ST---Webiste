<style>
    :root {
  background: #f5f6fa;
  color: #9c9c9c;
  font: 1rem "PT Sans", sans-serif;
}

a {
  color: inherit;
}
a:hover {
  color: #7f8ff4;
}



.uppercase {
  text-transform: uppercase;
}

.btn {
  display: inline-block;
  background: transparent;
  color: inherit;
  font: inherit;
  border: 0;
  outline: 0;
  padding: 0;
  transition: all 200ms ease-in;
  cursor: pointer;
}
.btn--primary {
  background: #7f8ff4;
  color: #fff;
  box-shadow: 0 0 10px 2px rgba(0, 0, 0, 0.1);
  border-radius: 2px;
  padding: 12px 36px;
}
.btn--primary:hover {
  background: #6c7ff2;
}
.btn--primary:active {
  background: #7f8ff4;
  box-shadow: inset 0 0 10px 2px rgba(0, 0, 0, 0.2);
}
.btn--inside {
  margin-left: -96px;
}
.form{
  margin: 120px;
}
.form__field {
  width: 360px;
  background: #fff;
  color: #a3a3a3;
  font: inherit;
  box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.1);
  border: 0;
  outline: 0;
  padding: 22px 18px;
}
.item{
    margin: 20px;
    padding: 0;
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
    $stmt = $db->prepare("SELECT * FROM certificate_tbl WHERE certificate_id = :textInput");
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
		<form class="form" method="post">
			<input class="form__field" name="textInput" placeholder="Enter Certificate Id" />
      <input type="submit" name="submit" class="btn btn--primary btn--inside uppercase" value="Validate">
			
		</form>
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
  <footer id="footer">
  </footer>
</body>
</html>