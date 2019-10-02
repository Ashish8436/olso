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


<!-- Page container -->
<div class="page-container">
<?php include('pages/header.php'); ?>
	 <!-- Main content -->
	 <div class="main-content">
			<h1 class="page-title">Item Details</h1>
			<!-- Breadcrumb -->
			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						
						<div class="panel-body">
							<label><span style="color:#6059EE;">Lendor Id :</span> <?php echo $un_approble_items_details->oauth_uid ?></label> || 
							<label><span style="color:#6059EE;">Lender Name :</span> <label>Lendor Id: <?php echo $un_approble_items_details->first_name ?> <?php echo $un_approble_items_details->last_name ?></label></label> ||
							<label><span style="color:#6059EE;">Email :</span> <?php echo $un_approble_items_details->email ?></label> ||
							<label><span style="color:#6059EE;">Mobile no. :</span> <?php echo $un_approble_items_details->mobile_no ?></label> ||
							<label><span style="color:#6059EE;">Item Id :</span> <?php echo $un_approble_items_details->random_itemno ?></label> || 
							<hr>
							
							<div class="col-lg-9 col-md-12 col-sm-12 col-pad">
						        <div class="content-area5">
						            <div class="dashboard-content">
										<div class="row">
						                    <div class="col-lg-12 col-md-12">
						                        <div class="dashboard-list">
						                            <div class="dashboard-message bdr clearfix ">
						                                <div class="tab-box-2">
						                                    <div class="clearfix mb-30 comments-tr">
						                                        
						                                        <ul class="nav nav-pills float-right" id="pills-tab" role="tablist">
						                                            <li class="nav-item">
						                                                <a class="nav-link active show" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="ture">Item Details</a>
						                                            </li>
						                                            <li class="nav-item">
						                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Item Images</a>
						                                            </li>
						                                        </ul>
						                                    </div>
						                                    <div class="tab-content" id="pills-tabContent">
						                                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
						                                            <div class="comment">
						                                                
						                                                <div class="comment-content">
						                                                    <div class="comment-meta">
						                                                       
						                                                        <div class="mt-3 text-secondary d-flex">
						                                                          <?php if($un_approble_items_details->item_image1!=''){ ?>
						                                                          <img src="<?= base_url()?>/<?php echo $un_approble_items_details->item_image1 ?>" alt="check" class="align-self-center" style="width:25%;"/>
						                                                      	  <?php } ?>
						                                                      	  <?php if($un_approble_items_details->item_image2!=''){ ?>
						                                                          <img src="<?= base_url()?>/<?php echo $un_approble_items_details->item_image2 ?>" alt="check" class="align-self-center" style="width:25%;"/>
						                                                      	  <?php } ?>
						                                                      	  <?php if($un_approble_items_details->item_image3!=''){ ?>
						                                                          <img src="<?= base_url()?>/<?php echo $un_approble_items_details->item_image3 ?>" alt="check" class="align-self-center" style="width:25%;"/>
						                                                      	  <?php } ?>
						                                                      	  <?php if($un_approble_items_details->item_image4!=''){ ?>
						                                                          <img src="<?= base_url()?>/<?php echo $un_approble_items_details->item_image4 ?>" alt="check" class="align-self-center" style="width:25%;"/>
						                                                      	  <?php } ?>
						                                                      	  <?php if($un_approble_items_details->item_image5!=''){ ?>
						                                                          <img src="<?= base_url()?>/<?php echo $un_approble_items_details->item_image5 ?>" alt="check" class="align-self-center" style="width:25%;"/>
						                                                      	  <?php } ?>
						                                                        </div>
						                                                       
						                                                    </div>
						                                                    
						                                                </div>
						                                            </div>
						                                           
						                                        </div>
						                                        <div class="tab-pane" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						                                           
						                                            <div class="col-md-14">
						                                               <div class="table-responsive">
																			<table class="table table-striped table-bordered table-hover" >
																				
																				<tbody>
																					
																					<tr class="gradeX">
																						<td>
																							Item Name
																						</td>
																						<td>
																							<?php echo $un_approble_items_details->item_name; ?>
																						</td>	
																					</tr>
																					<tr class="gradeX">
																						<td>
																							Category
																						</td>
																						<td>
																							<?php echo $un_approble_items_details->cat_name; ?>
																						</td>	
																					</tr>
																					<tr class="gradeX">
																						<td>
																							Sub Category
																						</td>
																						<td>
																							<?php echo $un_approble_items_details->subcat_name; ?>
																						</td>	
																					</tr>
																					<tr class="gradeX">
																						<td>
																							Subtype
																						</td>
																						<td>
																							<?php echo $un_approble_items_details->subtype_name; ?>
																						</td>	
																					</tr>
																					<tr class="gradeX">
																						<td>
																							
																						</td>
																						<td>
																							<form method="post" action="<?= base_url('Admin-portal/accept-unapproble-item') ?>">
																							<input type="hidden" value="<?php echo $random_itemno; ?>" name="random_itemno">
																							<input type="submit" name="submit" class="btn btn-success" value="Accept">

																							<a class="btn btn-danger" onclick="showCancel()">Cancel</a><br>
																							</form>
																							<div id="cancel_reason" style="display: none;">
																							<form method="post" action="<?= base_url('Admin-portal/cancel-unapproble-item') ?>">
																								<input type="hidden" value="<?php echo $random_itemno; ?>" name="random_itemno">
																							<label>Cancel Reason</label>
																							<textarea class="form-control" name="admin_cancel_reason"></textarea>
																							<input type="submit" name="submit" class="btn btn-primary" style="float:right;margin-top: 10px;">
																							</form>
																							</div>
																						</td>	
																					</tr>
																				
																					
																				</tbody>
																			</table>
																		</div>
																	</div>
						                                            </div>
						                                           
						                                        </div>
						                                    </div>
						                                </div>
						                            </div>
						                        </div>
						                    </div>
						                </div>
						            </div>
						        </div>
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
	function showCancel() {
   document.getElementById('cancel_reason').style.display = "block";
}
</script>
</body>

<!-- Mirrored from www.g-axon.com/integral-3.0/classic/data-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2017 11:49:07 GMT -->
</html>
_