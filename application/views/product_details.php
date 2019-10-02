<?php
$_SESSION['url'] = "http://localhost".$_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html class="no-js">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

  <!-- Basic page needs ================================================== -->
  <meta charset="utf-8">

  <!-- Title and description ================================================== -->
  <title>
    Gontemporary Leopard Mini Dress &ndash; bigsale-01
  </title>

  
  <meta name="description" content="Sed risus neque, sagittis sed pellentesque at, pharetra ut nunc. Phasellus id enim eget ante pellentesque pharetra. Phasellus et nisl urna. Integer nisl dui, ef">
  
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- Helpers ================================================== -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Favicon -->
  
  <link rel="shortcut icon" href="" type="image/png">
  

  <!-- fonts -->
  

   

    <link href='https://fonts.googleapis.com/css?family=Times%20New%20Romam:300,300italic,400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arial:300,300italic,400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


      <!-- Styles -->
       
      <link href="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/bootstrap.mineffd.css?18048096476991624736');?>" rel="stylesheet" type="text/css" media="all" />

      

      <!-- Theme base and media queries -->


      <link href="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/owl.themeeffd.css?18048096476991624736');?>" rel="stylesheet" type="text/css" media="all" />

      <link href="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/jquery.fancyboxeffd.css?18048096476991624736');?>" rel="stylesheet" type="text/css" media="all" />
      <link href="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/componenteffd.css?18048096476991624736');?>" rel="stylesheet" type="text/css" media="all" />
      <link href="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/styleseffd.css?18048096476991624736');?>" rel="stylesheet" type="text/css" media="all" />
      <link href="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/styles-settingeffd.css?18048096476991624736');?>" rel="stylesheet" type="text/css" media="all" />
      <link href="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/responsiveeffd.css?18048096476991624736');?>" rel="stylesheet" type="text/css" media="all" />
      <link href="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/animateeffd.css?18048096476991624736');?>" rel="stylesheet" type="text/css" media="all" />
      <link href="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/font-iconeffd.css?18048096476991624736');?>" rel="stylesheet" type="text/css" media="all" />

      
      <link href="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/retina-responsiveeffd.css?18048096476991624736');?>" rel="stylesheet" type="text/css" media="all" />
      
      <link href="<?= base_url('assets/css/bootstrap-social.css');?>" rel="stylesheet" >
      <!-- Scripts -->
     <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
      <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/jquery-cookie.mineffd.js?18048096476991624736');?>" type="text/javascript"></script>
      <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/selectize.mineffd.js?18048096476991624736');?>" type="text/javascript"></script>
      <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/owl.carouseleffd.js?18048096476991624736');?>" type="text/javascript"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" />
   <style>
       
input[type="radio"] {
    display:none;
}

input[type="radio"] + label {
    color:black;
    font-family:Arial, sans-serif;
}

input[type="radio"] + label span {
    display:inline-block;
    width:19px;
    height:19px;
    margin:-2px 10px 0 0;
    vertical-align:middle;
    background:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/check_radio_sheet.png) -38px top no-repeat;
    cursor:pointer;
}

input[type="radio"]:checked + label span {
    background:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/210284/check_radio_sheet.png) -57px top no-repeat;
}

.datepicker-days table .disabled-date.day {
  background-color:white;
  color:gray;
   text-decoration: line-through;
}

.datepicker table tr td.disabled, 
.datepicker table tr td.disabled:hover {
  background: white;
  color:gray;
   text-decoration: line-through;
}


    </style>
</head>


