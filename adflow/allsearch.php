<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  $page_title = 'Search';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(3);
  
  $all_search = find_all_desc('search')
?>
<?php include_once('layouts/header.php'); ?>

  <div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
  </div>
   <div class="row">
    <div class="col-md-12 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
          <span class="glyphicon glyphicon-th"></span>
          <span>All Search History</span>
          <a class="btn btn-primary pull-right" href="editsearch.php">Edit Search History</a>
      </div>
        <div class="panel-body table-responsive">
          <table id="datatable" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Recent Searches</th>
                    <th>Retail Partner</th>
                    <th>User</th>
                    <th style="width: 150px;" >Time</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($all_search as $search):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($search['name'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($search['retailer'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($search['user'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($search['time'])); ?></td>

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