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
		
			<?php if(empty($fetch_bank_details)){ ?>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Bank Transfer Setup</h4>

						</div>
						<label style="margin-top: 10px;margin-left: 25px;">Please provide your bank details. This will let you recive funds to your bank account.</label>
                      <hr>
						<div class="panel-body">
							 <form id="rootwizard-2" class="form-wizard validate-form-wizard validate" method="post" action="<?= base_url('Store-Payment-Bank-Details'); ?>">
							 	<div class="radio radio-replace radio-primary">
									<input type="radio" id="pacc" value="Personal account" name="account">
									<label for="pacc" style="margin-right: 25px;">Personal account</label>

									<input type="radio" id="cacc" value="Company account" name="account" >
									<label for="cacc">Companu account </label>
								</div>

								  <div class="form-group col-md-6">
									<label for="emailaddress">Bank Country</label>
									<select class="form-control" name="bank_country">
	                                    <option value="">Select Country...</option>
	                                    <?php foreach ($fetch_country as $country): ?>
	                                      <option value="<?php echo $country->id ?>"><?php echo $country->name ?></option>
	                                    <?php endforeach ?>
	                                  </select>
								  </div>
								  <div class="form-group col-md-6">
									<label for="emailaddress">Currency</label>
									<select class="form-control" name="currency">
	                                    <option value="">Select Currency...</option>
	                                    <?php foreach ($fetch_currency as $currency): ?>
	                                      <option value="<?php echo $currency->currency_id ?>"><?php echo $currency->currency_name ?></option>
	                                    <?php endforeach ?>
	                                  </select>
								  </div>
								  <div class="col-lg-12 col-md-12 col-sm-13">
		                              <div class="form-group">
		                                   <label><a href="" style="color:red;">Click Here</a> for bank account registration guide</label>
		                                  
		                              </div>
		                          </div>
								  <div class="form-group">
									<label for="password">Bank Name</label>
									<select class="form-control" name="bank_name">
	                                    <option value="">e.g. Central Bank of India</option>
	                                    <?php foreach ($fetch_bank as $bank): ?>
	                                      <option value="<?php echo $bank->bank_id ?>"><?php echo $bank->bank_name ?></option>
	                                    <?php endforeach ?>
	                                  </select>
								  </div>
								  <div class="form-group">
									<label for="password">Account Name</label>
									<input type="text" name="account_name" placeholder="e.g. John Smith" class="form-control">
								  </div>
								  <div class="form-group">
									<label for="password">Account Number</label>
									<input type="number" name="account_number" placeholder="e.g. 123456789101112" class="form-control">
								  </div>
								 
								  <div class="form-group">
									<label for="password">IFSC Code</label>
									<input type="text" name="ifsc" placeholder="e.g. ABCD0123456" class="form-control">
								  </div>
								  <div class="form-group">
									<label for="password">PAN</label>
									<input type="text" name="pan" placeholder="e.g. AAAPA1234A" class="form-control">
								  </div>
								  <div class="form-group">
									<label for="password">Account Type</label>
									<select class="form-control" name="account_type">
	                                    <option value="">'Current' or 'Savings'</option>
	                                    <option vlaue="Current">Current</option>
	                                    <option vlaue="Savings">Savings</option>
	                                  </select>
								  </div>
								  <input type="submit" name="submit" value="Submit" class="btn btn-primary">
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php }else{ ?>

				<div class="col-md-12">
       				<div class="panel panel-primary">
			            <div class="panel-heading">
							Bank Details
							<a href="<?= base_url('Modify-Bank-Account') ?>" class="btn btn-warning" style="float:right;">Edit</a>
						</div>
						<div class="panel-body" >
							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> Account Type &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<input type="text" name="token" class="form-control" value="<?php echo $fetch_bank_details->ven_bank_account ?>"  readonly="">
								</div>
							</div>

							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> Country &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<input type="text" name="token" class="form-control" value="<?php echo $fetch_bank_details->name ?>"  readonly="">
								</div>
							</div>

							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> Bank Name &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<input type="text" name="token" class="form-control" value="<?php echo $fetch_bank_details->bank_name ?>"  readonly="">
								</div>
							</div>
							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> Account Holder Name &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<input type="text" name="token" class="form-control" value="<?php echo $fetch_bank_details->ven_bank_account_name ?>"  readonly="">
								</div>
							</div>
							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> Account Number &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<input type="text" name="token" class="form-control" value="<?php echo $fetch_bank_details->ven_bank_account_no ?>"  readonly="">
								</div>
							</div>
							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> IFSC Code &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<input type="text" name="token" class="form-control" value="<?php echo $fetch_bank_details->ven_bank_ifsc ?>"  readonly="">
								</div>
							</div>
							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> Pancard No. &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<input type="text" name="token" class="form-control" value="<?php echo $fetch_bank_details->ven_bank_pan ?>"  readonly="">
								</div>
							</div>
							<div class="col-md-6 form-group pull-left">
            					<div class="input-group">
			  						<span class="input-group-addon"><i class="fa fa-envelope"></i> Account &nbsp;&nbsp;&nbsp;&nbsp; </span>
									<input type="text" name="token" class="form-control" value="<?php echo $fetch_bank_details->ven_bank_account_type ?>"  readonly="">
								</div>
							</div>
							
				        </div> 
				    </div>
				</div>

				
			<?php } ?>

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