<body id="gontemporary-leopard-mini-dress" class=" template-product " > 
  <div class="wrapper ">	   
    <div id="shopify-section-header" class="shopify-section">
	   <?php include("pages/header.php"); ?>
    </div>
     <?php 
        //fetch item owner ID
        $random_itemno = $random_itemno;
        $item_owner_sql = "select oauth_uid from create_item where random_itemno='$random_itemno'";
        $item_owner_data = $this->db->query($item_owner_sql)->row();

        //fetch item owner open_hours
        $owner_id = $item_owner_data->oauth_uid;
        
        $owner_open_hours_sql = "select open_from,open_to from open_hours where oauth_uid=$owner_id";
        $owner_open_hours_data = $this->db->query($owner_open_hours_sql)->row();

    ?>

    <div class="clearfix breadcrumb-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb">
              <h2>Hot Deal</h2>
              <a href="" title="Back to the frontpage" >Home</a>  
              <span class="icon"><i class="fa fa-circle"></i></span>  
              <a href="../../hot-deal.html" title=""><?php echo $product_details->cat_name; ?></a>
              <span class="icon"><i class="fa fa-circle"></i></span>  
              <a href="../../hot-deal.html" title=""><?php echo $product_details->subcat_name; ?></a>
              <span class="icon"><i class="fa fa-circle"></i></span>
              <strong>
                 <?php echo $product_details->subtype_name; ?>
              </strong>
            </div>
          </div>
        </div>
      </div>
    </div>
    <main class="container main-content">
      <div class="row" id="product">
        <div class="col-xs-12 col-main col-md-12 col-sm-12">
          <div itemscope itemtype="http://schema.org/Product" class="product">
            <div class="row">
              <div class="col-xs-12 col-md-5 col-sm-5 product-img-box">
                <a href="<?= base_url(''); ?>/<?php echo $product_details->item_image1?>" class="zoom" id="placeholder" >
                  <img id="product-featured-image" src="<?= base_url(''); ?>/<?php echo $product_details->item_image1?>" alt="<?php echo $product_details->item_name?>" data-zoom-image="<?= base_url(''); ?>/<?php echo $product_details->item_image1?>" style="width:483px; height:515px;"/>
                </a>
                <div id="zt_list_product" class="thumbs">
                  <div class="image-item">
                    <a href="javascript:void(0)" data-image="<?= base_url(''); ?>/<?php echo $product_details->item_image1?>" data-zoom-image="<?= base_url(''); ?>/<?php echo $product_details->item_image1?>">
                    <img src="<?= base_url(''); ?>/<?php echo $product_details->item_image1?>" alt="<?php echo $product_details->item_name?>">
                    </a>
                  </div>
                  <?php if($product_details->item_image2!=''){ ?>
                  <div class="image-item">
                    <a href="javascript:void(0)" data-image="<?= base_url(''); ?>/<?php echo $product_details->item_image2; ?>" data-zoom-image="<?= base_url(''); ?>/<?php echo $product_details->item_image2; ?>">
                    <img src="<?= base_url(''); ?>/<?php echo $product_details->item_image2; ?>" alt="<?php echo $product_details->item_name?>">
                    </a>
                  </div>
                  <?php } ?>
                  <?php if($product_details->item_image3!=''){ ?>
                  <div class="image-item">
                    <a href="javascript:void(0)" data-image="<?= base_url(''); ?>/<?php echo $product_details->item_image3; ?>" data-zoom-image="<?= base_url(''); ?>/<?php echo $product_details->item_image3; ?>">
                    <img src="<?= base_url(''); ?>/<?php echo $product_details->item_image3; ?>" alt="<?php echo $product_details->item_name?>">
                    </a>
                  </div>
                  <?php } ?>
                  <?php if($product_details->item_image4!=''){ ?>
                  <div class="image-item">
                    <a href="javascript:void(0)" data-image="<?= base_url(''); ?>/<?php echo $product_details->item_image4; ?>" data-zoom-image="<?= base_url(''); ?>/<?php echo $product_details->item_image4; ?>">
                      <img src="<?= base_url(''); ?>/<?php echo $product_details->item_image4; ?>" alt="<?php echo $product_details->item_name?>">
                    </a>
                  </div>
                  <?php } ?>
                  <?php if($product_details->item_image5!=''){ ?>
                  <div class="image-item">
                    <a href="javascript:void(0)" data-image="<?= base_url(''); ?>/<?php echo $product_details->item_image5; ?>" data-zoom-image="<?= base_url(''); ?>/<?php echo $product_details->item_image5; ?>">
                      <img src="<?= base_url(''); ?>/<?php echo $product_details->item_image5; ?>" alt="<?php echo $product_details->item_name?>">
                    </a>
                  </div>
                  <?php } ?>
                    
                </div>
                <div class="clearfix"></div><br>
                <div class="container">
                      <div class="row">
                        <a href="<?= base_url('profile') ?>/<?php echo $product_details->oauth_uid; ?>">
                            <img src="<?php echo $product_details->picture ?>" alt="Lender Image" style="width:50px;border-radius: 50%;">
                          </a>
                          <span style="font-size: 16px;font-weight:700; line-height: 1.5em;font-family: Mabry-Medium, Helvetica, Arial;margin-top: 0px;margin-bottom: 8px;color: rgb(17, 17, 17);"> <?php echo $product_details->first_name ?> <?php echo $product_details->last_name ?></span>
                      </div>
                     
                    </div>
              </div>
              <div class="col-xs-12 col-md-7 col-sm-7 product-shop">
                <div itemprop="offers" itemtype="http://schema.org/Offer">
                  <header class="product-title has-btn">
                    <h2 itemprop="name" style="text-transform: inherit;font-weight: bold;">
                      <?php echo $product_details->item_name; ?>
                    </h2>
                  </header>
                  <div class="star-price">
                    <div class="price-box">
                      <?php if($product_details->hr_price !=''){ ?>
                      <p class="row sale col-md-3">
                        <span class="special-price" itemprop="price">$45</span><br>
                        <label>a day</label>
                      </p>
                      <?php } ?>
                      <?php if($product_details->day_price !=''){ ?>
                      <p class="row sale col-md-3">
                        <span class="special-price" itemprop="price">$45</span><br>
                        <label>a hour</label>
                      </p>
                      <?php } ?>
                      <?php if($product_details->monthly_price !=''){ ?>
                      <p class="row sale col-md-3">
                        <span class="special-price" itemprop="price">$45</span><br>
                        <label>a month</label>
                      </p>
                      <?php } ?>
                    </div>
                  </div>
                  
                  <link itemprop="availability" href="http://schema.org/InStock">
                      <?php 
                          $time1 = explode(" ", $owner_open_hours_data->open_from);
                        
                          $time2 = explode(" ", $owner_open_hours_data->open_to);

                          $datetime1 = new DateTime($owner_open_hours_data->open_from);
                          $datetime2 = new DateTime($owner_open_hours_data->open_to);
                          $interval = $datetime1->diff($datetime2);
                          $total_time = round($interval->format('%hh %im'));
                          
                      ?>
                      <div class="short-description">
                        <div class="row col-md-12" style="margin-bottom: -25px;">
                         <h5 class="sidebar-title">When do you want it?<div class="s-border" style="width: 30px;height: 3px;background: #4d4d4d;margin-bottom: 30px;border-radius: 50px;"></div></h5>

                        </div>
                        <div class="">
                          <?php if($product_details->day_price!=''){ ?>
                              <button class="btn btn-primary" id="day_bt" >Day</button>
                          <?php } ?>
                          <?php if($product_details->hr_price!=''){ ?>
                              <button class="btn btn-primary" id="hrs_bt" >Hourly</button>
                          <?php } ?>
                          <?php if($product_details->monthly_price!=''){ ?>
                              <button class="btn btn-primary" id="month_bt" >Monthly</button>
                          <?php } ?>
                        </div>
                        <div id="day" style="display: none;">
                            <form method="post" action="<?= base_url('Request_condition/store_request_item_user') ?>">
                                <input type="hidden" name="item_id" value="<?php echo $product_details->item_id; ?>">
                                <input type="hidden" name="booking_name" value="day">
                                <input type="hidden" name="vendor_id" value="<?php echo $product_details->oauth_uid; ?>">
                                <br>
                                <div class="form-group col-md-5 row">
                                    
                                    <input id="from-date" type="text" name="start_date" class="form-control datepicker" placeholder="Start date" required="">
                                </div>
                                <div class="form-group col-md-5">
                                   
                                    <input id="to-date" type="text" name="end_date" class="form-control" placeholder="End date" required="">
                                </div>
                                <div class="form-group col-md-5 float-left row">
                                        <label>Pick Up:</label>
                                        <select class="form-control" id="item_recive_time" name="item_recive_time" required="">
                                            <option value="">Time</option>
                                            <?php
                                                
                                                $range=range(strtotime($time1[0]."AM"),strtotime($time2[0]."PM"),30*60);
                                            
                                                foreach($range as $time){
                                                        ?>
                                                            <option value="<?php echo date("g:i A",$time); ?>"><?php echo date("g:i A",$time); ?></option>
                                                        <?php
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-5 float-left row" style="margin-left:2px;">
                                        <label>Drop Off:</label>
                                        
                                            <select class="form-control" id="item_drop_time" name="item_drop_time" required="">
                                                <option value="">Time</option> 
                                            </select>
                                    </div>
                                     <div class="form-group col-md-6 row">
                                       <label id="total_day">
                                           
                                           <i class="fa fa-calendar" style="font-size:40px;"></i><span style="font-weight:bold;font-size: 16px;font-family: Mabry-Bold, Helvetica, Arial;margin-top: -24px;"> Check availability</span><p style="font-weight:bold;font-size: 16px;line-height: 1.5em;font-family: Mabry-Medium, Helvetica, Arial;color: rgb(118, 118, 118);">Check if the item is available on the dates you want.</p>
                                       </label>
                                    </div>
                                     <div class="form-group col-md-12 row" style="margin-top:-20px;">
                                       <div class="col-md-12 row" >
                                            <label class="col-md-5 row" id="total_day_and_price" style="float:left;border:1px solid white;">
                                               
                                            </label> 
                                            <label class="col-md-5" id="total_price" style="float:left; border:1px solid white;margin-left:30px;">
                                               
                                            </label>
                                            <div id="dicount_day_price">

                                            </div>
                                             
                                        </div>
                                        <br><br>
                                       
                                        <div id="hidden_part_day">
                                            
                                        </div>
                                        <br>
                                       
                                       <div class="col-md-12 row" id="total_amount"></div>

                                    </div>
                                    <div class="form-group col-md-12 row">
                                      <?php if($this->session->userdata('oauth_uid')!=''){ ?>
                                        
                                        <div class="detail" id="termcondi">
                                            
                                        </div>
                                        <br>
                                        <div class="container" id="user_req">
                                            
                                        </div>
                                        
                                    <?php }else{ ?>
                                        <div data-toggle="modal" data-target="#exampleModal1" style="border:1px solid #00aeef; background: #00aeef;font-weight: bold;padding:5px;margin-top: -2%">
                                            <a  href="#" style="color:white;"><center>Request to rent</center></a>
                                        </div>
                                    
                                    <?php } ?>
                                    </div>


                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <div id="hourly" style="display: none;">
                            <form method="post" action="<?= base_url('Request_condition/store_request_item_user') ?>">
                                <input type="hidden" name="item_id" value="<?php echo $product_details->item_id; ?>">
                                <input type="hidden" name="booking_name" value="hourly">
                                <input type="hidden" name="vendor_id" value="<?php echo $product_details->oauth_uid; ?>">
                                <br>
                                <div class="form-group col-md-5 row">
                                    <label>Select hours:</label>
                                    <select class="form-control" id="total_hours" name="total_hours">
                                        <option value="">Select hours</option>
                                        <?php foreach ($fetch_hours as $hours): ?>
                                            <option value="<?php echo $hours->hours_id;?>"><?php echo $hours->hours_name; ?> HRS</option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group col-md-5">
                                    <label>Select pick up date:</label>
                                    <input id="from-date" type="text" name="pickup_date" class="form-control datepicker" placeholder="From" required="">
                                </div>
                                
                                  <div class="form-group col-md-5 row">
                                      <label>Pick up time:</label>
                                      <select class="form-control" id="hour" name="item_recive_time">
                                          <option value="">Time</option>
                                          <?php
                                              
                                              $range=range(strtotime($time1[0]."AM"),strtotime($time2[0]."PM"),30*60);
                                          
                                              foreach($range as $time){
                                                      ?>
                                                          <option value="<?php echo date("g:i A",$time); ?>"><?php echo date("g:i A",$time); ?></option>
                                                      <?php
                                              }
                                              ?>
                                      </select>
                                      <div class="clearfix"></div>
                                  </div>
                                  <div class="clearfix"></div>
                                     
                                  <div class="form-group">
                                    <div class="col-md-10 row" id="hourly_price_show" >
                                         <i class="fa fa-calendar" style="font-size:40px;"></i><span style="font-weight:bold;font-size: 16px;font-family: Mabry-Bold, Helvetica, Arial;margin-top: -24px;"> Check availability</span><p style="font-weight:bold;font-size: 16px;line-height: 1.5em;font-family: Mabry-Medium, Helvetica, Arial;color: rgb(118, 118, 118);">Check if the item is available on the dates you want.</p>
                                    </div>
                                   
                                    <div class="form-group" >
                                        <?php if($this->session->userdata('oauth_uid')!=''){ ?>
                                            
                                        <?php }else{ ?>
                                        
                                        <?php } ?>
                                    </div>
                                </div>
                                


                                <div class="clearfix"></div>
                            </form>
                        </div>
                        <div id="monthly" style="display: none;">
                            <form method="post" action="<?= base_url('Request_condition/store_request_item_user') ?>">
                                <input type="hidden" name="item_id" value="<?php echo $product_details->item_id; ?>">
                                <input type="hidden" name="booking_name" value="monthly">
                                <input type="hidden" name="vendor_id" value="<?php echo $product_details->oauth_uid; ?>">
                                <br>
                                <div class="form-group">
                                
                                  <?php $i=0; foreach ($fetch_months as $month): ?>
                                      <input type="radio" id="<?php echo $month->month_id ?>" name="month_name" id="month_name" value="<?php echo $month->month_id ?>" >
                                      <label for="<?php echo $month->month_id ?>"><span></span><?php echo $month->month_name; ?> Month</label>     
                                  <?php $i++; endforeach ?>
                                
                               </div>
                               
                                  <div class="clearfix"></div>
                                     
                                  <div class="form-group">
                                    <div class="col-md-10 row" id="month_discount" >
                                         <i class="fa fa-calendar" style="font-size:40px;"></i><span style="font-weight:bold;font-size: 16px;font-family: Mabry-Bold, Helvetica, Arial;margin-top: -24px;"> Check availability</span><p style="font-weight:bold;font-size: 16px;line-height: 1.5em;font-family: Mabry-Medium, Helvetica, Arial;color: rgb(118, 118, 118);">Check if the item is available on the dates you want.</p>
                                    </div>
                                   
                                    <div class="form-group" >
                                        <?php if($this->session->userdata('oauth_uid')!=''){ ?>
                                            
                                        <?php }else{ ?>
                                        
                                        <?php } ?>
                                    </div>
                                </div>
                                


                                <div class="clearfix"></div>
                            </form>
                        </div>
                      </div>


                     
                     
                    </div>
                  </div>
                </div>
              </div>

              <div class="product-tabs ">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active">
                    <a data-toggle="tab" href="#collapse-tab1">
                      Description
                    </a>
                  </li>
                   <?php if($product_details->item_specification!=''){ ?>
                  <li>
                    <a data-toggle="tab" href="#collapse-tab2">
                      Specification
                    </a>
                  </li>
                  <?php } ?>
                  <li>
                    <a data-toggle="tab" href="#collapse-tab3">
                      Reviews
                    </a>
                  </li>
                 
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div id="collapse-tab1" class="tab-pane fade in active">
                    <p><?php echo $product_details->item_description ?></p>
                  </div>
                  <div id="collapse-tab2" class="tab-pane fade in active">
                    <p><?php echo $product_details->item_specification ?></p>
                  </div>
                  <div id="collapse-tab3" class="tab-pane fade">
                    <div id="shopify-product-reviews" data-id="8747958473"></div>
                  </div>
                </div>
              </div>
              <script>
                jQuery('#myTab a').click(function (e) {
                  e.preventDefault();
                  jQuery(this).tab('show');
                })
              </script>
              <script src="<?= base_url('assets/customer_assets/assets/themes_support/option_selection-f3dd7ba25bddfb6b0fe9addc0cae11dc709eeb6a469ec7f66f49e3abc4ce8c81.js');?>" type="text/javascript"></script>
            </div>
          </div>
          <script>
              jQuery(document).ready(function(){
                jQuery("#zt_list_product").owlCarousel({

                  itemsCustom : [
                    [320, 1],
                    [360, 2],
                    [450, 3],
                    [600, 3],
                    [700, 3],
                    [1000, 4],
                    [1200, 4],
                    [1400, 4],
                    [1600, 4]
                  ],
                  navigation : true,
                  navigationText : ['<i class="arrow_carrot-left"></i>','<i class="arrow_carrot-right"></i>']
                });
              });
              
              var selectCallback = function(variant, selector) {
                if (variant) {
                  jQuery('.variant-sku').text(variant.sku);
                }
                else {
                  jQuery('.variant-sku').empty();
                }

                if (variant && variant.featured_image) {
                }
                var addToCart = jQuery('#product-add-to-cart'),
                    productPrice = jQuery('.product .price'),
                    comparePrice = jQuery('.product .compare-price'),
                    skuproduct = jQuery('.product-sku');  

                var sku = jQuery('#product-selectors').find(':selected').attr('data-sku');
                jQuery('.product-sku').html(sku);
                if (variant) {
                  if (variant.available) {
                    // We have a valid product variant, so enable the submit button
                    addToCart.removeClass('disabled').removeAttr('disabled').val('Add to Cart');

                                                                                 } else {
                                                                                 // Variant is sold out, disable the submit button
                                                                                 addToCart.val('Sold Out').addClass('disabled').attr('disabled', 'disabled');
                                                                                 }

                                                                                 // Regardless of stock, update the product price
                                                                                 productPrice.html(Shopify.formatMoney(variant.price, "${{amount}}"));

                                                                                 // Also update and show the product's compare price if necessary
                                                                                 if ( variant.compare_at_price > variant.price ) {
                      productPrice.addClass("on-sale")
                      comparePrice
                      .html(Shopify.formatMoney(variant.compare_at_price, "${{amount}}"))
                                                .show();
                            } else {
                            comparePrice.hide();
                      productPrice.removeClass("on-sale");
                    }
                    
                    // BEGIN SWATCHES
                    var form = jQuery('#' + selector.domIdPrefix).closest('form');
                    for (var i=0,length=variant.options.length; i<length; i++) {
                      var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] +'"]');
                      if (radioButton.size()) {
                        radioButton.get(0).checked = true;
                      }
                    }
                    // END SWATCHES
                   
                  } else {
                    // The variant doesn't exist. Just a safeguard for errors, but disable the submit button anyway
                    addToCart.val('Unavailable').addClass('disabled').attr('disabled', 'disabled');
                                  }

                                  //update variant inventory
                                  
                                  if (variant.available) {
                      if (variant.inventory_management!=null) {
                        jQuery(".product-inventory span").text(variant.inventory_quantity + " in stock");
                                                               } else {
                                                               jQuery(".product-inventory span").text("Many in stock");
                                                                                                      }
                                                                                                      } else {
                                                                                                      jQuery(".product-inventory span").text("Out of stock");
                                                                                                                                             }
                                                                                                                                             
                    {
                          var originalImage = jQuery("#product-featured-image");
                          var newImage = variant.featured_image;
                          var element = originalImage[0];

                          function removeExtent(str){
                            var arr = str.split("v=");
                            if(arr[0])
                              return arr[0];
                          }

                          Shopify.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
                            jQuery('#zt_list_product img').each(function() {

                              var grandSize = jQuery(this).attr('src');
                              grandSize = grandSize.replace('_compact','');

                              grandSize = grandSize.replace('.jpg.jpg','.jpg');
                              grandSize = removeExtent(grandSize);

                              newImageSizedSrc = newImageSizedSrc.replace('gontemporary-leopard-mini-dress.html','');
                              newImageSizedSrc = newImageSizedSrc.replace('gontemporary-leopard-mini-dress.html','');
                              newImageSizedSrc = newImageSizedSrc.replace('_grande','');

                              newImageSizedSrc = newImageSizedSrc.replace('.jpg.jpg','.jpg');

                              newImageSizedSrc = removeExtent(newImageSizedSrc);

                              if (grandSize == newImageSizedSrc) {
                                jQuery(this).parent().trigger('click'); 
                                return false;
                              }
                            });
                          });        
                        }

                        /*end of variant image*/

                      };

                      jQuery(function($) {
                        $('.selector-wrapper').hide();
                        $('.single-option-selector:eq(0)').val("Default Title").trigger('change');
                          
                        var reviewsTimeout = setInterval(function() {
                          if (jQuery(".spr-badge-caption").length>0) {
                            jQuery(".spr-badge-caption").on('click', function() {
                              jQuery('html,body').animate({
                                scrollTop: jQuery(".panel:last").offset().top},
                                                          '400');
                              jQuery("#collapse-tab4").collapse('show');
                            });
                            clearInterval(reviewsTimeout);
                          }
                        },1000);
                      });
                      jQuery(document).ready(function($){
                        $('.up-qty').click(function(){
                          quantity =$('#quantity').val();
                          $('#quantity').val(parseInt(quantity) + 1);
                        });
                        $('.down-qty').click(function(){
                          quantity =$('#quantity').val();
                          if(quantity > 1)
                            $('#quantity').val(parseInt(quantity) - 1);
                        });

                      });

          </script>

          <section class="related-products">
            <h2>
              <span>
                    Related Products
              </span>
            </h2>
            <div class="products-grid">
              <?php
             
              $vendor_id= $product_details->oauth_uid; 
              $similar_product = $this->client_item->fetch_similar_product($vendor_id,$random_itemno);
              foreach ($similar_product as $product): 
                $user_info=$this->client_item->fetch_user_details($product->oauth_uid);
                ?>

              <div class="product-hover   product-review  grid-item product-item  wow fadeIn" data-wow-delay="0ms" id="product-8747959625">
                <div class="item-poduct" >
                  <div class="product-top">
                    <div class="product-image ">
                      <div class="product-label">
                        <lable class="label" >Sale</lable>
                      </div>
                      <a href="<?= base_url('Product-Buy') ?>/<?php echo $product->random_itemno ?>/<?php echo $product->item_name ?>" class="grid-image">
                        <img class="feature-images" src="<?= base_url('');?>/<?php echo $product->item_image2 ?>" alt="<?php echo $product->item_name ?>" style="height:187px;">
      
                        <span class="product-hover" data-idproduct="8747959625">
                          <img class="img-responsive" alt="<?php echo $product->item_name ?>" src="<?= base_url('');?>/<?php echo $product->item_image2 ?>" style="height:187px;">
                        </span>
                      </a>
                      <div>
                          <a href="<?= base_url('Product-Buy') ?>/<?php echo $product->random_itemno ?>/<?php echo $product->item_name ?>" id="fero-moda-belted-drape-coat" data-toggle="tooltip" data-placement="top" title="View" class="sca-qv-button btn">
                            View
                          </a>
                      </div>
                    </div>
                  </div>
                  <div class="product-content">
                    <h3>
                      <a class="product-title" href="fero-moda-belted-drape-coat.html">
                        <?php echo $product->item_name ?>
                      </a>
                    </h3>
                    <div class="price-box">
                        <p class="sale">
                          <?php if($product->day_price !=''){ ?>
                            <span class="special-price">₹ <?php echo $product->day_price; ?> / day</span>
                          <?php } else if($product->day_price =='' && $product->hr_price !=''){ ?>
                            <span class="special-price">₹ <?php echo $product->hr_price; ?> / hourly</span>
                          <?php } else if($product->hr_price =='' && $product->day_price =='' && $product->monthly_price !=''){ ?>
                            <span class="special-price">₹ <?php echo $product->monthly_price; ?> / Monthly</span>
                          <?php } ?>
                        </p>
                        <span style="color: rgb(118, 118, 118);font-size: 14px;overflow: hidden;width: 100%;white-space: nowrap;text-overflow: ellipsis; line-height: 1.5em;text-transform: inherit;"><i class="fa fa-user"></i> <?php echo $user_info->first_name; ?> <?php echo $user_info->last_name; ?> / <?php echo $user_info->city; ?></span>
                      </div>
                    <span class="shopify-product-reviews-badge" data-id="8747959625"></span>
                    <div class="add-to-link">
                      <div class="add-to-cart">
                        <form action="https://bigsale-01.myshopify.com/cart/add" method="post" class="variants" id="product-actions-8747959625" enctype="multipart/form-data" style="padding:0px;">    
                          <input type="hidden" name="id" value="29670586569" />      
                          <span><input class="btn add-to-cart-btn"  data-toggle="tooltip" data-placement="top" title="Add to Cart" type="submit" value="Add to Cart" /></span>
                        </form>      
                      </div>
                      <a class="wishlist btn" href="../../../account/login.html" data-toggle="tooltip" data-placement="top" title="Add to wishlist"><span><i class="fa fa-heart" aria-hidden="true"></i></span></a>
                    </div>
                  </div>
                </div>
              </div>
              <?php endforeach ?>
          </div>
        </section>
        <script>
          jQuery(document).ready(function() {
            jQuery(".related-products .products-grid").owlCarousel({
              autoPlay: 8000,     
              scrollPerPage: true,
              slideSpeed: 500,
              stopOnHover: true,    
              navigation : true,
              navigationText : ['<i class="arrow_carrot-left"></i>','<i class="arrow_carrot-right"></i>'],
              items : 5,
         	  itemsDesktop : [1200,3],
              itemsTablet: [767,3],
              itemsTabletSmall: [721,2]
            });
          });
        </script>
    </main>
    <div id="shopify-section-footer" class="shopify-section">
	     <?php include("pages/footer.php"); ?>
	     <div class="loading cbox" >Processing...</div>
    </div>
  
    <script src="<?= base_url('assets/customer_assets/assets/themes_support/api.jquery-b90ee9a5604bc68b2f4a3af86b4551207834575e264152eac4822d0b60e0c0d5.js');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/customer_assets/assets/themes_support/option_selection-f3dd7ba25bddfb6b0fe9addc0cae11dc709eeb6a469ec7f66f49e3abc4ce8c81.js');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/jquery.fancybox.packeffd.js?18048096476991624736');?>" type="text/javascript"></script>

    <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/jquery.fakecropeffd.js?18048096476991624736');?>" type="text/javascript"></script>

    <script src="<?= base_url('assets/customer_assets/javascripts/currencies.js');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/jquery.currencies.mineffd.js?18048096476991624736');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/jquery.historyeffd.js?18048096476991624736');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/typoeffd.js?18048096476991624736');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/modernizr.customeffd.js?18048096476991624736');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/classieeffd.js?18048096476991624736');?>" type="text/javascript"></script>
    <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/all.jquery.mineffd.js?18048096476991624736');?>" type="text/javascript"></script>

    <div id="back-top" style="display: none;"><a class="" href="#top"><i class="fa fa-angle-up"></i></a></div>
    
    </div>
    <?php include('pages/mobile_menu.php'); ?>
    <script>
      jQuery('.btn-menu-canvas').click(function(){
      	if(jQuery('#offcanvas').hasClass('active')){
    		jQuery('body').removeClass('off-canvas-active');
          	jQuery('#offcanvas').removeClass('active');
          	jQuery('.wrapper').removeClass('offcanvas-push');
          }else{ 
            jQuery('body').addClass('off-canvas-active');
            jQuery('#offcanvas').addClass('active');
            jQuery('.wrapper').addClass('offcanvas-push');
          }  
      });
      jQuery('#off-canvas-button').click(function(){
      		jQuery('#offcanvas').removeClass('active');
          	jQuery('.wrapper').removeClass('offcanvas-push');
      });
      
        jQuery(document).mouseup(function (e){
        
         var container = jQuery("#offcanvas");

        if (!container.is(e.target) // if the target of the click isn't the container...
            && container.has(e.target).length === 0) // ... nor a descendant of the container
        {
            jQuery('#offcanvas').removeClass('active');
          	jQuery('.wrapper').removeClass('offcanvas-push');
        }

      });
      
          jQuery("#offcanvas .navbar-nav ul").hide();
            jQuery("#offcanvas .navbar-nav li h3 i").addClass("accordion-show");
       
            jQuery("#offcanvas .navbar-nav li h3 i").click(function(){
                if(jQuery(this).parent().next().is(":visible")){
                    jQuery(this).addClass("accordion-show");
                }else{
                    jQuery(this).removeClass("accordion-show");
                }
                jQuery(this).parent().next().toggle(400);
              if(jQuery(this).hasClass("icon_plus")){
                  jQuery(this).removeClass("icon_plus");
                  jQuery(this).addClass("icon_minus-06");
               }else{
                  jQuery(this).removeClass("icon_minus-06");
         		  jQuery(this).addClass("icon_plus");
              	}
            });


    </script>
  

    <script>
      $(function() {
        // Current Ajax request.
        var currentAjaxRequest = null;
        // Grabbing all search forms on the page, and adding a .search-results list to each.
        var searchForms = $('form[action="/search"]').css('position','relative').each(function() {
          // Grabbing text input.
          var input = $(this).find('input[name="q"]');
          // Adding a list for showing search results.
          var offSet = input.position().top + input.innerHeight();
          $('<ul class="search-results"></ul>').css( { 'position': 'absolute', 'left': '0px', 'top': offSet } ).appendTo($(this)).hide();    
          // Listening to keyup and change on the text field within these search forms.
          input.attr('autocomplete', 'off').bind('keyup change', function() {
            // What's the search term?
            var term = $(this).val();
            // What's the search form?
            var form = $(this).closest('form');
            // What's the search URL?
            var searchURL = '/search?type=product&q=title:' + term + '*';
            // What's the search results list?
            $('.search-form').addClass('s-loading');
            var resultsList = form.find('.search-results');
            // If that's a new term and it contains at least 3 characters.
            if (term.length > 3 && term != $(this).attr('data-old-term')) {
              // Saving old query.
              $(this).attr('data-old-term', term);
              // Killing any Ajax request that's currently being processed.
              if (currentAjaxRequest != null) currentAjaxRequest.abort();
              // Pulling results.
              currentAjaxRequest = $.getJSON(searchURL + '&view=json', function(data) {
                // Reset results.
                resultsList.empty();
                // If we have no results.
                if(data.results_count == 0) {
                  resultsList.html('<li><span class="title" >No results</span></li>');
                  resultsList.fadeIn(200);
                  $('.search-form').removeClass('s-loading');
                } else {
                  // If we have results.
                  $.each(data.results, function(index, item) {
                    var link = $('<a></a>').attr('href', item.url);
                    link.append('<span class="thumbnail"><img src="' + item.thumbnail + '" /></span>');
                    link.append('<span class="title">' + item.title + '</span>');

                    if (item.price > item.min_price){
                      link.append('<span class="price speacial">' + item.price + item.min_price + '</span>');
                    }else{
                      link.append('<span class="price normal">' + item.min_price + '</span>');
                    }
                    link.wrap('<li><div class="item-search"></div></li>');
                    resultsList.append(link.parent());
                  });
                  // The Ajax request will return at the most 10 results.
                  // If there are more than 10, let's link to the search results page.
                  if(data.results_count > 8) {
                    resultsList.append('<li><span class="title"><a href="' + searchURL + '">See all results (' + data.results_count + ')</a></span></li>');
                  }
                  resultsList.fadeIn(200);
                  $('.search-form').removeClass('s-loading');
                }        
              });
            }
          });
        });
        // Clicking outside makes the results disappear.
        $('body').bind('click', function(){
          $('.search-results').hide();
          $('.search-form').removeClass('s-loading');
        });
      });
    </script>

  <script src="<?= base_url('assets/customer_assets/files/1/1498/2346/t/12/assets/ajax.jquery.mineffd.js?18048096476991624736');?>" type="text/javascript"></script>


  <script type="text/javascript">
      $("#hrs_bt").click(function(){
        $("#day").hide();
        $("#monthly").hide();
        $("#hourly").show();
      });

      $("#day_bt").click(function(){
        $("#monthly").hide();
        $("#hourly").hide();
        $("#day").show();
      });

      $("#month_bt").click(function(){
        $("#hourly").hide();
        $("#day").hide();
        $("#monthly").show();
      });

  </script>

