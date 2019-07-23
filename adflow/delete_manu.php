<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
?>
<?php
  $manu = find_by_id('manu',(int)$_GET['id']);
  if(!$manu){
    $session->msg("d","Missing Advertisers id.");
    redirect('manufacturers.php');
  }
?>
<?php
  $delete_id = delete_by_id('manu',(int)$manu['id']);
  if($delete_id){
      $session->msg("s","Manufacturer deleted.");
      redirect('manufacturers.php');
  } else {
      $session->msg("d","Manufacturer deletion failed.");
      redirect('manufacturers.php');
  }
?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->