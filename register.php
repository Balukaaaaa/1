<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Tirkelu</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Tirkelu</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Esiminiz</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Qynia soz</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Qypia sozdi qaitalanyz</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Tirkeu</button>
  	</div>
  	<p>
  		Tikelqensiz be? <a href="login.php">Kiru</a>
  	</p>
  </form>
</body>
</html>