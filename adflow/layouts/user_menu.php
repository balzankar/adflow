<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<ul>
   <li>
    <div class="sideprofile">
         <div class="jumbotron text-center bg-red">
                <img class="img-circle img-size-2" src="uploads/users/<?php echo $user['image'];?>" alt="">
                <h3><?php echo remove_junk($user['name']); ?></h3>
                <span class="badge badge-pill bg-green">User</span>
         </div>
    </div>
  </li>
        
  <li>
    <a href="ads.php">
      <i class="glyphicon glyphicon-book"></i>
      <span>Ads for You</span>
    </a>
  </li>
    
   <li>
    <a href="search.php">
      <i class="glyphicon glyphicon-search"></i>
      <span>Search</span>
    </a>
  </li> 
    <li>
    <a href="user_search.php">
      <i class="glyphicon glyphicon-calendar"></i>
      <span>My Search History</span>
    </a>
  </li>  
    <li>
    <a href="add_sale.php">
      <i class="glyphicon glyphicon-plus"></i>
      <span>Buy New Orders</span>
    </a>
  </li>
<li>
    <a href="sales.php">
      <i class="glyphicon glyphicon-pencil"></i>
      <span>Manage your Orders</span>
    </a>
  </li>
  <li>
    <a href="#" class="submenu-toggle">
      <i class="glyphicon glyphicon-list"></i>
       <span>My Sales Report</span>
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