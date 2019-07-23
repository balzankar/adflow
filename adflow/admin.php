<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<?php
  $page_title = 'AdFlow Admin Home Page';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php
 $c_categorie     = count_by_id('categories');
 $c_product       = count_by_id('products');
 $c_sale          = count_by_id('sales');
 $c_user          = count_by_id('users');
 $c_manu          = count_by_id('manu');
 $products_sold   = find_higest_saleing_product('10');
 $recent_products = find_recent_product_added('5');
 $recent_sales    = find_recent_sale_added('5');
 $recent_search    = find_recent_search('5');
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
   <div class="col-md-12">
     <?php echo display_msg($msg); ?>
   </div>
</div>
  <div class="row">
    <div class="col-md-3 col-sm-6">
       <div class="panel panel-box clearfix"><a href="users.php" title="Users">
         <div class="panel-icon pull-left bg-green">
          <i class="glyphicon glyphicon-user"></i>
           </div></a>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $c_user['total']; ?> </h2>
          <p class="text-muted">Users</p>
        </div>
       </div>
      </div>
    <div class="col-md-3 col-sm-6">
       <div class="panel panel-box clearfix"><a href="category.php" title="Categories">
         <div class="panel-icon pull-left bg-red">
          <i class="glyphicon glyphicon-list"></i>
        </div></a>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $c_categorie['total']; ?> </h2>
          <p class="text-muted">Categories</p>
        </div>
       </div>
    </div>
    <div class="col-md-3 col-sm-6">
       <div class="panel panel-box clearfix"><a href="product.php" title="All Products">
         <div class="panel-icon pull-left bg-blue">
          <i class="glyphicon glyphicon-shopping-cart"></i>
        </div></a>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $c_product['total']; ?> </h2>
          <p class="text-muted">Ads</p>
        </div>
       </div>
    </div>
    <div class="col-md-3 col-sm-6">
       <div class="panel panel-box clearfix"><a href="sales.php" title="All Sales">
         <div class="panel-icon pull-left bg-yellow">
          <i class="glyphicon glyphicon-stats"></i>
        </div></a>
        <div class="panel-value pull-right">
          <h2 class="margin-top"> <?php  echo $c_sale['total']; ?></h2>
          <p class="text-muted">Sales</p>
        </div>
       </div>
    </div>
</div>
<!--
  <div class="row">
   <div class="col-md-6">
      <div class="panel">
        <div class="jumbotron text-center">
           <p> <strong>Incosys V2</strong> way more better then <strong> v1 </strong>.
           <br>powerd by BackDesk | Bal World Technologies.</p>

        </div>
      </div>
   </div>
  </div> -->

  <div class="row">   
  <?php
  $page_title = 'Search';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
  page_require_level(1);
  $all_search = find_all('search')
  ?>
      
   <div class="col-md-6 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          <span class="glyphicon glyphicon-th"></span>
          <span>AdFlow Recent Searches</span>        
          <a class="btn btn-warning pull-right" href="allsearch.php">View All search</a>
      </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>Recent Searches</th>
                    <th>Time Stamp</th>
                </tr>
            </thead>
            <tbody>
              <?php foreach ($recent_search as $search):?>
                <tr>
                    <td class="text-center"><?php echo count_id();?></td>
                    <td><?php echo remove_junk(ucfirst($search['name'])); ?></td>
                    <td><?php echo remove_junk(ucfirst($search['time'])); ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
       </div>
    </div>
    </div>
      
    <div class="col-md-6 col-sm-12">
     <div class="panel panel-default">
       <div class="panel-heading">
           <span class="glyphicon glyphicon-th"></span>
           <span>Highest Selling Ad Units</span>
       </div>
       <div class="panel-body table-responsive" >
         <table class="table table-striped table-bordered">
          <thead>
           <tr>
             <th>Title</th>
             <th>Total Sold</th>
             <th>Total Quantity</th>
           <tr>
          </thead>
          <tbody>
            <?php foreach ($products_sold as  $product_sold): ?>
              <tr>
                <td><?php echo remove_junk(first_character($product_sold['name'])); ?></td>
                <td><?php echo (int)$product_sold['totalSold']; ?></td>
                <td><?php echo (int)$product_sold['totalQty']; ?></td>
              </tr>
            <?php endforeach; ?>
          <tbody>
         </table>
       </div>
     </div>
   </div>
</div>

<div class="row">
   <div class="col-md-4 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          <span class="glyphicon glyphicon-th"></span>
          <span>Today's Treading Search Terms</span>
      </div>
        <div class="panel-body">
          <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1754_RC01/embed_loader.js"></script>
          <script type="text/javascript">trends.embed.renderWidget("dailytrends", "", {"geo":"IN","guestPath":"https://trends.google.com:443/trends/embed/"});
          </script>
       </div>
    </div>
    </div>
    
   <div class="col-md-4 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          <span class="glyphicon glyphicon-th"></span>
          <span>Top Search Queries</span>
      </div>
        <div class="panel-body">
          <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1754_RC01/embed_loader.js"></script>
          <script type="text/javascript">
            trends.embed.renderExploreWidget("RELATED_QUERIES", {"comparisonItem":[{"geo":"IN","time":"today 1-m"}],"category":0,"property":"froogle"}, {"exploreQuery":"date=today%201-m&geo=IN&gprop=froogle","guestPath":"https://trends.google.com:443/trends/embed/"});
          </script>
       </div>
    </div>
    </div>
      
   <div class="col-md-4 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          <span class="glyphicon glyphicon-th"></span>
          <span>Top Search Topics</span>
      </div>
        <div class="panel-body">
          <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1754_RC01/embed_loader.js"></script>
          <script type="text/javascript">
            trends.embed.renderExploreWidget("RELATED_TOPICS", {"comparisonItem":[{"geo":"IN","time":"today 1-m"}],"category":0,"property":"froogle"}, {"exploreQuery":"date=today%201-m&geo=IN&gprop=froogle","guestPath":"https://trends.google.com:443/trends/embed/"});
          </script>
       </div>
    </div>
    </div>
</div>   
      
<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          <span class="glyphicon glyphicon-th"></span>
          <span>Recently Added Ads</span>
      </div>
      <div class="panel-body">

        <div class="list-group">
      <?php foreach ($recent_products as  $recent_product): ?>
            <a class="list-group-item clearfix" href="edit_product.php?id=<?php echo    (int)$recent_product['id'];?>">
                <h4 class="list-group-item-heading">
                 <?php if($recent_product['media_id'] === '0'): ?>
                    <img class="img-admin" src="uploads/products/no_image.jpg" alt="">
                  <?php else: ?>
                  <img class="img-admin" src="uploads/products/<?php echo $recent_product['image'];?>" alt="" />
                <?php endif;?>
                <?php echo remove_junk(first_character($recent_product['name']));?>
                  <span class="label label-danger pull-right">
                 <?php echo remove_junk(first_character($recent_product['categorie'])); ?>
                  </span>
                </h4>
                <span class="list-group-item-text pull-right">
                <?php echo remove_junk(first_character($recent_product['keywords'])); ?>
              </span>
          </a>
      <?php endforeach; ?>
    </div>
  </div>
 </div>
</div>    
</div>

<?php include_once('layouts/footer.php'); ?>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->