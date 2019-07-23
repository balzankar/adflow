<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  $page_title = 'Add User';
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('about.php', false);}
  // Checkin What level user has permission to view this page
  $groups = find_all('user_groups');
  $all_users = find_all_user();
?>
<?php
  if(isset($_POST['add_user'])){

   $req_fields = array('full-name','username','password','level','email' );
   validate_fields($req_fields);

   if(empty($errors)){
           $name   = remove_junk($db->escape($_POST['full-name']));
       $username   = remove_junk($db->escape($_POST['username']));
       $password   = remove_junk($db->escape($_POST['password']));
       $user_level = (int)$db->escape($_POST['level']);
       $email   = remove_junk($db->escape($_POST['email']));
       $password = sha1($password);
        $query = "INSERT INTO users (";
        $query .="name,username,password,user_level,status,email";
        $query .=") VALUES (";
        $query .=" '{$name}', '{$username}', '{$password}', '{$user_level}','1','{$email}'";
        $query .=")";
        if($db->query($query)){
          //sucess
          $session->msg('s',"User account has been created! Please Login");
          redirect('indexv2.php', false);
        }
        else {
          //failed
          $session->msg('d',' Sorry failed to create account!');
          redirect('register.php', false);
        }
          
   } else {
     $session->msg("d", $errors);
      redirect('register.php',false);
   }
 }
?>
<body style="background-image: linear-gradient(to right top, #d53369 0%, #daae51 100%); background-repeat: no-repeat; background-attachment: fixed;">
<div class="row">
<div class="col-md-12 col-sm-12">
  <div class="reg-page panellogin panel-body animated bounceIn">
     <div class="text-center spacer">
       <img class="loginlogo" src="libs/images/logo.png">
       <p>Register, Lets get started</p>
     </div>
        <?php echo display_msg($msg); ?>
          <form method="post" action="register.php">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="full-name" placeholder="Full Name">
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name ="password"  placeholder="Password">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name ="email"  placeholder="Email">
            </div>
            <div class="form-group">
              <label for="level">Account Type</label>
                <select class="form-control" name="level">
                   <option value="2">Advertiser</option>
                   <option value="3">User</option>
                </select>
            </div>
            <div class="form-group scale clearfix pull-right">
              <button type="submit" name="add_user" class="btn btn-primary">Register</button>
            </div>
          <a href="index.php" >Already a User ?</a>
        </form>
  </div>
</div>
</div></body>
<?php include_once('layouts/header_login.php'); ?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->