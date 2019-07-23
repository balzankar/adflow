<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<ul>
  <li>
    <div class="sideprofile">
         <div class="jumbotron text-center bg-red">
                <img class="img-circle img-size-2" src="uploads/users/<?php echo $user['image'];?>" alt="">
                <h3><?php echo remove_junk($user['name']); ?></h3>
                <span class="badge badge-pill bg-blue ">Administrator</span>
         </div>
    </div>
  </li>
    
  <li>
    <a href="admin.php">
      <i class="glyphicon glyphicon-home"></i>
      <span>Dashboard</span>
    </a>
  </li>
    
  <li>
    <a href="ads.php">
      <i class="glyphicon glyphicon-book"></i>
      <span>Ads for You</span>
    </a>
  </li>


  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-large"></i>
      <span>Ad Management</span>
    </a>
    <ul class="nav submenu">
       <li><a href="category.php">Categories</a> </li>
       <li><a href="manufacturers.php">Manufacturers</a> </li>
       <li><a href="product.php">Manage Ads</a> </li>
       <li><a href="add_product.php">Create Ads</a> </li>
   </ul>
  </li>
   <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-search"></i>
      <span>Third Party Search</span>
    </a>
    <ul class="nav submenu">
       <li><a href="search.php">Search</a> </li>
       <li><a href="allsearch.php">All Recent Searches</a> </li>
   </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-th-list"></i>
       <span>Third Party Sales</span>
      </a>
      <ul class="nav submenu">
         <li><a href="sales.php">Manage Sales</a> </li>
         <li><a href="add_sale.php">Orders</a> </li>
     </ul>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-signal"></i>
       <span>Ad Report</span>
      </a>
      <ul class="nav submenu">
        <li><a href="sales_report.php">Sales by dates </a></li>
        <li><a href="monthly_sales.php">Monthly sales</a></li>
        <li><a href="daily_sales.php">Daily sales</a> </li>
      </ul>
  </li>
      <li>
    <a href="media.php" >
      <i class="glyphicon glyphicon-picture"></i>
      <span>Banner Ads</span>
    </a>
  </li>
      <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-user"></i>
      <span>User Management</span>
    </a>
    <ul class="nav submenu">
      <li><a href="group.php">Manage Groups</a> </li>
      <li><a href="users.php">Manage Users</a> </li>
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