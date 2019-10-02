<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.g-axon.com/integral-3.0/classic/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2017 11:49:14 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title><?php echo $title ?></title>
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

<link href="<?= base_url('assets/lender_assets/css/integral-forms.css');?>" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('assets/lender_assets/dist/bootstrap-tagsinput.css');?>">


</head>
<body>
<?php echo $header; ?>
		
		<!-- Main content -->
		<div class="main-content">
			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix">
							<h4 class="panel-title">Form Wizard with Validation</h4>
							<ul class="panel-tool-options"> 
								<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
								<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
								<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
							</ul>
						</div>
						<div class="panel-body">
							<form id="rootwizard-2" class="form-wizard validate-form-wizard validate" method="post" action="<?= base_url('Items-Store'); ?>" enctype="multipart/form-data">
								<div class="wizard-navbar">
									<ul>
										<li class="active"><a href="#tab2-1" data-toggle="tab"><span>1</span> What's the item</a></li>
										<li><a href="#tab2-2" data-toggle="tab"><span>2</span> Pick a Category</a></li>
										<li><a href="#tab2-3" data-toggle="tab"><span>3</span> Operator</a></li>
										<li><a href="#tab2-4" data-toggle="tab"><span>4</span> Price plan</a></li>
										<li><a href="#tab2-5" data-toggle="tab"><span>5</span> Set your rental price</a></li>
										<li><a href="#tab2-6" data-toggle="tab"><span>6</span> Where’s your item located?</a></li>
										<li><a href="#tab2-7" data-toggle="tab"><span>7</span> Borrower requirements</a></li>
										<li><a href="#tab2-8" data-toggle="tab"><span>8</span> Rules Of Renting</a></li>
										<li><a href="#tab2-9" data-toggle="tab"><span>9</span> Something special for your first guests</a></li>
									</ul>
								</div>
								<div class="tab-content" style="margin-bottom: ">
									<div class="tab-pane  active" id="tab2-1">
										<div class="row"> 
											<div class="col-md-12"> 
												<div class="form-group"> 
													<label for="username" class="control-label">Name your item</label>
													<input type="text" name="item_name" class="form-control" placeholder="Item Name" id="item_name"  minlength="3">
												</div>
											</div> 
											<div class="col-md-12"> 
												<div class="form-group"> 
													<label for="password" class="control-label">Add some photos</label> <br>
													<div class="col-lg-5 float-left " style="padding:6px;border:1px solid #6c757d; border-radius: 10px; margin-right: 10px;">
		                                                <input type="file" name="item_image1" id="item_image1">
		                                            </div>
		                                            
		                                            <div class="col-lg-5 float-left" style="padding:6px;border:1px solid #6c757d; border-radius: 10px;margin-right: 10px;">
		                                                <input type="file" name="item_image2" id="item_image2">
		                                            </div>
		                                            </p>
		                                            <div class="col-lg-5 float-left" style="padding:6px;border:1px solid #6c757d; border-radius: 10px;margin-right: 10px; margin-top: 10px;">
		                                                <input type="file" name="item_image3" id="item_image3">
		                                            </div>
		                                            
		                                            <div class="col-lg-5 float-left" style="padding:6px;border:1px solid #6c757d; border-radius: 10px;margin-right: 10px;margin-top: 10px;">
		                                                <input type="file" name="item_image4" id="item_image4">
		                                            </div>
		                                            
		                                            <div class="col-lg-5 float-left" style="padding:6px;border:1px solid #6c757d; border-radius: 10px;margin-right: 10px;margin-top: 10px;">
		                                                <input type="file" name="item_image5" id="item_image5">
		                                            </div>
		                                            
		                                             <div class="col-md-12">
		                                                <div class="form-group">
		                                                   <p>
		                                                        <div class="col-md-12 float-left" style="margin-top:10px; margin-bottom:30px;" >
		                                                            <img id="photo_image1" src="http://placehold.it/100x100" alt="your image" />
		                                                            <img id="photo_image2" src="http://placehold.it/100x100" alt="your image" />
		                                                            <img id="photo_image3" src="http://placehold.it/100x100" alt="your image" />
		                                                            <img id="photo_image4" src="http://placehold.it/100x100" alt="your image" />
		                                                            <img id="photo_image5" src="http://placehold.it/100x100" alt="your image" />
		                                                          </div>
		                                                    </p>
		                                                </div>
		                                            </div> 
												</div> 
											</div> 
										</div>
									</div>
									<div class="tab-pane" id="tab2-2">
										<div class="row"> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="name" class="control-label">Category1</label>
													<select class="form-control" name="cat_id" id="category">
		                                                <option value="">Choose Category...</option>
		                                                 <?php foreach ($fetch_category as $category) { ?>
		                                                
		                                                    <option value="<?php echo $category->cat_id; ?>"><?php echo $category->cat_name; ?></option>
		                                                
		                                                <?php } ?>
		                                            </select>
												</div>
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="emailfield" class="control-label">Category2</label> 
													<select class="form-control" name="subcat_id" id="subcat" >
		                                                <option value="">Choose Sub-Category...</option>
		                                            </select>
												</div> 
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="emailfield" class="control-label">Category3</label> 
													<select class="form-control" name="subtype_id" id="subtype">
		                                                <option value="">Choose Types...</option>
		                                            </select>
												</div> 
											</div> 
										</div>
										<div class="row">
											<div class="col-md-6"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Item Quantity</label>
													<input type="number" name="item_qty" class="form-control" placeholder="Total Item Quantity">
												</div>
											</div>
										
											<div class="col-md-6"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Add Tags</label>
													<section id="examples">
      													<div class="example example_markup">
												          	<div class="bs-example">
													            <input type="text" name="item_tags" data-role="tagsinput"/>
													         </div>
												        </div>
													</section>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Describe your item</label>
													<textarea class="form-control" name="item_description" placeholder="Add a details description here" id="item_description"></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Your Item Specification</label><br>
													<label for="about" class="">Add other details that can help borowers understand about item in detail, accuracy, working,handling etc</label>
													<textarea class="form-control" name="item_specification" placeholder="Add a Specifications"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab2-3">
										<div class="row"> 
											<div class="col-md-6"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Will Operator be available</label>
													<select class="form-control" name="item_oper_available" required>
														<option value=''>Select .....</option>
	                                                    <?php foreach ($fetch_item_oper_available as $operator_ava) { ?>
	                                                    <?php if($fetch_create_items->item_oper_available==$operator_ava->operator_id){ ?>
	                                                        <option selected value="<?php echo $operator_ava->operator_id; ?>"><?php echo $operator_ava->operator_name; ?></option>
	                                                    <?php } else{ ?>
	                                                        <option value="<?php echo $operator_ava->operator_id; ?>"><?php echo $operator_ava->operator_name; ?></option>
	                                                    <?php } ?>
	                                                
	                                                <?php } ?>  
	                                                </select>
												</div>
											</div> 
											<div class="col-md-6"> 
												<div class="form-group"> 
													<label for="cardnumber" class="control-label">Is Item Available for delivery</label> 
													<select class="form-control" name="item_delivery" required>
	                                                    <option value=''>Select .....</option>
	                                                     <?php foreach ($fetch_available_for_delivery as $ava_deli) { ?>
	                                                    <?php if($fetch_create_items->item_delivery==$ava_deli->available_id){ ?>
	                                                        <option selected value="<?php echo $ava_deli->available_id; ?>"><?php echo $ava_deli->available_name; ?></option>
	                                                    <?php } else{ ?>
	                                                        <option value="<?php echo $ava_deli->available_id; ?>"><?php echo $ava_deli->available_name; ?></option>
	                                                    <?php } ?>
	                                                
	                                                    <?php } ?>  
	                                                </select>
												</div> 
											</div> 
										</div>
										
									</div>
									<div class="tab-pane" id="tab2-4">
										<div class="row"> 
											<div class="col-md-12"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">What’s the current value of the item? </label>
													<input type="number" class="form-control" name="item_current_price" placeholder="Current Price" >
												</div>
											</div> 
											<div class="col-md-12"> 
												<div class="form-group"> 
													<label for="cardnumber" class="control-label">On what plans Item can be rented?</label> 
													<div class="">
			                                            <div class="checkbox checkbox-replace checkbox-primary">
															<input type="checkbox" id="hourly_check" name="item_plans[]" value="1" onclick="hourlyFunction()">
															<label for="hour">Hourly Basis</label>
														</div>
														<div class="checkbox checkbox-replace checkbox-primary">
															<input type="checkbox" id="day_check" name="item_plans[]" value="3" onclick="dayFunction()">
															<label for="dayly">Daily Basis(24h)</label>
														</div>
														<div class="checkbox checkbox-replace checkbox-primary">
															<input type="checkbox" id="monthly_check" name="item_plans[]" value="2" onclick="monthlyFunction()">
															<label for="monthly">Monthly Basis(30days)</label>
														</div>
			                              
			                                        </div>
												</div> 
											</div> 
										</div>
									</div>
									<div class="tab-pane" id="tab2-5">
										<div class="row" id="hourly" style="display: none;"> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Per Hourly Price </label>
													<input type="text" class="form-control" name="hr_price" >
												</div>
											</div> 
											<div class="col-md-4 float-left">
                                                <div class="form-group">
                                                    <label>Add Special Discount Per Hourly</label>
                                                    <a class="btn btn-secondary" style="font-weight:bold; color:white;width:96%;" data-toggle="modal" data-target="#hourmodel"><i class="fa fa-plus" ></i> Add Discount</a>
                                                </div>
                                            </div>
											
										</div>
										<div class="row" id="monthly" style="display: none;">
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Per Monthly Price </label>
													<input type="text" class="form-control" name="monthly_price" >
												</div>
											</div> 
											<div class="col-md-4 float-left">
                                                <div class="form-group">
                                                    <label>Add Special Discount Per Monthly</label>
                                                    <a class="btn btn-secondary" style="font-weight:bold; color:white;width:96%;" data-toggle="modal" data-target="#monthlymodel"><i class="fa fa-plus"></i> Add Discount</a>
                                                </div>
                                            </div>
											
										</div>
										<div class="row" id="day" style="display: none;">
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Per Day Price</label>
													<input type="text" class="form-control" name="day_price" >
												</div>
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Weekly Discount</label>
													<input type="text" class="form-control" name="week_disc" >
												</div>
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Minimum Day Booking</label>
													<input type="text" class="form-control" name="min_day_book" >
												</div>
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Maximum Day Booking</label>
													<input type="text" class="form-control" name="max_day_book" >
												</div>
											</div> 
											
										</div>
									</div>
									<div class="tab-pane" id="tab2-6">
										<div class="row"> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="name" class="control-label">Country</label>
													<select class="form-control" name="country_id" id="country">
	                                                    <option value="">Choose Country...</option>
	                                                     <?php foreach ($fetch_country as $country) { ?>
	                                                    
	                                                        <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
	                                                    
	                                                    <?php } ?>
	                                                </select>
												</div>
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="emailfield" class="control-label">State</label> 
													<select class="form-control" name="state_id" id="state">
	                                                    <option value="">Choose State...</option>                           
	                                                </select>
												</div> 
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="emailfield" class="control-label">City</label> 
													<select class="form-control" name="city_id" id="city">
	                                                    <option value="">Choose City...</option>                           
	                                                </select>
												</div> 
											</div> 
										</div>
										<div class="row">
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Pin Code</label>
													<input type="text" class="form-control" name="pincode" placeholder="Enter Postcode">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Address 1</label>
													<textarea class="form-control" name="address1" placeholder="Enter Full Address"></textarea>
												</div>
											</div>
										
											<div class="col-md-6"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Address 2</label><br>
													<textarea class="form-control" name="address2" placeholder="Enter Full Address"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="tab-pane" id="tab2-7">
										<div class="row"> 
											<div class="col-md-12"> 
												<label style="font-size:25px;font-weight: bold;">
                                                    Olso Borrower requirements
                                                </label><br>
                                                <label>Olso has requirements that all Borrower must meet before they Send Request.
                                                </label>
											</div> 
										</div>
										<div class="row">
											<div class="col-md-12"> 
												<label>All OLSO borrowers must provide:</label>
                                                <div class="col-md-12">
                                                  <img src="http://localhost/olso1/assets/img/10-512.png" width="20px" > Email address
                                                </div>
                                                <div class="col-md-12">
                                                  <img src="http://localhost/olso1/assets/img/10-512.png" width="20px" > Confirmed phone number
                                                </div>
                                                <div class="col-md-12">
                                                  <img src="http://localhost/olso1/assets/img/10-512.png" width="20px" > Verified Photo
                                                </div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12"> 
												<label>Before booking your Item, each Borrower must:</label>
                                                <div class="col-md-12">
                                                  <img src="http://localhost/olso1/assets/img/10-512.png" width="20px" > Agree to your Item Policies
                                                </div>
                                                <div class="col-md-12">
                                                  <img src="http://localhost/olso1/assets/img/10-512.png" width="20px" > Message you the purpose of Renting
                                                </div>
                                                <div class="col-md-12">
                                                  <img src="http://localhost/olso1/assets/img/10-512.png" width="20px" > Verified Photo
                                                </div>

											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="checkbox checkbox-replace checkbox-primary">
													<input type="checkbox" id="gov_check" onclick="govIssued()">
													<label for="gov_id_ss">Government-issued ID submitted to OLSO(max selection 2)</label>
												</div>
												<div id="gov_ids" style="display:none;margin-left:30px;">
                                                    <div class="checkbox checkbox-replace checkbox-info">
                                                        <input id="check5" type="checkbox" name="gov_issued_ids[]" value="Driving Licence">
                                                        <label for="check5">
                                                            Driving Licence
                                                        </label>
                                                    </div>
                                                    <div class="checkbox checkbox-replace checkbox-info">
                                                        <input id="check6" type="checkbox" name="gov_issued_ids[]" value="Aadhar Card">
                                                        <label for="check6">
                                                            Aadhar Card
                                                        </label>
                                                    </div>
                                                    <div class="checkbox checkbox-replace checkbox-info">
                                                        <input id="check7" type="checkbox" name="gov_issued_ids[]" value="Voter ID">
                                                        <label for="check7">
                                                            Voter ID
                                                        </label>
                                                    </div>
                                                    <div class="checkbox checkbox-replace checkbox-info">
                                                        <input id="check8" type="checkbox" name="gov_issued_ids[]" value="Passport">
                                                        <label for="check8">
                                                            Passport
                                                        </label>
                                                    </div>
                                                   <div class="checkbox checkbox-replace checkbox-info">
                                                        <input id="check9" type="checkbox" name="gov_issued_ids[]" value="Rent agreement / Utility Bill Photo">
                                                        <label for="check9">
                                                            Rent agreement / Utility Bill Photo
                                                        </label>
                                                    </div>
                                                    <div class="checkbox checkbox-replace checkbox-info">
                                                        <input id="check10" type="checkbox" name="gov_issued_ids[]" value="Student ID / Employee ID">
                                                        <label for="check10">
                                                            Student ID / Employee ID
                                                        </label>
                                                    </div>
                                                </div>
											</div>

										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="checkbox checkbox-replace checkbox-primary">
													<input type="checkbox" name="recom_byother_lender" value="1">
													<label for="gov_id_ss">Recommended by other Lenders and have no negative reviews</label>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane" id="tab2-8">
										<div class="row"> 
											<div class="col-md-12">

												<div id='TextBoxesGroup'>
		                                            <div id="TextBoxDiv1">
		                                                <label>Add Rules 1: </label> <input type='textbox' name="rules_of_renting[]" id='textbox1' style="border-radius: 2px;border: 1px solid #e8e7e7;color: #6c6c6c;font-size: 13px;height: 45px;width:79%;margin-bottom: 4px;">
		                                                <input type='button' value='Add Rules' name="rules_of_renting[]" id='addButton' class="btn btn-secondary" style="font-weight: bold;">
		                                            </div>
		                                            
		                                        </div>
		                                        
											</div>
										</div>
									</div>

									<div class="tab-pane" id="tab2-9">
										<div class="row"> 
											<div class="col-md-12">
												<div class="radio radio-replace radio-primary">
													<input type="radio" id="offer20" name="item_offer" value="1">
													<label for="offer20" style="font-weight: bold;">Offer 20% off to your first guests</label>
												</div>
												<label class="col-md-6" style="margin-left: 14px;">
                                                    RECOMMENDED
                                                    The first 3 borrowers who book your item will get
                                                    20% off their stay. This special offer can attract
                                                    new borrowers, and help you get the 3 reviews you
                                                    need for a star rating.
                                                </label>
											</div>
										</div>
										<div class="row"> 
											<div class="col-md-12">
												<div class="radio radio-replace radio-primary">
													<input type="radio" id="offer21" name="item_offer" value="0">
													<label for="offer21" style="font-weight: bold;">Don’t add a special offer</label>
												</div>
												<label class="col-md-6" style="margin-left: 14px;">
                                                    Once you publish your listing, you won’t be able to add this offer.
                                                </label>
											</div>
										</div>
									</div>


									<ul class="pager wizard"> 
										<li class="previous"><a href="javascript:void(0)"><i class="icon-left-open"></i>Previous</a></li> 
										<li class="next"><a href="javascript:void(0)">Next<i class="icon-right-open"></i></a> </li>
										<li style="display: none;" id="show_submit_btn"><input type="submit" name="submit" value="Submit" class="btn btn-success"></li>

									</ul>
								</div>

								<!-- Hourly Modal -->
                                  <div class="modal fade" id="hourmodel" role="dialog" style="margin-top: 10%;">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            Hourly Discount Part
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          
                                        </div>
                                        <div class="modal-body">
                                            <div style="margin-bottom: 20px;">
                                              <div class="col-md-5 float-left">
                                              <input type="text" name="hr_disc[]" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-4 float-left" style="margin-left:-20px;">
                                                <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    
                                                </select>
                                                </div>
                                                <div class="col-md-3 float-left">
                                                    <a class="btn btn-secondary" onclick="showHr2()">Add</a>
                                                </div>
                                            </div>
                                            <br>
                                            <div style="margin-bottom: 10px;display: none;" id="hr2">
                                                <div class="col-md-5 float-left">
                                                  <input type="text" name="hr_disc[]" class="form-control" placeholder="Enter Discount">
                                                  </div>
                                                  <div class="col-md-4 float-left" style="margin-left:-20px;">
                                                    <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    
                                                    </select>
                                                    </div>
                                                    <div class="col-md-3 float-left" style="margin-left: -20px;">
                                                        <a class="btn btn-secondary" onclick="showHr3()">Add</a>
                                                    </div>
                                            </div>
                                            <br>
                                            <div style="margin-top: 10px;display: none;" id="hr3">
                                                <div class="col-md-5 float-left">
                                                  <input type="text" name="hr_disc[]" class="form-control" placeholder="Enter Discount">
                                                  </div>
                                                  <div class="col-md-4 float-left" style="margin-left:-20px;">
                                                    <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    
                                                </select>
                                                    </div>
                                                    <div class="col-md-3 float-left" style="margin-left: -20px;">
                                                        <a class="btn btn-secondary" onclick="showHr4()">Add</a>
                                                    </div>
                                            </div>
                                            <br>
                                            <div style="margin-top: 20px;display: none;" id="hr4">
                                                <div class="col-md-5 float-left">
                                                  <input type="text" name="hr_disc[]" class="form-control" placeholder="Enter Discount">
                                                  </div>
                                                  <div class="col-md-4 float-left" style="margin-left:-20px;">
                                                    <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    
                                                </select>
                                                    </div>
                                                    <div class="col-md-3 float-left" style="margin-left: -20px;">
                                                        <a class="btn btn-secondary" onclick="showHr5()">Add</a>
                                                    </div>
                                            </div>
                                            <br>
                                            <div style="margin-top: 20px;display: none;" id="hr5">
                                                <div class="col-md-5 float-left">
                                                  <input type="text" name="hr_disc[]" class="form-control" placeholder="Enter Discount">
                                                  </div>
                                                  <div class="col-md-4 float-left" style="margin-left:-20px;">
                                                    <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    
                                                </select>
                                                    </div>
                                                    <div class="col-md-3 float-left" style="margin-left: -20px;">
                                                        <a class="btn btn-secondary" onclick="showHr6()">Add</a>
                                                    </div>
                                            </div>
                                            <br>
                                            <div style="margin-top: 20px;display: none;" id="hr6">
                                                <div class="col-md-5 float-left" >
                                                  <input type="text" name="hr_disc[]" class="form-control" placeholder="Enter Discount">
                                                  </div>
                                                  <div class="col-md-4 float-left" style="margin-left:-20px;">
                                                    <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    
                                                </select>
                                                    </div>
                                                    <div class="col-md-3 float-left" style="margin-left: -20px;">
                                                        <a class="btn btn-secondary" onclick="showHr7()">Add</a>
                                                    </div>
                                            </div>
                                            <br>
                                            <div style="margin-top: 20px;display: none;" id="hr7">
                                                <div class="col-md-5 float-left">
                                              <input type="text" name="hr_disc[]" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-4 float-left" style="margin-left:-20px;">
                                                <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    
                                                </select>
                                                </div>
                                                <div class="col-md-3 float-left" style="margin-left: -20px;">
                                                    <a class="btn btn-secondary" onclick="showHr8()">Add</a>
                                                </div>
                                            </div>
                                            <br>
                                            <div style="margin-top: 20px;display: none;" id="hr8">
                                                <div class="col-md-5 float-left" >
                                              <input type="text" name="hr_disc[]" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-4 float-left" style="margin-left:-20px;">
                                                <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>

                              <!-- Monthly Modal -->
                                  <div class="modal fade" id="monthlymodel" role="dialog" style="margin-top: 10%;">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            Monthly Discount Part
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          
                                        </div>
                                        <div class="modal-body">
                                            <div style="margin-bottom: 20px;">
                                              <div class="col-md-5 float-left">
                                              <input type="text" name="month_disc[]" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-5 float-left" style="margin-left:-20px;">
                                                <select class="form-control" name="no_month[]">
                                                    <option value="">Select Month...</option>
                                                    <option value="1">1</option>
                                                    <option value="3">3</option>
                                                    <option value="6">6</option>
                                                    <option value="12">12</option>
                                                    <option value="24">24</option>
                                                    
                                                </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div style="margin-bottom: 20px;">
                                              <div class="col-md-5 float-left">
                                              <input type="text" name="month_disc[]" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-5 float-left" style="margin-left:-20px;">
                                                <select class="form-control" name="no_month[]">
                                                    <option value="">Select Month...</option>
                                                    <option value="1">1</option>
                                                    <option value="3">3</option>
                                                    <option value="6">6</option>
                                                    <option value="12">12</option>
                                                    <option value="24">24</option>
                                                    
                                                </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div style="margin-bottom: 20px;">
                                              <div class="col-md-5 float-left">
                                              <input type="text" name="month_disc[]" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-5 float-left" style="margin-left:-20px;">
                                                <select class="form-control" name="no_month[]">
                                                    <option value="">Select Month...</option>
                                                    <option value="1">1</option>
                                                    <option value="3">3</option>
                                                    <option value="6">6</option>
                                                    <option value="12">12</option>
                                                    <option value="24">24</option>
                                                    
                                                </select>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
