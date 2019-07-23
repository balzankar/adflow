<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('index.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-6 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
         <span>About</span>
      </div>
        <div class="panel-body">
            <img class="logo headerlogo pull-left" src="libs/images/logo.png" alt="logo"/>
            <span class="text-danger">AdFlow Admin</span>
            <span class="">v2.02 Beta <br/>
                Developed by Bal World Technologies<br/>with <i class="text-danger glyphicon glyphicon-heart"></i> in Thrissur<br/><br>
                last updated on 11 June 2019<br/><br/>
                <button class="btn btn-success" onclick="updatemsg()">Check for Updates</button>
                <a href="http://www.balworld.in" target="_blank" class="btn btn-primary">Visit Bal World</a><br/>
                <br/><p class="text-success" id="msgalert"></p>
            </span>
        </div>
     </div>
  </div>
 </div>
<?php include_once('layouts/footer.php'); ?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->