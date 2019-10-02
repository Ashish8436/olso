<?php
$_SESSION['url'] = "http://localhost".$_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.g-axon.com/integral-3.0/classic/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2017 11:49:03 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Integral | Data Tables</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="<?= base_url('olso_admin_assets/css/entypo.css');?>" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="<?= base_url('olso_admin_assets/css/font-awesome.min.css');?>" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?= base_url('olso_admin_assets/css/bootstrap.min.css');?>" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Integral core stylesheet -->
<link href="<?= base_url('olso_admin_assets/css/integral-core.css');?>" rel="stylesheet">
<!-- /integral core stylesheet -->

<link href="<?= base_url('olso_admin_assets/css/integral-forms.css');?>" rel="stylesheet">
<link href="<?= base_url('olso_admin_assets/plugins/datatables/css/jquery.dataTables.css');?>" rel="stylesheet">
<link href="<?= base_url('olso_admin_assets/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css');?>" rel="stylesheet">


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="<?= base_url('olso_admin_assets/js/html5shiv.min.js');?>"></script>
      <script src="<?= base_url('olso_admin_assets/js/respond.min.js');?>"></script>
<![endif]-->
<script src="<?= base_url('olso_admin_assets/js/jquery.min.js');?>"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


</head>
<body>

<!-- Loader Backdrop -->
	<div class="loader-backdrop">           
	  <!-- Loader -->
		<div class="loader">
			<div class="bounce-1"></div>
			<div class="bounce-2"></div>
		</div>
	  <!-- /loader -->
	</div>
<!-- loader backgrop -->

