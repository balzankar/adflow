<?php
  $page_title = 'Search';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  $all_search = find_all('search');
?>

<?php
 if(isset($_POST['add_search'])){
   $req_field = array('search-name');
   validate_fields($req_field);
   $search_name = remove_junk($db->escape($_POST['search-name']));
   $user_name = remove_junk($db->escape($_POST['user-name']));
   if(empty($errors)){
      $sql  = "INSERT INTO search (name,user,retailer)";
      $sql .= " VALUES ('{$search_name}','{$user_name}','Flipkart India')";
      if($db->query($sql)){
        $session->msg("s", "Complete");
        redirect("place your search url here{$search_name}",false);
      } else {
        $session->msg("d", "Sorry Failed to insert.");
        redirect('search2.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('search2.php',false);
   }
 }
?>
<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="row">
    <div class="col-md-8">
      <div class="panel panel-default">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-th"></span>
            <span>Search</span>
        </div>
        <div class="panel-body">
          <form method="post" action="search2.php">
            <div class="form-group">
                <input type="text" class="form-control" name="search-name" placeholder="Search Flipkart India">
                <input type="hidden" class="form-control" name="user-name" value="<?php echo remove_junk($user['username']); ?>">
            </div>
            <button type="submit" name="add_search" class="btn btn-primary pull-right">Search</button>

        </form>
        </div>
      </div>
    </div>    
    <div class="col-md-4">
      <div class="panel panel-default">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-th"></span>
            <span>Select retail Partner</span>
        </div>
        <div class="panel-body">
          <form method="post" action="search.php">
            <div class="form-group">
                <select  type="text" class="form-control" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);" name="search-name" placeholder="retailers">
                    <option value="">Flipkart India</option>
                    <option value="search.php">Amazon India</option>
                </select>        
            </div>
        </form>
        </div>
      </div>
    </div>
   </div>
  <?php include_once('layouts/footer.php'); ?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->