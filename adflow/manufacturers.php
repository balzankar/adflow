<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  $page_title = 'Mnaufactures';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(2);
  
  $all_manu = find_all('manu')
?>
<?php
 if(isset($_POST['add_manu'])){
   $req_field = array('manu-name');
   validate_fields($req_field);
   $manu_name = remove_junk($db->escape($_POST['manu-name']));
   if(empty($errors)){
      $sql  = "INSERT INTO manu (name)";
      $sql .= " VALUES ('{$manu_name}')";
      if($db->query($sql)){
        $session->msg("s", "New Advertiser Added");
        redirect('manufacturers.php',false);
      } else {
        $session->msg("d", "Sorry Failed to insert.");
        redirect('manufacturers.php',false);
      }
   } else {
     $session->msg("d", $errors);
     redirect('manufacturers.php',false);
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
    <div class="col-md-5">
      <div class="panel panel-default">
        <div class="panel-heading">
            <span class="glyphicon glyphicon-th"></span>
            <span>Add New Advertisers</span>
        </div>
        <div class="panel-body">
          <form method="post" action="manufacturers.php">
            <div class="form-group">
                <input type="text" class="form-control" name="manu-name" placeholder="Manufacturer Name">
            </div>
            <button type="submit" name="add_manu" class="btn btn-primary">Add Manufacturer</button>
        </form>
        </div>
      </div>
    </div>
    <div class="col-md-7">
    <div class="panel panel-default">
      <div class="panel-heading">
          <span class="glyphicon glyphicon-th"></span>
          <span>All Manufacturers</span>
      </div>
        <div class="panel-body table-responsive">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Manufacturers</th>
                    <th class="text-center" style="width: 100px;">Actions</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_manu as $manu):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($manu['name'])); ?></td>
                    <td class="text-center">
                      <div class="btn-group">
                        <a href="delete_manu.php?id=<?php echo (int)$manu['id'];?>"  class="btn btn-xs btn-danger" data-toggle="tooltip" title="Remove">
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
  <?php include_once('layouts/footer.php'); ?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->