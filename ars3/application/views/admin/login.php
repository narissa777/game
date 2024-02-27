<!DOCTYPE html>
<html>
<head>
	<title>Technolobal Bilişim</title>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/backend/assets/css/style.css'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
 <link rel="icon" href="<?php echo base_url('assets/backend/assets/img/favicon.ico'); ?>" type="icon">
 <script src="https://kit.fontawesome.com/a81368914c.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="<?php echo base_url('assets/backend/assets/img/wave.png'); ?>">
	<div class="container">
		<div class="img">
			<img src="<?php echo base_url('assets/backend/assets/img/bg.svg'); ?>">
		</div>
		<div class="login-content">
			<form method="POST" action="<?php echo base_url('Admin/loginislem'); ?>">
				<img src="<?php echo base_url('assets/backend/assets/img/technolobal.png'); ?>">
        <?php if($this->session->flashdata('error')){ echo "<div class='alert alert-danger'>".$this->session->flashdata('error')."</div>";} ?>
        <div style="padding-top: 35px;" class="input-div one">
          <div class="i">
            <i class="fas fa-user"></i>
          </div>
          <div class="div">
            <h5>E-Mail Adresiniz</h5>
            <input type="text" name="email" class="input">
          </div>
        </div>
        <div class="input-div pass">
          <div class="i"> 
            <i class="fas fa-lock"></i>
          </div>
          <div class="div">
            <h5>Şifreniz</h5>
            <input type="password" name="password" class="input">
          </div>
        </div>
        <a href="#">Şifrenizi Unuttunuz mu</a>
        <input type="submit" class="btn" value="Giriş Yap">
      </form>
    </div>
  </div>
  <script type="text/javascript">const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});</script>
</body>
</html>