<script>
  $(document).ready(function(){
   
   $('#item_recive_time').change(function(){
    var item_recive_time_id = $('#item_recive_time').val();
    var owner_id = "<?php echo $owner_id;?>"
    if(item_recive_time_id != '')
    {
     $.ajax({
      url:"<?php echo base_url(); ?>Product_details/fetch_drop_time",
      method:"POST",
      data:{item_recive_time_id:item_recive_time_id,owner_id:owner_id},
      success:function(data)
      {
       $('#item_drop_time').html(data);
       
      }
     });
    }
    else
    {
     $('#item_drop_time').html('<option value="">Time</option>');
    
    }
   }); 
  });

</script>

<script>  
   $(document).ready(function(){  
        $('input[name="month_name"]').click(function(){  
              var month_id = $(this).val(); 
              //
              var random_itemno = "<?php echo $random_itemno;?>"
                
                if(month_id != '')
                {
                 $.ajax({
                  url:"<?php echo base_url(); ?>Product_details/fetch_discount_and_total_price",
                  method:"POST",
                  data:{month_id:month_id,random_itemno:random_itemno},
                  success:function(data)
                  {
                   $('#month_discount').html(data);
                   
                  }
                 });
                }
                else
                {
                 $('#month_discount').html('<option value="">Time</option>');
                
                }
        });  
   });  
 </script>

 <script>
    $(document).ready(function(){
     
     $('#total_hours').change(function(){
      var hours_id = $('#total_hours').val();
      var random_itemno = "<?php echo $random_itemno;?>"
      if(hours_id != '')
      {
       $.ajax({
        url:"<?php echo base_url(); ?>Product_details/fetch_hours_price_ajax",
        method:"POST",
        data:{hours_id:hours_id,random_itemno:random_itemno},
        success:function(data)
        {
         $('#hourly_price_show').html(data);
         
        }
       });
      }
      else
      {
       $('#hourly_price_show').html('<option value="">Time</option>');
      
      }
     }); 
    });

