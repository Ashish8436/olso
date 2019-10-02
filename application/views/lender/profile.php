<?php error_reporting(0); ?>
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
		  <a class="btn btn-primary" href="<?= base_url('Dashboard') ?>">Home</a>
			<a class="btn btn-primary" href="<?= base_url('Trust-Verification') ?>"> Trust & Verification</a>
      <?php if($fetch_id_verification->verification_status=='1'){ ?>
      <a class="btn btn-primary" href="<?= base_url('Docuement-Verify') ?>"> Document Management</a>
      <?php } ?>
			<br><br>
			
			<div class="row">
				<div class="col-md-6">
					<div class="tabs-container">
						<ul class="nav nav-tabs">
							<li class="active"><a aria-expanded="true" href="#home" data-toggle="tab">Profile</a></li>
							<li><a aria-expanded="false" href="#profile" data-toggle="tab">Document Provided</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="home">
								<div class="panel-body">
									<center>
									<?php if($user_details->picture==''){ ?>
									<img src="<?= base_url('assets/lender_assets/images/user_pic-225x225.png'); ?>" class="rounded-circle" alt="Cinque Terre"  width="304" height="236">
									<?php } else{ ?>
                                    <img src="<?php echo $user_details->picture; ?>" class="rounded-circle" alt="Cinque Terre"  width="220" height="130" style="border-radius: 10%">
                                    <?php } ?>
                                </center>
                                    <div class="col-md-14" style="margin: auto; width: 100%; padding: 10px;"><center><h2>Hi, I'm <?php echo $user_details->first_name; ?> <?php echo $user_details->last_name; ?></h2>
		                                 <?php
		                                   $created_date = explode('-', $user_details->created); 
		                                  ?>
		                                  Joined in <?php echo $created_date[0] ?> .<a href="<?= base_url('Edit-Profile'); ?>" style="color:black; color:#6059EE;font-weight: bold;">Edit profile</a></center>
		                            </div>
								</div>

							</div>
							<div class="tab-pane" id="profile">
								<div class="panel-body">
									<?php if($fetch_id_verification->driving_license1 ==''){ ?>
            
                                    <?php }else{ ?>
                                     <div class="mt-3 text-secondary d-flex" style="height:35px;">
                                      	<div style="width:32px; float:left;">
                                      		<img src="<?= base_url('assets/img/10-512.png');?>" alt="check" class="align-self-center" style="width:30px;"/>
                                       </div>
                                      	<div class="align-self-center mx-1 col-md-11" style="font-weight: bold; font-size:18px;float: left;">Driving License</div>
                                    </div>
                                    <?php } ?>
                                    <?php if($fetch_id_verification->passport1 ==''){ ?>

                                    <?php }else{ ?>
                                      <div class="mt-3 text-secondary d-flex" style="height:35px;">
                                      <div style="width:32px; float:left;">
                                      <img src="<?= base_url('assets/img/10-512.png');?>" alt="check"
                                        class="align-self-center" style="width:30px;"/>
                                      </div>
                                      <div class="align-self-center mx-1 col-md-11" style="font-weight: bold; font-size:18px;float: left;">Passport</div>
                                    </div>
                                    <?php } ?>

                                    <?php if($fetch_id_verification->aadhar_card1 ==''){ ?>
                                        
                                    <?php }else{ ?>
                                      <div class="mt-3 text-secondary d-flex" style="height:35px;">
                                     	<div style="width:32px; float:left;">
                                      		<img src="<?= base_url('assets/img/10-512.png');?>" alt="check"
                                        class="align-self-center" style="width:30px;"/>
                                    	</div>
                                      <div class="align-self-center mx-1 col-md-11" style="font-weight: bold; font-size:18px;float: left;">Aadhar Card</div>
                                    </div>
                                    <?php } ?>

                                    <?php if($fetch_user_documents->voter_id1 ==''){ ?>
                                        
                                    <?php }else{ ?>
                                      <div class="mt-3 text-secondary d-flex" style="height:35px;">
                                     	<div style="width:32px; float:left;">
                                      <img src="<?= base_url('assets/img/10-512.png');?>" alt="check"
                                        class="align-self-center" style="width:30px;"/>
                                    	</div>
                                      <div class="align-self-center mx-1 col-md-11" style="font-weight: bold; font-size:18px;float: left;">Voter Id</div>
                                    </div>
                                    <?php } ?>

                                    <?php if($fetch_user_documents->stu_emp_id1 ==''){ ?>
                                        
                                    <?php }else{ ?>
                                      <div class="mt-3 text-secondary d-flex" style="height:35px;">
                                     	<div style="width:32px; float:left;">
                                      <img src="<?= base_url('assets/img/10-512.png');?>" alt="check"
                                        class="align-self-center" style="width:30px;"/>
                                    	</div>
                                      <div class="align-self-center mx-1 col-md-11" style="font-weight: bold; font-size:18px;float: left;">Student ID / Employee ID</div>
                                    </div>
                                    <?php } ?>

                                    <?php if($fetch_user_documents->rent_bill1 ==''){ ?>
                                        
                                    <?php }else{ ?>
                                     <div class="mt-3 text-secondary d-flex" style="height:35px;">
                                     	<div style="width:32px; float:left;">
                                      <img src="<?= base_url('assets/img/10-512.png');?>" alt="check"
                                        class="align-self-center" style="width:30px;"/>
                                    	</div>
                                      <div class="align-self-center mx-1 col-md-11" style="font-weight: bold; font-size:18px;float: left;">Rent agreement / Utility Bill</div>
                                    </div>
                                    <?php } ?>

                                    <?php if($user_details->email_active =='1'){ ?>
                                    <div class="mt-3 text-secondary d-flex" style="height:35px;">
                                    	<div style="width:32px; float:left;">
                                      <img src="<?= base_url('assets/img/10-512.png');?>" alt="check"
                                        class="align-self-center" style="width:30px;"/>
                                    	</div>
                                      <div class="align-self-center mx-1 col-md-11" style="font-weight: bold; font-size:18px;float: left;">Email Address</div>
                                    </div>
                                    <?php }else{ ?>
                                      <div class="mt-3 text-secondary d-flex" style="height:35px;">
                                      	<div style="width:32px; float:left;">
                                        <img src="<?= base_url('assets/img/red-cross.png');?>" alt="check"
                                          class="align-self-center" style="width:30px;"/>
                                      	</div>
                                        <div class="align-self-center mx-1 col-md-11" style="font-weight: bold; font-size:18px;float: left;">Email Address</div>
                                      </div>

                                    <?php } ?>

                                    <?php if($user_details->mobile_active =='1'){ ?>
                                     <div class="mt-3 text-secondary d-flex" style="height:35px;">
                                    	<div style="width:32px; float:left;">
                                      <img src="<?= base_url('assets/img/10-512.png');?>" alt="check"
                                        class="align-self-center" style="width:30px;"/>
                                    	</div>
                                      <div class="align-self-center mx-1 col-md-11" style="font-weight: bold; font-size:18px;float: left;">Mobile Number</div>
                                    </div>
                                  <?php }else{ ?>
                                     <div class="mt-3 text-secondary d-flex" style="height:35px;">
                                    	<div style="width:32px; float:left;">
                                      <img src="<?= base_url('assets/img/red-cross.png');?>" alt="check"
                                        class="align-self-center" style="width:30px;"/>
                                    	</div>
                                      <div class="align-self-center mx-1 col-md-11" style="font-weight: bold; font-size:18px;float: left;">Mobile Number</div>
                                    </div>

                                  <?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tabs-container">
						<ul class="nav nav-tabs">
							<li class="active"><a aria-expanded="true" href="#tab-1" data-toggle="tab">BIO</a></li>
							
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab-1">
								<div class="panel-body">
									
                                        <div class="comment-meta">
                                            <div style="display: block;">
                                              
                                             <p style="text-align: justify;  text-justify: inter-word;"><?php echo $user_details->bio; ?> </p>
                                            </div>
                                            <div class="row" style="margin-top: 16px; margin-bottom: 16px;">
                                              <div class="_rko1a"></div>  
                                            </div>
                                            <div class="container" style="font-weight: bold;font-size:20px;">
                                                <i class="fa fa-home"></i>&nbsp; Live in <span style="color:#6059EE;"><?php echo $user_details->city ?></span>
                                            </div>   
                                            <div class="container" style="font-weight: bold;font-size:20px;">
                                                <i class="fa fa-comments"></i>&nbsp; Speaks 
                                                <?php foreach ($fetch_user_lang as $language_name) {   ?>
          												<span style="color:#6059EE;"><?php echo $language_name->lan_name; ?>, </span>
        										<?php } ?>
                                            </div> 
                                            <br><br><br><br><br><br>  
                                        </div>
                                        
                                    </div>
								
							</div>
							
						</div>
					</div>
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

</body>

</html>
