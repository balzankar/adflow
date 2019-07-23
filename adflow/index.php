<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  ob_start();
  $page_title = 'AdFlow';
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('about.php', false);}
?>
<body style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1); background-repeat: no-repeat; background-attachment: fixed;">
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="login-page panellogin panel-body animated bounceIn">
    <div class="text-center spacer">
        <img class="loginlogo" src="libs/images/logo.png">
       <p>Sign in to start your session</p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth_v2.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="password">
        </div>
        <div class="form-group">
        <button type="submit" class="btn btn-primary scale pull-right">Login</button>
        </div>
          <a href="register.php">New user ?</a>
    </form>
</div>
</div>
</div>
</body>
<?php include_once('layouts/header_login.php'); ?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->