</script>
<!-- Modal -->
<div id="termModel" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Additional rules</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
        <?php 
            $rules_renting = explode('$',$product_details->rules_of_renting);
            $total_rules = count($rules_renting);
        ?>
        <?php for($i=0;$i<$total_rules;$i++){ ?>
            <p>
                <?php echo $rules_renting[$i]; ?>
            </p>
        <?php } ?>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php 
$item_id = $product_details->item_id;
$fetch_deactive_date = "select * from calendar where item_id='$item_id'";
$deactive_date = $this->db->query($fetch_deactive_date)->result();
$prefix = $dateList = '';
foreach ($deactive_date as $da) {
   $dateList .= $prefix . '"' . date('d-m-Y', strtotime($da->start)) . '"';
    $prefix = ', ';
}


?>
<script>
    jQuery(function() {
      var datepicker = $('input.datepicker');
      var datesForDisable = [<?php echo $dateList ?>]
      if (datepicker.length > 0) {
        datepicker.datepicker({
          format: "dd-mm-yyyy",
          datesDisabled: datesForDisable,
          startDate: new Date()
        });
      }
    });

    $(function() {
      // create the from date
      $('#from-date').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy',
      }).on('changeDate', function(ev) {
        ConfigureToDate();
      });


      $('#to-date').datepicker({
        autoclose: true,
        format: 'dd-mm-yyyy',
        startDate: $('#from-date').val()
      }).on('changeDate', function(ev) {

        var fromDate = $('#from-date').data('datepicker').dates[0];
        var toDate = $('#to-date').data('datepicker').dates[0];
        var timeDiff = Math.abs(toDate.getTime() - fromDate.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24));

        var item_price = "<?php echo $product_details->hr_price; ?>";
        var week_disc= "<?php echo $product_details->week_disc; ?>";
        var total_day= diffDays;
        var total_item_price = item_price*total_day;
      var dis_price= Math.round((item_price*diffDays)/100);
        //alert(item_price);

        $('#total_day').text(diffDays+" Day rental");
        $('#total_day_and_price').text("₹"+item_price+"x"+diffDays+"Day");
        $('#total_price').text("₹"+ item_price*total_day);
        if(diffDays>='7'){
            $('#dicount_day_price').html("<label class='col-md-5 row' style='float:left;border:1px solid white;'>"+week_disc+"% weekly Discount:</label> "+"<label class='col-md-5' style='float:left; border:1px solid white;margin-left:30px;'>₹"+dis_price+"</label>"+"<input type='hidden' name='discount_price' value="+dis_price+">");
                var discount = (item_price*diffDays)/100;  
                                  
            $('#total_amount').html("<hr style='border:1px solid red;width:114%;'><label class='col-md-5 row' style='float:left;border:1px solid white;'>Total</label>"+"<label class='col-md-5' style='float:left; border:1px solid white;margin-left:30px;'>₹"+Math.round((total_item_price-discount))+"<input type='hidden' name='total_amount' value="+Math.round((total_item_price-discount))+">");
        }else{

            var total_amount =  total_item_price;
            $('#total_amount').html("<hr style='border:1px solid red;width:114%;margin-top:-5%;'><label class='col-md-5 row' style='float:left;border:1px solid white;'>Total</label> <label class='col-md-5' style='float:left; border:1px solid white;margin-left:30px;'>₹"+total_amount +"</label>"+"<input type='hidden' name='total_amount' value="+total_amount+">"); 
        }
        
        $('#hidden_part_day').html("<input type='hidden' name='total_day' value="+total_day+">"+"<input type='hidden' name='total_item_price' value="+total_item_price+">");
        $('#termcondi').html("<input type='checkbox' required=''><a data-toggle='modal' data-target='#termModel'>Agree & Continue</a>");
        $('#user_req').html("<label><h5>Say hello to your host</h5></label><textarea class='form-control' placeholder='' name='user_comments' cols='10' required='' style='width: 38%;'></textarea><br><input type='submit' name='submit' value='Request to rent' style='border:1px solid #00aeef; background: #00aeef;font-weight: bold;padding:5px;margin-top: -2%'>");
      });

      // Set the min date on page load
      ConfigureToDate();

      // Resets the min date of the return date
      function ConfigureToDate() {
        $('#to-date').val("").datepicker("update");
        $('#to-date').datepicker('setStartDate', $('#from-date').val());
      }
    });

    function getBusinessDatesCount(startDate, endDate) {
      var count = 0;
      var curDate = new Date(startDate);
      while (curDate <= endDate) {
        var dayOfWeek = curDate.getDay();
        if (!((dayOfWeek == 6) || (dayOfWeek == 0)))
          count++;
        curDate.setDate(curDate.getDate() + 1);
      }
      return count;
    }
</script>


<script>
$(document).ready(function(){
 
 $('#category').change(function(){
  var category_id = $('#category').val();
  if(category_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Create_item/fetch_subcat",
    method:"POST",
    data:{category_id:category_id},
    success:function(data)
    {
     $('#subcat').html(data);
     
    }
   });
  }
  else
  {
   $('#subcat').html('<option value="">Choose Sub-Category...</option>');
  
  }
 }); 
});

</script>
</body>
</html>