<script src="<?= base_url('assets/lender_assets/dist/bootstrap-tagsinput.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/dist/bootstrap-tagsinput/bootstrap-tagsinput-angular.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/metismenu/js/jquery.metisMenu.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/blockui-master/js/jquery-ui.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/blockui-master/js/jquery.blockUI.js');?>"></script>
<!--Ajax Validattion-->
<script src="<?= base_url('assets/lender_assets/js/jquery.validate.min.js');?>"></script>
<!--Bootstrap Wizard-->
<script src="<?= base_url('assets/lender_assets/plugins/wizard/js/jquery.bootstrap.wizard.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/wizard/js/wizard-script.js');?>"></script>

<script src="<?= base_url('assets/lender_assets/js/functions.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/js/loader.js');?>"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('#offer20').click(function(){
        $("#show_submit_btn").show();
    });


});
</script>

<script>
    function showHr2() {
   document.getElementById('hr2').style.display = "block";
}
function showHr3() {
   document.getElementById('hr3').style.display = "block";
}
function showHr4() {
   document.getElementById('hr4').style.display = "block";
}
function showHr5() {
   document.getElementById('hr5').style.display = "block";
}
function showHr6() {
   document.getElementById('hr6').style.display = "block";
}
function showHr7() {
   document.getElementById('hr7').style.display = "block";
}
function showHr8() {
   document.getElementById('hr8').style.display = "block";
}
</script>
<script type="text/javascript">

