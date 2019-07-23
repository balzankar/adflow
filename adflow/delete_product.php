<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
?>
<?php
  $product = find_by_id('products',(int)$_GET['id']);
  if(!$product){
    $session->msg("d","Missing Ad id.");
    redirect('product.php');
  }
?>
<?php
  $delete_id = delete_by_id('products',(int)$product['id']);
  if($delete_id){
      $session->msg("s","Ad deleted.");
      redirect('product.php');
  } else {
      $session->msg("d","Ad deletion failed.");
      redirect('product.php');
  }
?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->