
        <header id="header-content"  class="" >
          <div class="header-top">
            <div class="container">
              <div class="top">
                <div class="col-md-6 col-sm-6 col-xs-12 text-left hidden-xs">
                  
                  <div class="header-top-text">
                    
                    <a class="tel">+8 800 656 48 27</a>Free Shipping on All Prders over $200!
                              
                  </div>
                  
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 text-right">
                  <?php if($this->session->userdata('oauth_uid') !='') {  ?>
                  <div class="wishlist">
                    <a href="<?= base_url('Create-Item'); ?>" title="List Item" >List Item</a>
                  
                  </div>
                  <div class="wishlist">
                    <a href="#" title="Request for item" data-toggle="modal" data-target="#myModal">Request for item</a>
                  
                  </div>
                  <div class="top-currency">
                    <span class="text-log"><span ><?php echo $user_details->first_name; ?> <?php echo $user_details->last_name; ?></span> <i class="fa fa-caret-down" aria-hidden="true"></i></span>
                    <div class="top-bar-dropdown">
                      <div class="cusstom-link">
                        <ul class="customer-links">
                          <li><i class="icon_check_alt" aria-hidden="true"></i><a href="<?= base_url('Order'); ?>"><span >Orders</span></a></li>
                          <li><i class="icon_check_alt" aria-hidden="true"></i><a href="<?= base_url('Dashboard'); ?>"><span >Dashboard</span></a></li>
                          <li><i class="icon_check_alt" aria-hidden="true"></i><a href="<?= base_url('Profile') ?>"><span >Profile</span></a></li>
                          <li><i class="icon_check_alt" aria-hidden="true"></i><a href="<?= base_url('Logout') ?>"><span >Logout</span></a></li>
                        </ul>
                      </div>
                    </div>

                  </div>
                  <div class="wishlist">
                    <a href="<?= base_url('Notifications'); ?>" title="My Wishlist" >Cart</a>
                  </div>
                  <div class="wishlist">
                    <a href="pages/wish-list.html" title="My Wishlist" >My Request Item</a>
                  </div>
                  <?php } else{ ?>
                    <div class="wishlist" data-toggle="modal" data-target="#exampleModal">
                    <a href="#" title="My Wishlist" >Sign Up</a>
                  
                  </div>
                  <div class="wishlist" data-toggle="modal" data-target="#exampleModal1">
                    <a href="#" title="My Wishlist" >Login</a>
                  
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
                        
          <div class="header">
            <div class="header-body">
              <div class="container">
                <div class="row">
              <div class="col-xs-4 toggle-menu">
                <button class="navbar-toggle btn-menu-canvas" data-toggle="offcanvas" data-target="#off-canvas-nav">
                  <i class="icon_menu"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-4 logo-container">
                <div class="logo-sticky">
                <a href="index.html"><img src="<?= base_url('assets/customer_assets/files/1/1498/2346/files/Header-H1_400xc01c.png?v=1484231860');?>" alt="bigsale-01" /></a>
                </div>
                <div class="logo">
                  <h1><a href="<?= base_url('welcome'); ?>"><img src="<?= base_url() ?>assets/logo/logo.png" srcset="<?= base_url() ?>assets/logo/logo.png" alt="OLSO" itemprop="logo" style="width: 52%;height: 50px;"></a></h1>
                  <h1 style="display:none">
                    <a href="index.html">
                      bigsale-01
                    </a>
                  </h1>
                </div>
              </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 menu-none">
                    <div id="search-top">
                <div class="icon-search search-header">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <div class="search-form" style="display:none">
                  <div class="search-close">
                    <i class="icon_close"></i>
                  </div>
                  <form action="https://bigsale-01.myshopify.com/search" method="get" class="input-group search-bar">
                  
                    <input type="hidden" name="type" value="product">

                    <input type="text" name="q" value="" placeholder="Search" class="input-group-field" aria-label="Search Site" autocomplete="off">
                    <span class="input-group-btn">
                      <input type="submit" class="btn"  value="Search">
                    </span>
                  </form>
                </div>
                    </div>
                    
                  </div>
                  <div class="col-md-3 col-sm-3 col-xs-4 search-right">
                    
                    <div id="search-top" class="search-none search-header">
                      <div class="icon-search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                      </div>
                      <div class="search-close">
                        <i class="icon_close"></i>
                      </div>
                      <div class="search-form" style="display:none">

                        


                  <form action="https://bigsale-01.myshopify.com/search" method="get" class="input-group search-bar">
                    
                    <input type="hidden" name="type" value="product">

                    <input type="text" name="q" value="" placeholder="Search" class="input-group-field" aria-label="Search Site" autocomplete="off">
                    <span class="input-group-btn">
                      <input type="submit" class="btn"  value="Search">
                    </span>
                  </form>

                      </div>
                    </div>
                    
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>

        </header>

        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="background:#6059EE;">
            
          <button type="button" class="close" data-dismiss="modal" style="font-size: 40px;">&times;</button>
          <h4 class="modal-title">Request For Item</h4>
        </div>
        <form method="post" action="<?= base_url('Store-Request-For-Item'); ?>">
        <div class="modal-body">
              <div class="form-group col-md-6 float-left row">
                <label for="email">Category1:</label>
                <select class="form-control" name="cat_id" id="category" required>
                    <option value="">Choose Category...</option>
                     <?php foreach ($fetch_category as $category) { ?>
                    
                        <option value="<?php echo $category->cat_id; ?>"><?php echo $category->cat_name; ?></option>
                    
                    <?php } ?>
                </select>
              </div>
              <div class="form-group col-md-6 float-left">
                &nbsp;&nbsp;&nbsp;<label for="email">Category2:</label>
                <select class="form-control" name="subcat_id" id="subcat" required >
                    <option value="">Choose Sub-Category...</option>
                </select>
              </div>
              <div class="form-group">
                <label for="email">Address:</label>
                <textarea class="form-control" placeholder="Enter Your Address" name="address"></textarea>
              </div>
              <div class="form-group ">
                <label>Item Name : </label>
                 <input type="text" name="item_name" class="form-control" placeholder="Item Name" id="item_name"  minlength="3" required>
              </div>
              <div class="form-group col-md-6 float-left row">
                <label for="email">From:</label>
                <input type="date" name="req_from" class="form-control">
              </div>
              <div class="form-group col-md-6 float-left">
                &nbsp;&nbsp;&nbsp;<label for="email">To:</label>
                <input type="date" name="req_to" class="form-control">
              </div>
              <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" name="submit" class="btn btn-success">
        </div>
      </div>
      </form>
      
    </div>
  </div>

      <?php include('sign_up.php'); ?>