$(document).ready(function(){

    var counter = 2;
        
    $("#addButton").click(function () {
                
    if(counter>10){
            alert("Only 10 textboxes allow");
            return false;
    }   
        
    var newTextBoxDiv = $(document.createElement('div'))
         .attr("id", 'TextBoxDiv' + counter);
                
    newTextBoxDiv.after().html('<label>Add Rules '+ counter + ' : </label>' +
          '<input type="text" name="rules_of_renting[]" id="textbox' + counter + '" value=""  style="border-radius: 2px;border: 1px solid #e8e7e7;color: #6c6c6c;font-size: 13px;height: 45px;width:79%;">');
            
    newTextBoxDiv.appendTo("#TextBoxesGroup");

                
    counter++;
     });

     $("#removeButton").click(function () {
    if(counter==1){
          alert("No more textbox to remove");
          return false;
       }   
        
    counter--;
            
        $("#TextBoxDiv" + counter).remove();
            
     });
        
     $("#getButtonValue").click(function () {
        
    var msg = '';
    for(i=1; i<counter; i++){
      msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
    }
          alert(msg);
     });
  });
</script>
<script>
    $(document).ready(function () {
    $("input[name='gov_issued_ids[]']").change(function () {
        var maxAllowed = 2;
        var cnt = $("input[name='gov_issued_ids[]']:checked").length;
        if (cnt > maxAllowed) {
            $(this).prop("checked", "");
            alert('You can select maximum ' + maxAllowed + ' Government-issued ID!!');
        }
    });
});
</script>

