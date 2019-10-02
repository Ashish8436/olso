<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title><?php echo $title; ?></title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="<?= base_url('assets/lender_assets/css/entypo.css');?>" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="<?= base_url('assets/lender_assets/css/font-awesome.min.css');?>" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?= base_url('assets/lender_assets/css/bootstrap.min.css');?>" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Integral core stylesheet -->
<link href="<?= base_url('assets/lender_assets/css/integral-core.css');?>" rel="stylesheet">
<!-- /integral core stylesheet -->

<!--Jvector Map-->
<link href="<?= base_url('assets/lender_assets/plugins/jvectormap/css/jquery-jvectormap-2.0.3.css');?>" rel="stylesheet">

<link href="<?= base_url('assets/lender_assets/css/integral-forms.css');?>" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="<?= base_url('assets/lender_assets/js/html5shiv.min.js');?>"></script>
      <script src="<?= base_url('assets/lender_assets/js/respond.min.js');?>"></script>
<![endif]-->

<!--[if lte IE 8]>
	<script src="<?= base_url('assets/lender_assets/plugins/flot/js/excanvas.min.js');?>"></script>
<![endif]-->

</head>
<body>
<?php echo $header; ?>
		<!-- Main content -->
		<div class="main-content">
		
			<div class="row">
			<div class="col-md-12">
			
				<!-- Card grid view -->
				<div class="cards-container">

					<?php foreach($show_user_items_category as $category): ?>
	                <div class="container">
	                    <div class="row" >
	                        <span id="items_category"><a href=""><?php echo $category->cat_name;?></a></span>
	                    </div>
	                </div>
					<div class="row">
						<?php 
		                $otu_id = $this->session->userdata('oauth_uid');
		                $show_user_items=$this->item_model->show_user_items($otu_id,$category->cat_id);
		                foreach($show_user_items as $item_show){ ?>
		                
						<div class="col-md-4 col-sm-6">
						
							<!-- Card -->
							<div class="card">
							
								<!-- Card header -->
								<div class="card-header card-cover" style="background:#6059EE;">
								
									<!-- Card photo -->
									<div class="card-photo">
										<img title="Alex Dolgove" alt="Alex Dolgove" src="<?php echo $item_show->item_image1; ?>" class="img-circle avatar size-105">			

									</div>
									<!-- /card photo -->
									
									<!-- Card short description -->
									<div class="card-short-description media-middle">
										<h5 style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis; max-width: 15ch;"><?php echo $item_show->item_name ?></h5>
										
									</div>
									<!-- /card short description -->
									
									<!-- Card action dropdown -->
									<div class="action-dropdown dropdown">
										<a data-toggle="dropdown" href="#/" aria-expanded="true" class="btn btn-lg btn-fab"><i class="fa fa-ellipsis-v"></i></a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="<?= base_url('Edit-Item') ?>/<?php echo $item_show->random_itemno?>">Modify</a></li>
											<li><a href="<?= base_url('Duplicate-Item'); ?>/<?php echo $item_show->random_itemno ?>">Create Duplicate</a></li>
										</ul>
									</div>
									<!-- /card action dropdown -->
								</div>
								<!-- /card header -->
								
								<!-- Card content -->
								<div class="card-content">
									<p class="badges">
									<?php if($item_show->hr_price !=''){ ?>
										<span class="badge badge-bordered">₹ <?php echo $item_show->hr_price; ?> / Hours</span>
									<?php } ?>
									<?php if($item_show->day_price !=''){ ?>
										<span class="badge badge-bordered">₹ <?php echo $item_show->day_price; ?> / Day</span>
									<?php } ?>
									<?php if($item_show->monthly_price !=''){ ?>
										<span class="badge badge-bordered">₹ <?php echo $item_show->monthly_price; ?> / Month</span>
									<?php } ?>
									</p>
									<!-- <p>Amet, consectetur adipiscing elit. Vivamus nunc ligula, faucibus ac accumsan quis, venenatis mattis lorem. Fusce suscipit finibus lectus</p> -->
									
									<ul class="list-inline">
										<?php if(empty($fetch_id_verification)){ ?>
											<a href="<?= base_url('ID-Verification'); ?>" class="btn btn-primary btn-sm btn-outline" style="width:100%;">Provide ID</a>
										<?php }else if($fetch_id_verification->no_verify_reason!='') { ?>
											<a href="<?= base_url('ID-Verification'); ?>" class="btn btn-primary btn-sm btn-outline" style="width:100%;">Your Id is Cancel Please Provided ID</a>									
										<?php } else if($fetch_id_verification->verification_status=='0') { ?>
											<a href="#/" class="btn btn-primary btn-sm btn-outline" style="width:100%;">Wait for ID Verify</a>										
										<?php }else if($fetch_id_verification->verification_status=='1'){ ?>

											<?php if($item_show->admin_approble=='1') { ?>
												<?php 
	                                           	if($item_show->item_status == 1){ $anc = 'Active'; }else{ $anc = 'Deactive'; }                          
		                                        ?>
		                                            
		                                        <?php if($item_show->item_status == 1){ ?>
		                                          <a class="btn act_deactive btn-success btn-sm btn-outline" title="<?php echo $item_show->item_status ?>" href="<?php echo base_url('User_item_list/item_status/'.$item_show->item_id); ?>" style=" color:green;width:100%;">
		                                          <?php echo $anc; ?>
		                                          </a>
		                                        <?php } else{ ?>

		                                            <a class="btn act_deactive  btn-danger btn-outline" title="<?php echo $item_show->item_status ?>" href="<?php echo base_url('User_item_list/item_status/'.$item_show->item_id); ?>" style=" color:red; width:100%;">
		                                              <?php echo $anc; ?>
		                                              </a>

		                                        <?php } ?>
		                                     <?php } else if($item_show->admin_approble=='0' && $item_show->admin_cancel_reason==''){ ?>

		                                     	<a href="#" class="btn btn-warning btn-sm btn-outline" style="width:100%;"">Wait for approble...</a>
		                                     <?php }else if($item_show->admin_approble=='0' && $item_show->admin_cancel_reason!=''){  ?>
		                                     	<a href="#" class="btn btn-danger btn-sm btn-outline" style="width:100%;"">Canceled Product...</a>
		                                     <?php } ?>

	                                    <?php } ?>
	                                    <div class="clear-fix"></div>
										 <?php 
		                                  $this->load->model('User_item_model','item_model');
		                                  $otu_id = $this->session->userdata('oauth_uid');
		                                  $user_adv_month = $this->item_model->fetch_user_adv_book_month_total($otu_id,$item_show->item_id);
		                                  
		                                  if(empty($user_adv_month)){
		                                  ?>

		                                  <?php } else { ?>
											<a href="<?= base_url('update-calendar-sync'); ?>/<?php echo $item_show->item_id; ?>/<?php echo $item_show->item_name ?>/<?php echo $item_show->random_itemno ?>" class="btn btn-info btn-outline btn-sm" style="width:100%;margin-top:10px;">Update Calander</a>
										  <?php } ?>
										  <a href="<?= base_url('block-calendar-sync'); ?>/<?php echo $item_show->item_id; ?>/<?php echo $item_show->item_name ?>/<?php echo $item_show->random_itemno ?>" class="btn btn-blue btn-outline btn-sm" style="width:100%; margin-top:10px;">Block Calander</a>
									</ul>
								</div>
								<!-- /card content -->
							</div>
							<!-- /card -->
						</div>
						
						<?php } ?>
						
					</div>
					<?php endforeach ?>
				</div>
				<!-- /card grid view -->
				
			</div>
		</div>	
		
			
			<!-- Footer -->
			<?php echo $footer; ?>
			<!-- /footer -->
	  </div>
	  <!-- /main content -->
  </div>
  <!-- /main container -->
