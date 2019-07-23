<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  $page_title = 'Search';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  ?>
<?php include_once('layouts/header.php'); 
  $username = $user['username'];
  $all_search = find_allusersearch_desc($username);
?>

<?php
 if(isset($_POST['add_search'])){
   $req_field = array('search-name');
   validate_fields($req_field);
   $search_name = remove_junk($db->escape($_POST['search-name']));
   if(empty($errors)){
      $sql  = "INSERT INTO search (name)";
      $sql .= " VALUES ('{$search_name}')";
      if($db->query($sql)){
        $session->msg("s", "Complete");
        redirect('search.php',false);
      } else {
        $session->msg("d", "Sorry Failed to insert.");
        redirect('search.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('search.php',false);
   }
 }
?>

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
          <span>Modify Search History</span>
      </div>
        <div class="panel-body table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Searches</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_search as $search):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($search['name'])); ?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="delete_search.php?id=<?php echo (int)$search['id'];?>"  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
                          <span class="glyphicon glyphicon-trash"></span>
                        </a>
                      </div>
                    </td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
       </div>
    </div>
    </div>
   </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->