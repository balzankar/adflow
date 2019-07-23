<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php $user = current_user(); ?>
<!DOCTYPE html>
  <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php if (!empty($page_title))
           echo remove_junk($page_title);
            elseif(!empty($user))
            echo ucfirst($user['name']);
            else echo "AdFlow";?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />
    <link rel="stylesheet" href="libs/css/animate.css" />
    <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.min.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-device-width: 320px) and (max-device-width: 700px)" href="libs/css/mob.css" />
    <link rel="stylesheet" type="text/css" media="screen and (min-device-width: 701px)" href="libs/css/main.css" />
  </head>
  <body>
  <?php  if ($session->isUserLoggedIn(true)): 
   $c_categorie     = count_by_id('categories');
   $c_product       = count_by_id('products');
   $c_sale          = count_by_id('sales');
   $c_user          = count_by_id('users');
   $c_manu          = count_by_id('manu');    
   $c_search        = count_by_id('search');    
  ?>
    <header id="header">
      <div><img class="logo headerlogo pull-left" src="libs/images/logo.png" alt="logo"/></div>
      <div class="header-content">
      <div class="header-date pull-left hidden-xs">
        <strong><?php echo date("F j, Y, g:i a");?></strong>
      </div>
      <div class="pull-right clearfix">
        <ul class="info-menu list-inline list-unstyled">
        <li class="hidden-xs">
        <a href="#">
          <i class="btn btn-success disabled glyphicon glyphicon-envelope"></i>
        </a>
        </li>
        <?php if($user['user_level'] === '1'): ?>
        <!-- admin menu -->
       <?php include_once('headerelements.php');?>       
       <?php endif;?>
        <li class="profile" id="profile">
            <a href="#" data-toggle="dropdown" class="toggle" aria-expanded="false">
              <img src="uploads/users/<?php echo $user['image'];?>" alt="user-image" class="img-circle img-inline">
              <span class="hidden-xs"><?php echo remove_junk(ucfirst($user['username'])); ?> </span><i class="caret"></i>
            </a>
            <ul class="dropdown-menu pull-right animated bounceIn">
              <li>
                  <a href="profile.php?id=<?php echo (int)$user['id'];?>">
                      <i class="glyphicon glyphicon-user"></i>
                      Profile
                  </a>
              </li>
             <li>
                 <a href="edit_account.php" title="edit account">
                     <i class="glyphicon glyphicon-cog"></i>
                     Settings
                 </a>
             </li>
             <li class="last">
                 <a href="logout.php">
                     <i class="glyphicon glyphicon-off"></i>
                     Logout
                 </a>
             </li>
           </ul>
          </li>
        </ul>
      </div>
     </div>
    </header>
      
    <div id="mySidenav" class="sidebar" data-simplebar>
      <p href="javascript:void(0)" class="closebtn hidden-md hidden-lg" onclick="closeNav()">&times;</p>
      <?php if($user['user_level'] === '1'): ?>
        <!-- admin menu -->
      <?php include_once('admin_menu.php');?>

      <?php elseif($user['user_level'] === '2'): ?>
        <!-- Special user -->
      <?php include_once('special_menu.php');?>

      <?php elseif($user['user_level'] === '3'): ?>
        <!-- User menu -->
      <?php include_once('user_menu.php');?>

      <?php endif;?>

   </div>
<?php endif;?>
      
<div class="page animated fadeIn">
  <div data-simplebar class="container-fluid">
           <div class="row hidden-md hidden-lg" style="padding-bottom:15px;padding-left:15px;">
               <button style="cursor:pointer;color:#fff;" class="btn btn-primary" onclick="openNav()">
                   <span class="glyphicon glyphicon-menu-hamburger"></span> Menu</button>
           </div>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->