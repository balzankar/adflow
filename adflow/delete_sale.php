<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
?>
<?php
  $d_sale = find_by_id('sales',(int)$_GET['id']);
  if(!$d_sale){
    $session->msg("d","Missing order id.");
    redirect('sales.php');
  }
?>
<?php
  $delete_id = delete_by_id('sales',(int)$d_sale['id']);
  if($delete_id){
      $session->msg("s","Order deleted.");
      redirect('sales.php');
  } else {
      $session->msg("d","Order deletion failed.");
      redirect('sales.php');
  }
?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->