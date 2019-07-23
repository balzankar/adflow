<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->
<li class="profile">
        <a href="#" data-toggle="dropdown" class="dropdown" aria-expanded="false">
          <i class="btn btn-primary glyphicon glyphicon-bell"></i>
        </a>
           <ul class="dropdown-menu animated bounceIn pull-right">
              <li>
                  <a href="./manufacturers.php">
                      <i class="glyphicon glyphicon-check"></i>
                      <?php  echo $c_manu['total']; ?> New Manufacturers.
                  </a>
              </li>
             <li>
                 <a href="./users.php" title="edit account">
                     <i class="glyphicon glyphicon-user"></i>
                     5 New Customers.
                 </a>
             </li> 
            <li>
                 <a href="./product.php" title="edit account">
                     <i class="glyphicon glyphicon-th"></i>
                     <?php  echo $c_product['total']; ?> Active Ads.
                 </a>
             </li>
             <li class="last">
                 <a href="./allsearch.php">
                     <i class="glyphicon glyphicon-search"></i>
                     <?php  echo $c_search['total']; ?> Total Searches.
                 </a>
             </li>
           </ul>
        </li>  
<!-- Designed and Developed by Bal Sankar E | Bal World Technologies
www.balworld.in -->