<!-- Page container -->
<div class="page-container">
<?php include('pages/header.php'); ?>
	 <!-- Main content -->
	 <div class="main-content">
			<h1 class="page-title">All Transactions</h1>
			<!-- Breadcrumb -->
			<?php
			  if($this->session->flashdata('error_msg')){
			?>
			  <div class="alert alert-danger">
				  <?php echo $this->session->flashdata('error_msg'); ?>
			  </div>

			<?php } else if($this->session->flashdata('success_msg'))  { ?>
			  <div class="alert alert-success">
				  <?php echo $this->session->flashdata('success_msg'); ?>
			  </div>
			<?php } ?>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<div class="radio radio-replace radio-primary">
								<input type="radio" name="radios2" id="radio8" value="payment" onclick="payment();">
								<label for="radio8">Payment</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" name="radios2" id="radio9" value="not_payment" onclick="not_payment();">
								<label for="radio9">Not Payment</label>
							</div>	
							<hr>
							<?php
							$vendor_id= $_REQUEST['lender_id'];
							$sql = "select * from users as u, payment as p where u.oauth_uid=p.vendor_id and u.oauth_uid='$vendor_id'";
							$q=$this->db->query($sql)->row();
							?>
							<label><span style="color:#6059EE;">Lendor Id :</span> <?php echo $q->vendor_id ?></label> || 
							<label><span style="color:#6059EE;">Lender Name :</span> <label>Lendor Id: <?php echo $q->first_name ?> <?php echo $q->last_name ?></label></label> ||
							<label><span style="color:#6059EE;">Email :</span> <?php echo $q->email ?></label> ||
							<label><span style="color:#6059EE;">Mobile no. :</span> <?php echo $q->mobile_no ?></label>
						</div>
						<div class="panel-body" style="display: none;" id="not_pay">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover dataTables-example" >
									<thead>
										<tr>
											<th>No.</th>
											<th>Payment Id</th>
											<th>Payment Amount</th>
											<th>Item Name</th>
											<th>Method</th>
											<th>Bank</th>
											<th>Date</th>
											<th>Payment</th>										
										</tr>
									</thead>
									<tbody>
										<?php $i=1; foreach ($show_not_payment as $not_pay): ?>
											<tr class="gradeX">
												<td><?php echo $i;$i++; ?></td>
												<td><?php echo $not_pay->payment_id ?></td>
												<td><?php echo ($not_pay->payment_amount)-30 ?></td>
												<td><?php echo $not_pay->item_name ?></td>
												<td><?php echo $not_pay->payment_method ?></td>
												<td><?php echo $not_pay->payment_bank ?></td>
												<td><?php echo date("d M Y", $not_pay->created_at) ?></td>
												<td>
													<?php if($not_pay->admin_payment!='0'){ ?>
													<a href="#" class="btn btn-success">Yes</a>							
													<?php }else{ ?>
														<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" onClick="high('<?php echo $not_pay->payment_id;?>')">No</button>
													
													<?php } ?> 

												</td>

											</tr>
										<?php endforeach ?>
										
									</tbody>
								</table>
							</div>
						</div>
						<!-- Modal -->
						<form method="post" action="<?= base_url('Admin-portal/Update-Payment'); ?>">
						  <div class="modal fade" id="myModal" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Lender Payment</h4>
						        </div>
						        <div class="modal-body">
						          	<div class="form-group"> 
										<label class="col-sm-4 control-label" for="inputEmail3">Payment Id</label> 
										<div class="col-sm-8" id="show_payment_id"> 
											
										</div> 
									</div><br> 
									<div class="form-group"> 
										<label class="col-sm-4 control-label" for="inputEmail3">Payment Method</label> 
										<div class="col-sm-8"> 
											<input type="text" placeholder="EX: Google Pay OR Net Banking" class="form-control" name="admin_payment_name">
										 </div> 
									</div><br>
									<div class="form-group"> 
										<label class="col-sm-4 control-label" for="inputEmail3">Payment ID</label> 
										<div class="col-sm-8"> 
											<input type="text" class="form-control" name="admin_payment_id">
										 </div> 
									</div> 
						          <br>
						          
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
						        </div>
						      </div>
						      
						    </div>
						  </div>
						</form>
						<div class="panel-body" style="display: none;" id="pay">
							<div class="table-responsive">
								<table class="table table-striped table-bordered table-hover dataTables-example" >
									<thead>
										<tr>
											<th>No.</th>
											<th>Payment Id</th>
											<th>Payment Amount</th>
											<th>Item Name</th>
											<th>Method</th>
											<th>Bank</th>
											<th>Date</th>
											<th>Payment</th>										
										</tr>
									</thead>
									<tbody>
										<?php $i=1; foreach ($show_lender_payment as $pay): ?>
											<tr class="gradeX">
												<td><?php echo $i;$i++; ?></td>
												<td><?php echo $pay->payment_id ?></td>
												<td><?php echo ($pay->payment_amount)-30 ?></td>
												<td><?php echo $pay->item_name ?></td>
												<td><?php echo $pay->payment_method ?></td>
												<td><?php echo $pay->payment_bank ?></td>
												<td><?php echo date("d M Y", $pay->created_at) ?></td>
												<td>
													<?php if($pay->admin_payment!='0'){ ?>
													<a href="#" class="btn btn-success">Yes</a>							
													<?php }else{ ?>
														<a href="#" class="btn btn-danger">No</a>							
													
													<?php } ?> 

												</td>

											</tr>
										<?php endforeach ?>
										
									</tbody>
								</table>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!-- Footer -->
			<footer class="footer-main"> 
				&copy; 2016 <strong>Integral</strong> Admin Template by <a target="_blank" href="#/">G-axon</a>
			</footer>	
			<!-- /footer -->
		
	  </div>
	  <!-- /main content -->
	  
  </div>
  <!-- /main container -->
  
</div>
<!-- /page container -->

<!--Load JQuery-->

	
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/jquery.dataTables.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/jszip.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/pdfmake.min.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/vfs_fonts.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/extensions/Buttons/js/buttons.html5.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/extensions/Buttons/js/buttons.colVis.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/plugins/datatables/js/dataTables-script.js');?>"></script>
<script src="<?= base_url('olso_admin_assets/js/loader.js');?>"></script>

<script type="text/javascript">
	function payment(){
	  document.getElementById('not_pay').style.display ='none';
	  document.getElementById('pay').style.display ='block';
	}
	function not_payment(){
	  document.getElementById('pay').style.display ='none';
	  document.getElementById('not_pay').style.display ='block';
	  
	}
</script>
<script type="text/javascript">
	function high(id)
	{	
		
	        $('#show_payment_id').html("<input type='text' name='payment_id' class='form-control' value="+id+" readonly>");
	}
</script>

</body>

<!-- Mirrored from www.g-axon.com/integral-3.0/classic/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2017 11:49:07 GMT -->
</html>
