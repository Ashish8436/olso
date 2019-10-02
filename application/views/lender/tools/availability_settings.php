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
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">How far in advance can book Borrower</h4>
							
						</div>
						<div class="panel-body">
							 <form method="post" action="<?= base_url('Store-Advance_month'); ?>">
							 	<div class="row pad-20" >
								  <div class="col-lg-4 col-md-4 col-sm-12">
                                        <div class="form-group">
                                            <label>Select Your Item</label>
                                            <select class="form-control" name="item_id" id="items" required>
                                                <option value="">Choose Item...</option>
                                                <?php foreach ($fetch_items as $item): ?>
                                                  <option value="<?php echo $item->item_id ?>"><?php echo $item->item_name;  ?></option>
                                                <?php endforeach ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-5">
                                        <label>Select Months</label>
                                        <select name="advmonth_id" class="form-control">
                                            <?php foreach ($fetch_advance_booking_months as $months): ?>
                                                <option value="<?php echo $months->advmonth_id; ?>">
                                                    <?php if($months->advmonth_id=='1'){ ?>
                                                        I'll open specific dates
                                                    <?php } else if($months->advmonth_name=='1'){ ?>
                                                        1 month in advance
                                                    <?php }else{ ?>
                                                        <?php echo $months->advmonth_name; ?> months in advance
                                                    <?php } ?>
                                                </option>
                                            <?php endforeach ?>
                                        </select>
                                        <br>
                                        <label style="font-weight: bold; font-size: 16px;"><span style="font-weight: bold; color:#ff214f;">Tip:</span> Block dates on your calendar when your place isn't available </label>
                                    </div>
                                </div>
								  <div class="col-md-14" style="float: right;">
	                                <input type="submit" name="submit" value="Submit" class="btn btn-success btn-lg">
	                              </div>
							</form>
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
