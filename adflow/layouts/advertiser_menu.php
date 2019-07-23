<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<ul> 
   <li>
    <div class="sideprofile">
         <div class="jumbotron text-center bg-red">
                <img class="img-circle img-size-2" src="uploads/users/<?php echo $user['image'];?>" alt="">
                <h3><?php echo remove_junk($user['name']); ?></h3>
                <span class="badge badge-pill bg-yellow">Advertiser</span>
         </div>
    </div>
  </li>
    <li>
    <a href="product.php" >
      <i class="glyphicon glyphicon-ok"></i>
      <span>All Live Ads</span>
    </a>
  </li> 
    <li>
    <a href="add_product.php" >
      <i class="glyphicon glyphicon-plus"></i>
      <span>Create Ads</span>
    </a>
  </li>
    <li>
    <a href="category.php" >
      <i class="glyphicon glyphicon-th"></i>
      <span>Ad Categories</span>
    </a>
  </li>
      <li>
    <a href="manufacturers.php" >
      <i class="glyphicon glyphicon-briefcase"></i>
      <span>Manufacturers</span>
    </a>
  </li> 
    <li>
    <a href="media.php" >
      <i class="glyphicon glyphicon-picture"></i>
      <span>Banner Ads</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-tasks"></i>
       <span>Ads Report</span>
      </a>
      <ul class="nav submenu">
        <li><a href="sales_report.php">Sales by dates </a></li>
        <li><a href="monthly_sales.php">Monthly sales</a></li>
        <li><a href="daily_sales.php">Daily sales</a> </li>
      </ul>
  </li>
 <li>
    <a href="about.php" >
      <i class="glyphicon glyphicon-fire"></i>
      <span>About</span>
    </a>
  </li>
</ul>
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->