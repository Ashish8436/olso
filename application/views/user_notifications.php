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

      <style>
        #items_category{
            font-weight: bold;
            margin: 0;
            padding: 0;    font-size: 24px;
            line-height: 1.5em;
            font-family: Mabry-Medium, Helvetica, Arial;
            margin-bottom: 10xp;
        }
        #items_category a:hover{
            color:#FF214F;
        }
                
        .tooltip {
          position: relative;
          display: inline-block;
          border-bottom: 1px dotted black;
        }

        .tooltip .tooltiptext {
          visibility: hidden;
          width: 120px;
          background-color: black;
          color: #fff;
          text-align: center;
          border-radius: 6px;
          padding: 5px 0;
          position: absolute;
          z-index: 1;
          top: 150%;
          left: 50%;
          margin-left: -60px;
        }

        .tooltip .tooltiptext::after {
          content: "";
          position: absolute;
          bottom: 100%;
          left: 50%;
          margin-left: -5px;
          border-width: 5px;
          border-style: solid;
          border-color: transparent transparent black transparent;
        }

        .tooltip:hover .tooltiptext {
          visibility: visible;
        }


            </style>

</head>


<body id="gontemporary-leopard-mini-dress" class=" template-product " > 
  <div class="wrapper ">	   
    <div id="shopify-section-header" class="shopify-section">
	   <?php include("pages/header.php"); ?>
    </div>
    

   
    <main class="container main-content">
      <div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <?php if(empty($fetch_notification)){ ?>
                <center><h1>Your Cart is Empty</h1></center>
                <?php } else{ ?>

                    <?php foreach ($fetch_notification as $notification): ?>
                       

                       
                            <?php 
                                $req_id= $notification->req_id;
                                $sql = "select * from payment as p, booking_request as br where "
                            ?>
                            <div class="col-lg-12 col-md-12 col-xs-12" style="border:1px solid darkgrey;margin-top:2px;">
                              <div class="col-md-10" style="margin-left: 8%;">
                                 <div class="col-md-3 float-left">
                                    <span>
                                      <img src="<?= base_url() ?>/<?php echo $notification->item_image1; ?>" style="width:150px;border-radius: 50%;">
                                    </span>
                                 </div>
                                 <div class="col-md-4 float-left">
                                    <h6 class="title" style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; max-width: 40ch; font-weight: bold;line-height: 90px;">
                                           Item: <?php echo $notification->item_name ?>...
                                        </h6>
                                 </div>
                                 <div class="col-md-3 float-right" style="font-weight: bold;">
                                    <br>
                                    <center><?php 
                                    $booking_date = explode(' ', $notification->request_date);
                                    echo date('dS M',strtotime($booking_date[0])) ?><br>
                                    <button type="button" class="btn btn-outline-primary btn-lg" style="background:#007bff;"><a href="<?= base_url('notifications-details') ?>/<?php echo $notification->random_itemno ?>?pro=<?php echo $notification->item_name ?>?&code=<?php echo $notification->req_id ?>" style="">View</a></button></center>
                                 </div>
                               </div> 
                            </div>
                        
                    
                    <?php endforeach ?>   
                <?php } ?>
        </div>
    </div>
</div>

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


</body>
</html>