<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  $page_title = 'Search';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  include_once('layouts/header.php');
  $username = $user['username'];
  
  $s_ads = ad($username);
  $s_adsrelavant = adrelavant($username);
  $s_adsrecent = adrecent($username);
?>
<?php  ?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="row">
    <div class="col-md-4 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
          <span class="glyphicon glyphicon-th"></span>
          <span>Most Recent Ads for <?php echo $user['name']; ?></span>
      </div>
        <div class="panel-body">
              <?php foreach ($s_adsrecent as $ads1):?>
                    <div style="height:100%; width:100%;">
                     <div class="col-md-12 panel panel-default" style="height:300px;background-image: linear-gradient(to left, #BDBBBE 0%, #9D9EA3 100%), radial-gradient(88% 271%, rgba(255, 255, 255, 0.25) 0%, rgba(254, 254, 254, 0.25) 1%, rgba(0, 0, 0, 0.25) 100%), radial-gradient(50% 100%, rgba(255, 255, 255, 0.30) 0%, rgba(0, 0, 0, 0.30) 100%);
 background-blend-mode: normal, lighten, soft-light;">
                          <img src="uploads/products/adsby.png" style="width:100px;height:50px; bottom:20px;right:20px;position:absolute;" alt="...">
                          <a href="<?php echo remove_junk(ucfirst($ads1['url'])); ?>" target="_blank" ><h2 style="padding-left:10px;padding-right:20px;padding-top:20px; color:#fff;"><?php echo remove_junk(ucfirst($ads1['name'])); ?></h2></a>
                          <a href="<?php echo remove_junk(ucfirst($ads1['url'])); ?>" target="_blank" ><p  style="padding-left:10px;padding-bottom:20px; color:#fff;"><?php echo remove_junk(ucfirst($ads1['keywords'])); ?></p></a>
                     </div>
                    </div>
              <?php endforeach; ?>
       </div>
    </div>
    </div>
    
    <div class="col-md-4 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
          <span class="glyphicon glyphicon-th"></span>
          <span>Relavant Ads for <?php echo $user['name']; ?></span>
      </div>
        <div class="panel-body">
              <?php foreach ($s_adsrelavant as $ads1):?>
                    <div style="height:100%; width:100%;">
                     <div class="col-md-12 panel panel-default bg-blue" style="height:300px;background-image: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%);">
                          <img src="uploads/products/adsby.png"  style="width:100px;height:50px; bottom:20px;right:20px;position:absolute;" alt="...">
                          <a href="<?php echo remove_junk(ucfirst($ads1['url'])); ?>" target="_blank"><h2 style="padding-left:10px;padding-right:20px;padding-top:20px; color:#fff;"><?php echo remove_junk(ucfirst($ads1['name'])); ?></h2></a>
                          <a href="<?php echo remove_junk(ucfirst($ads1['url'])); ?>"  target="_blank"><p  style="padding-left:10px;padding-bottom:20px; color:#fff;"><?php echo remove_junk(ucfirst($ads1['keywords'])); ?></p></a>
                     </div>
                    </div>
              <?php endforeach; ?>
       </div>
    </div>
    </div>

    <div class="col-md-4 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
          <span class="glyphicon glyphicon-th"></span>
          <span>All Segmented Ads for <?php echo $user['name']; ?></span>
      </div>
        <div class="panel-body">
              <?php foreach ($s_ads as $ads):?>
                     <div class="col-md-12" style="height:100%; width:100%;padding-bottom:5px;">                     
                         <div class="col-md-12" style="border:2px solid #DEDDDD;">

                          <a href="<?php echo remove_junk(ucfirst($ads['url'])); ?>" target="_blank"><h3 style="padding-left:10px;padding-right:20px; color:#000;"><?php echo remove_junk(ucfirst($ads['name'])); ?></h3></a>
                          <a href="<?php echo remove_junk(ucfirst($ads['url'])); ?>" target="_blank"><p  style="padding-left:10px;padding-bottom:20px;"><?php echo remove_junk(ucfirst($ads['keywords'])); ?></p></a>
                         </div>
                     </div>
              <?php endforeach; ?>
       </div>
    </div>
    </div>
   </div>
  <?php include_once('layouts/footer.php'); ?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->