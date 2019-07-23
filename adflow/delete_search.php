<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
?>
<?php
  $search = find_by_id('search',(int)$_GET['id']);
  if(!$search){
    $session->msg("d","Missing Search id.");
    redirect('editsearch.php');
  }
?>
<?php
  $delete_id = delete_by_id('search',(int)$search['id']);
  if($delete_id){
      $session->msg("s","Search Removed.");
      redirect('editsearch.php');
  } else {
      $session->msg("d","Search deletion failed.");
      redirect('editsearch.php');
  }
?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->