</div>
<!-- /page container -->

<!--Load JQuery-->
<script src="<?= base_url('assets/lender_assets/js/jquery.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/js/bootstrap.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/metismenu/js/jquery.metisMenu.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/blockui-master/js/jquery-ui.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/blockui-master/js/jquery.blockUI.js');?>"></script>

<!--Knob Charts-->
<script src="<?= base_url('assets/lender_assets/plugins/knob/js/jquery.knob.min.js');?>"></script>

<!--Jvector Map-->
<script src="<?= base_url('assets/lender_assets/plugins/jvectormap/js/jquery-jvectormap-2.0.3.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js');?>"></script>

<!--ChartJs-->
<script src="<?= base_url('assets/lender_assets/plugins/chartjs/js/Chart.min.js');?>"></script>

<!--Morris Charts-->
<script src="<?= base_url('assets/lender_assets/plugins/morris/js/raphael-min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/morris/js/morris.min.js');?>"></script>

<!--Float Charts-->
<script src="<?= base_url('assets/lender_assets/plugins/flot/js/jquery.flot.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/flot/js/jquery.flot.tooltip.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/flot/js/jquery.flot.resize.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/flot/js/jquery.flot.pie.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/flot/js/jquery.flot.time.min.js');?>"></script>

<!--Functions Js-->
<script src="<?= base_url('assets/lender_assets/js/functions.js');?>"></script>

<!--Dashboard Js-->
<script src="<?= base_url('assets/lender_assets/js/dashboard.js');?>"></script>

<script src="<?= base_url('assets/lender_assets/js/loader.js');?>"></script>

<script>
              
      $('.act_deactive').click(function(ev){
        ev.preventDefault();
          
        var  dis = this;
           
        $.post($(this).attr('href'),{'sts':$(this).attr('title')},function(resp){
                 
          if(resp == 1){
            $(dis).html("Active");
            $(dis).css('border-color', 'green');
            $(dis).css('color', 'green');
            $(dis).attr("title",resp);
          }else if(resp == 0){
            $(dis).html("Deactive");
            $(dis).css('border-color', 'red');
            $(dis).css('color', 'red');
            $(dis).attr("title",resp);
          }
                 
        });  
      });
         
    </script>   
</body>

</html>