<script>


function hourlyFunction() {
  var checkBox = document.getElementById("hourly_check");
  var text = document.getElementById("hourly");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}

function dayFunction() {
  var checkBox = document.getElementById("day_check");
  var text = document.getElementById("day");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}

function monthlyFunction() {
  var checkBox = document.getElementById("monthly_check");
  var text = document.getElementById("monthly");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
function govIssued() {
  var checkBox = document.getElementById("gov_check");
  var text = document.getElementById("gov_ids");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

    <script type="text/javascript">
        function itemImage1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo_image1')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#item_image1").change(function () {
            itemImage1(this);
        }); 

        function itemImage2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo_image2')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#item_image2").change(function () {
            itemImage2(this);
        }); 

        function itemImage3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo_image3')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#item_image3").change(function () {
            itemImage3(this);
        }); 

        function itemImage4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo_image4')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#item_image4").change(function () {
            itemImage4(this);
        }); 

        function itemImage5(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo_image5')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#item_image5").change(function () {
            itemImage5(this);
        }); 

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

<script>
$(document).ready(function(){
 
 $('#subcat').change(function(){
  var subcat_id = $('#subcat').val();
  if(subcat_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Create_item/fetch_subtype",
    method:"POST",
    data:{subcat_id:subcat_id},
    success:function(data)
    {
     $('#subtype').html(data);
     
    }
   });
  }
  else
  {
   $('#subtype').html('<option value="">Choose Type...</option>');
  
  }
 }); 
});

</script>


<script>
$(document).ready(function(){
 
 $('#country').change(function(){
  var country_id = $('#country').val();
  if(country_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Create_item/fetch_state",
    method:"POST",
    data:{country_id:country_id},
    success:function(data)
    {
     $('#state').html(data);
     
    }
   });
  }
  else
  {
   $('#state').html('<option value="">Choose State...</option>');
  
  }
 }); 
});

</script>


<script>
$(document).ready(function(){
 
 $('#state').change(function(){
  var state_id = $('#state').val();
  if(state_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>Create_item/fetch_city",
    method:"POST",
    data:{state_id:state_id},
    success:function(data)
    {
     $('#city').html(data);
     
    }
   });
  }
  else
  {
   $('#city').html('<option value="">Choose City...</option>');
  
  }
 }); 
});

</script>


</body>

<!-- Mirrored from www.g-axon.com/integral-3.0/classic/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2017 11:49:15 GMT -->
</html>
