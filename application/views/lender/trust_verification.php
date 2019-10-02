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

<style>
	.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
}
.card {
    position: relative;
    
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125);
}
</style>
</head>
<body>
<?php echo $header; ?>
		<!-- Main content -->
		<div class="main-content">
		
		<a class="btn btn-primary" href="<?= base_url('Dashboard') ?>">Home</a>
		<a class="btn btn-primary" href="<?= base_url('Profile') ?>"> My Profile</a>
		
      <?php if($fetch_id_verification->verification_status=='1'){ ?>
      <a class="btn btn-primary" href="<?= base_url('Docuement-Verify') ?>"> Document Management</a>
      <?php } ?>
			<br><br>

                <div class="content-area5 dashboard-content">
                   
                    <div class="col-md-12">
                        <div class="card">
                        	<div class="card-header">
                                ID Verification
                            </div>
                          <div class="card-body">
                            <div class="mt-3">
                              <div class="row">
                                <div class="col-md-8 mb-3">
                                  <?php if($fetch_id_verification->no_verify_reason!='') { ?>
                                    <small class="text-secondary" ><span style="color:red;">Cancel Reason :<?php echo $fetch_id_verification->no_verify_reason ?></span></small
                                  >
                                  <?php } else { ?>
                                  <small class="text-secondary"
                                    >You’ll need to provide identification before you book,
                                    so get a head start by doing it now. Learn more</small
                                  >
                                  <?php } ?>
                                </div>
                                <div class="col-md-4">
                                  <?php if(empty($fetch_id_verification)){ ?>
                                    <a href="<?= base_url('ID-Verification'); ?>"><button class="btn btn-danger " style="width:100%;">
                                      Provide ID
                                    </button></a>
                                  <?php }else if($fetch_id_verification->no_verify_reason!='') { ?>
                                    <a href="<?= base_url('ID-Verification'); ?>"><button class="btn btn-danger " style="width:100%;">
                                      Provide ID
                                    </button></a>
                                  <?php } else if($fetch_id_verification->verification_status=='0') { ?>
                                    <button class="btn btn-warning " style="width:100%;">
                                     <span style="font-weight: bold;"> 24 hour wait for Id Verify</span>
                                    </button>
                                  <?php }else if($fetch_id_verification->verification_status=='1'){ ?>
                                    <button class="btn btn-success " style="width:100%;">
                                      <span style="font-weight: bold;">Verify <i class="fa fa-check float-right" style="line-height: 25px;"></i></span>
                                    </button>
                                  <?php } ?>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="card mt-4">
                              <div class="card-header">
                                Your social accounts
                              </div>
                              <div class="card-body">
                                <?php if($user_details->oauth_provider=='google'){ ?>
                                    <div class="row">
                                      <div class="col-md-8">
                                        <h5 class="mb-2" style="font-weight:bold;font-size:15px;">Facebook</h5>

                                        <small class="text-secondary mb-3"
                                          >Sign in with Facebook and discover your trusted
                                          connections to hosts and guests all over the world.
                                        </small>
                                      </div>
                                      <div class="col-md-4 mt-md-4 mt-2">
                                        <?php if(!empty($fetch_social_account)){ ?>
                                          <button class="btn btn-success btn-block">
                                          Connect <i class="fa fa-check float-right" style="line-height:140%;"></i>
                                        </button>
                                        <?php } else{ ?>
                                        <a href="<?php echo $authURL2; ?>"><button class="btn btn-outline-secondary btn-block">
                                          Connect
                                        </button></a>
                                        <?php } ?>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                      <div class="col-md-8">
                                        <h5 class="mb-2" style="font-weight:bold;font-size:15px;">Google</h5>

                                        <small class="text-secondary mb-3"
                                          >Sign in with Facebook and discover your trusted
                                          connections to hosts and guests all over the world.
                                        </small>
                                      </div>
                                      <div class="col-md-4 mt-md-4 mt-2">
                                        
                                          <button class="btn btn-success btn-block">
                                          Connect <i class="fa fa-check float-right" style="line-height:140%;"></i>
                                        </button>
                                        
                                      </div>
                                    </div>

                                <?php }elseif($user_details->oauth_provider=='facebook'){ ?>
                                    <div class="row">
                                      <div class="col-md-8">
                                        <h5 class="my-3" style="font-weight:bold;font-size:15px;">Google</h5>
                                        <small class="text-center"
                                          >Connect your Airbnb account to your Google account for
                                          simplicity and ease.</small
                                        >
                                      </div>
                                      <div class="col-md-4 mt-md-5 mt-2">
                                        <?php if(!empty($fetch_social_account)){ ?>
                                          <button class="btn btn-success btn-block">
                                          Connect <i class="fa fa-check float-right" style="line-height:140%;"></i>
                                        </button>
                                        <?php } else{ ?>
                                          <a href="<?php echo $loginURL; ?>"><button class="btn btn-outline-secondary btn-block">
                                          Connect
                                        </button></a>
                                        <?php } ?>

                                      </div>
                                    </div>
                                <?php }else if($user_details->oauth_provider=='email'){ ?>
                                    <div class="row">
                                      <div class="col-md-8">
                                        <h5 class="mb-2" style="font-weight:bold;font-size:15px;">Facebook</h5>

                                        <small class="text-secondary mb-3"
                                          >Sign in with Facebook and discover your trusted
                                          connections to hosts and guests all over the world.
                                        </small>
                                      </div>
                                       <div class="col-md-4 mt-md-4 mt-2">
                                        <?php if(!empty($fetch_social_account)){ ?>
                                          <button class="btn btn-success btn-block">
                                          Connect <i class="fa fa-check float-right" style="line-height:140%;"></i>
                                        </button>
                                        <?php } else{ ?>
                                        <a href="<?php echo $authURL2; ?>"><button class="btn btn-outline-secondary btn-block">
                                          Connect
                                        </button></a>
                                        <?php } ?>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-md-8">
                                        <h5 class="mb-2" style="font-weight:bold;font-size:15px;">Google</h5>

                                        <small class="text-secondary mb-3"
                                          >Sign in with Facebook and discover your trusted
                                          connections to hosts and guests all over the world.
                                        </small>
                                      </div>
                                      <div class="col-md-4 mt-md-4 mt-2">
                                        
                                          <button class="btn btn-success btn-block">
                                          Connect <i class="fa fa-check float-right" style="line-height:140%;"></i>
                                        </button>
                                        
                                      </div>
                                    </div>
                                <?php } ?> 
                              </div>
                        </div>

                         <div class="card mt-4">
                          <div class="card-header">
                            Your verified info
                          </div>
                          <div class="card-body">
                            <h5 class="mb-2" style="font-weight:bold;font-size:15px;">Email address</h5>
                            <small class="text-secondary">
                              You have confirmed your email:
                            </small>
                            <small class="text-secondary mb-3"
                              ><strong class="text-dark"><?php echo $user_details->email ?></strong>A confirmed
                              email is important to allow us to securely communicate with
                              you.</small
                            >
                            <h5 class="my-3" style="font-weight:bold;font-size:15px;">Phone number</h5>
                            <small class="text-center"
                              >Your number is only shared with another Airbnb member once
                              you have a confirmed booking.</small
                            >
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
