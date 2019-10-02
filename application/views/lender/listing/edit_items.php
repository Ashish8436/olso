<?php error_reporting(0); ?>
 <?php
    $ho = explode(',', $fetch_create_items->no_hr);
    $hr_disc_price = explode(',', $fetch_create_items->hr_disc);
?>
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

<style>

        <?php if($ho[0]!=''){?> #hr_remove_bt1{display:block;}<?php } else{ ?>#hr_remove_bt1{display:none;}    
        <?php } ?>

        <?php if($ho[1]!=''){ ?> #hr2{ display: block;} #hr_remove_bt2{ display: block; } <?php }else{ ?> #hr2{display: block;} #hr_remove_bt2{ display: none; } <?php } ?>

        <?php if($ho[2]!=''){ ?> #hr3{display: block;}  #hr_remove_bt3{ display: block;} <?php }else{ ?> #hr3{display: block;}  #hr_remove_bt3{ display: none; } <?php } ?> 

        <?php if($ho[3]!=''){ ?> #hr4{ display: block;} #hr_remove_bt4{ display: block; } <?php }else{ ?> #hr4{
                display: block; } #hr_remove_bt4{ display: none; } <?php } ?> 

        <?php if($ho[4]!=''){ ?> #hr5{ display: block; } #hr_remove_bt5{ display: block; } <?php }else{ ?>
            #hr5{
                display: block;
            }
            #hr_remove_bt5{
                display: none;
            }
            
        <?php } ?> 

        <?php if($ho[5]!=''){ ?>
            #hr6{
                display: block;
            }
            #hr_remove_bt6{
                display: block;
            }
            
        <?php }else{ ?>
            #hr6{
                display: block;
            }
            #hr_remove_bt6{
                display: none;
            }
            
        <?php } ?> 

        <?php if($ho[6]!=''){ ?>
            #hr7{
                display: block;
            }
            #hr_remove_bt7{
                display: block;
            }
            
        <?php }else{ ?>
            #hr7{
                display: block;
            }
            #hr_remove_bt7{
                display: none;
            }
            
        <?php } ?> 

        <?php if($ho[7]!=''){ ?>
            #hr8{
                display: block;
            }
            #hr_remove_bt8{
                display: block;
            }
            
        <?php }else{ ?>
            #hr8{
                display: block;
            }
            #hr_remove_bt8{
                display: none;
            }
           
        <?php } ?> 

        <?php if($fetch_create_items->day_price=='' || $fetch_create_items->day_price=='0'){ ?>
            .day_price_show{
                display:none;
            }
        <?php }else{ ?>
            .day_price_show{
                display:block;
            }
        <?php } ?>

         <?php if($fetch_create_items->hr_price=='' || $fetch_create_items->hr_price=='0'){ ?>
            .hr_price_show{
                display:none;
            }
        <?php }else{ ?>
            .hr_price_show{
                display:block;
            }
        <?php } ?>

         <?php if($fetch_create_items->monthly_price=='' || $fetch_create_items->monthly_price=='0'){ ?>
            .month_price_show{
                display:none;
            }
        <?php }else{ ?>
            .month_price_show{
                display:block;
            }
        <?php } ?>
           
       
      .submit-address form label.error {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 13px;
            color: red;
        }
      input.error
      {
        color:red;
        border:1px solid red;
        
      }
      
      .valid
      {
        border:1px border #2A3F54;
        box-shadow:1px 1px 5px #2A3F54;
        color:green;
        font-weight:bold;
      }
    </style>
    
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
							<form id="rootwizard-2" class="form-wizard validate-form-wizard validate" method="post" action="<?= base_url('update-item'); ?>" enctype="multipart/form-data">
								<input type="hidden" name="random_itemno" value="<?php echo $random_itemno; ?>">
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
								<div class="tab-content">
									<div class="tab-pane  active" id="tab2-1">
										<div class="row"> 
											<div class="col-md-12"> 
												<div class="form-group"> 
													<label for="username" class="control-label">Name your item</label>
													<input type="text" name="item_name" class="form-control" placeholder="Item Name" id="item_name" value="<?php echo $fetch_create_items->item_name ?>"  minlength="5" required>
												</div>
											</div> 
											<div class="col-md-12"> 
												<div class="form-group"> 
													<label for="password" class="control-label">Add some photos</label> <br>
													<div class="col-lg-5 float-left " style="padding:6px;border:1px solid #6c757d; border-radius: 10px; margin-right: 10px;">
		                                                <input type="file" name="item_image1" id="item_image1">
		                                                <input type="hidden" name="old_item_image1" value="<?php echo $fetch_create_items->item_image1 ?>">
		                                            </div>
		                                            
		                                            <div class="col-lg-5 float-left" style="padding:6px;border:1px solid #6c757d; border-radius: 10px;margin-right: 10px;">
		                                                <input type="file" name="item_image2" id="item_image2">
		                                                <input type="hidden" name="old_item_image2" value="<?php echo $fetch_create_items->item_image2 ?>">
		                                            </div>
		                                            </p>
		                                            <div class="col-lg-5 float-left" style="padding:6px;border:1px solid #6c757d; border-radius: 10px;margin-right: 10px; margin-top: 10px;">
		                                                <input type="file" name="item_image3" id="item_image3">
		                                                <input type="hidden" name="old_item_image3" value="<?php echo $fetch_create_items->item_image3 ?>">
		                                            </div>
		                                            
		                                            <div class="col-lg-5 float-left" style="padding:6px;border:1px solid #6c757d; border-radius: 10px;margin-right: 10px;margin-top: 10px;">
		                                                <input type="file" name="item_image4" id="item_image4">
		                                                <input type="hidden" name="old_item_image4" value="<?php echo $fetch_create_items->item_image4 ?>">
		                                            </div>
		                                            
		                                            <div class="col-lg-5 float-left" style="padding:6px;border:1px solid #6c757d; border-radius: 10px;margin-right: 10px;margin-top: 10px;">
		                                                <input type="file" name="item_image5" id="item_image5">
		                                                <input type="hidden" name="old_item_image5" value="<?php echo $fetch_create_items->item_image5 ?>">
		                                            </div>
		                                            
		                                             <div class="col-md-12">
		                                                <div class="form-group">
		                                                   <p>
		                                                        <div class="col-md-12 float-left" style="margin-top:10px; margin-bottom:30px;" >
		                                                            <?php if($fetch_create_items->item_image1!=''){ ?>
	                                                                <img id="photo_image1" src="<?= base_url($fetch_create_items->item_image1) ?>" alt="your image" width="110px" height="100px" style="border:1px solid red;"/>
		                                                            <?php } else{ ?>
		                                                            <img id="photo_image1" src="http://placehold.it/100x100" alt="your image" />
		                                                            <?php } ?>
		                                                            <?php if($fetch_create_items->item_image2!=''){ ?>
		                                                                <img id="photo_image2" src="<?= base_url($fetch_create_items->item_image2) ?>" alt="your image" width="110px" height="100px" style="border:1px solid red;"/>
		                                                            <?php } else{ ?>
		                                                            <img id="photo_image2" src="http://placehold.it/100x100" alt="your image" />
		                                                            <?php } ?>
		                                                            <?php if($fetch_create_items->item_image3!=''){ ?>
		                                                                <img id="photo_image3" src="<?= base_url($fetch_create_items->item_image3) ?>" alt="your image" width="110px" height="100px" style="border:1px solid red;"/>
		                                                            <?php } else{ ?>
		                                                            <img id="photo_image3" src="http://placehold.it/100x100" alt="your image" />
		                                                            <?php } ?>
		                                                            <?php if($fetch_create_items->item_image4!=''){ ?>
		                                                                <img id="photo_image4" src="<?= base_url($fetch_create_items->item_image4) ?>" alt="your image" width="110px" height="100px" style="border:1px solid red;"/>
		                                                            <?php } else{ ?>
		                                                            <img id="photo_image4" src="http://placehold.it/100x100" alt="your image" />
		                                                            <?php } ?>
		                                                            <?php if($fetch_create_items->item_image5!=''){ ?>
		                                                                <img id="photo_image5" src="<?= base_url($fetch_create_items->item_image5) ?>" alt="your image" width="110px" height="100px" style="border:1px solid red;"/>
		                                                            <?php } else{ ?>
		                                                            <img id="photo_image5" src="http://placehold.it/100x100" alt="your image" />
		                                                            <?php } ?>
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
													<select class="form-control" name="cat_id" id="category" required>
		                                                <option value="">Choose Category...</option>
		                                                 <?php foreach ($fetch_category as $category) { ?>
		                                                    <?php if($fetch_create_items->cat_id==$category->cat_id){ ?>
		                                                        <option selected value="<?php echo $category->cat_id; ?>"><?php echo $category->cat_name; ?></option>
		                                                    <?php } else{ ?>
		                                                        <option value="<?php echo $category->cat_id; ?>"><?php echo $category->cat_name; ?></option>
		                                                    <?php } ?>
		                                                
		                                                <?php } ?>
		                                            </select>
												</div>
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="emailfield" class="control-label">Category2</label> 
													<select class="form-control" name="subcat_id" id="subcat" required >
		                                                <?php foreach ($fetch_subcategory as $sub_category) { ?>
		                                                    <?php if($fetch_create_items->subcat_id==$sub_category->subcat_id){ ?>
		                                                        <option selected value="<?php echo $sub_category->subcat_id; ?>"><?php echo $sub_category->subcat_name; ?></option>
		                                                    <?php } else{ ?>
		                                                        <option value="<?php echo $sub_category->subcat_id; ?>"><?php echo $sub_category->subcat_name; ?></option>
		                                                    <?php } ?>
		                                                
		                                                <?php } ?>    
		                                            </select>
												</div> 
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="emailfield" class="control-label">Category3</label> 
													<select class="form-control" name="subtype_id" id="subtype" required>
		                                                <?php foreach ($fetch_subcategory_type as $subcat_type) { ?>
		                                                    <?php if($fetch_create_items->subtype_id==$subcat_type->subtype_id){ ?>
		                                                        <option selected value="<?php echo $subcat_type->subtype_id; ?>"><?php echo $subcat_type->subtype_name; ?></option>
		                                                    <?php } else{ ?>
		                                                        <option value="<?php echo $subcat_type->subtype_id; ?>"><?php echo $subcat_type->subtype_name; ?></option>
		                                                    <?php } ?>
		                                                
		                                                <?php } ?>    
		                                            </select>
												</div> 
											</div> 
										</div>
										<div class="row">
											<div class="col-md-6"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Item Quantity</label>
													<input type="number" name="item_qty" class="form-control" value="<?php echo $fetch_create_items->item_qty ?>" placeholder="Total Item Quantity">
												</div>
											</div>
										
											<div class="col-md-6"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Add Tags</label>
													<section id="examples">
      													<div class="example example_markup">
												          	<div class="bs-example">
													            <input type="text" name="item_tags" value="<?php echo $fetch_create_items->item_tags; ?>" data-role="tagsinput"/>
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
													<textarea class="form-control" name="item_description" placeholder="Add a details description here" id="item_description"><?php echo $fetch_create_items->item_description; ?></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Your Item Specification</label><br>
													<label for="about" class="">Add other details that can help borowers understand about item in detail, accuracy, working,handling etc</label>
													<textarea class="form-control" name="item_specification" placeholder="Add a Specifications"><?php echo $fetch_create_items->item_specification; ?></textarea>
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
													<input type="number" class="form-control" name="item_current_price" placeholder="Current Price" value="<?php echo $fetch_create_items->item_current_price ?>" >
												</div>
											</div> 
											<div class="col-md-12"> 
												<div class="form-group"> 
													<label for="cardnumber" class="control-label">On what plans Item can be rented?</label> 
													<div class="">
			                                            <div class="checkbox checkbox-replace checkbox-primary">
															<?php if($fetch_create_items->hr_price!=''){ ?>
																<input checked type="checkbox" id="hourly_check" name="item_plans[]" value="1" onclick="hourlyFunction()">
																<label for="hour">Hourly Basis</label>
															<?php }else{ ?>
																<input type="checkbox" id="hourly_check" name="item_plans[]" value="1" onclick="hourlyFunction()">
																<label for="hour">Hourly Basis</label>
															<?php } ?>
														</div>
														<div class="checkbox checkbox-replace checkbox-primary">
															<?php if($fetch_create_items->day_price!=''){ ?>
			                                                    <input checked type="checkbox" id="day_check" name="item_plans[]" value="3" onclick="dayFunction()">
																<label for="dayly">Daily Basis(24h)</label>
			                                                <?php }else{ ?>
			                                                    <input type="checkbox" id="day_check" name="item_plans[]" value="3" onclick="dayFunction()">
																<label for="dayly">Daily Basis(24h)</label>
			                                                 <?php } ?>

														</div>
														<div class="checkbox checkbox-replace checkbox-primary">
															<?php if($fetch_create_items->monthly_price!=''){ ?>
			                                                    <input checked type="checkbox" id="monthly_check" name="item_plans[]" value="2" onclick="monthlyFunction()">
																<label for="monthly">Monthly Basis(30days)</label>
			                                                <?php }else{ ?>
			                                                    <input type="checkbox" id="monthly_check" name="item_plans[]" value="2" onclick="monthlyFunction()">
																<label for="monthly">Monthly Basis(30days)</label>
			                                                <?php } ?>
															
														</div>
			                              
			                                        </div>
												</div> 
											</div> 
										</div>
									</div>
									<div class="tab-pane" id="tab2-5">
										<div class="row hr_price_show" id="hourly" > 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Per Hourly Price </label>
													<input type="text" class="form-control" name="hr_price" value="<?php echo $fetch_create_items->hr_price ?>" >
												</div>
											</div> 
											<div class="col-md-4 float-left">
                                                <div class="form-group">
                                                    <label>Add Special Discount Per Hourly</label>
                                                    <a class="btn btn-secondary" style="font-weight:bold; color:white;width:96%;" data-toggle="modal" data-target="#hourmodel"><i class="fa fa-plus" ></i> Add Discount</a>
                                                </div>
                                            </div>
											
										</div>
										<div class="row month_price_show" id="monthly" >
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Per Monthly Price </label>
													<input type="text" class="form-control" name="monthly_price" value="<?php echo $fetch_create_items->monthly_price; ?>" >
												</div>
											</div> 
											<div class="col-md-4 float-left">
                                                <div class="form-group">
                                                    <label>Add Special Discount Per Monthly</label>
                                                    <a class="btn btn-secondary" style="font-weight:bold; color:white;width:96%;" data-toggle="modal" data-target="#monthlymodel"><i class="fa fa-plus"></i> Add Discount</a>
                                                </div>
                                            </div>
											
										</div>
										<div class="row day_price_show" id="day" >
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Per Day Price</label>
													<input type="text" class="form-control" name="day_price" value="<?php echo $fetch_create_items->day_price ?>" >
												</div>
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Weekly Discount</label>
													<input type="text" class="form-control" name="week_disc" value="<?php echo $fetch_create_items->week_disc ?>" >
												</div>
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Minimum Day Booking</label>
													<input type="text" class="form-control" name="min_day_book" value="<?php echo $fetch_create_items->min_day_book ?>" >
												</div>
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="cardholdername" class="control-label">Maximum Day Booking</label>
													<input type="text" class="form-control" name="max_day_book" value="<?php echo $fetch_create_items->max_day_book ?>">
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
	                                                        <?php if($fetch_create_items->country_id==$country->id){ ?>
	                                                        <option selected value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
	                                                        <?php }else{?>
	                                                            <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>

	                                                        <?php } ?>
	                                                    
	                                                    <?php } ?>
	                                                </select>
												</div>
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="emailfield" class="control-label">State</label> 
													<select class="form-control" name="state_id" id="state">
	                                                    <?php foreach ($fetch_item_state as $item_state) { ?>
	                                                    <?php if($fetch_create_items->state_id==$item_state->state_id){ ?>
	                                                        <option selected value="<?php echo $item_state->state_id; ?>"><?php echo $item_state->state_name; ?></option>
	                                                    <?php } else{ ?>
	                                                        <option value="<?php echo $item_state->state_id; ?>"><?php echo $item_state->state_name; ?></option>
	                                                    <?php } ?>
	                                                
	                                                <?php } ?>                           
	                                                </select>
												</div> 
											</div> 
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="emailfield" class="control-label">City</label> 
													<select class="form-control" name="city_id" id="city">
	                                                     <?php foreach ($fetch_item_city as $item_city) { ?>
	                                                    <?php if($fetch_create_items->city_id==$item_city->city_id){ ?>
	                                                        <option selected value="<?php echo $item_city->city_id; ?>"><?php echo $item_city->city_name; ?></option>
	                                                    <?php } else{ ?>
	                                                        <option value="<?php echo $item_city->city_id; ?>"><?php echo $item_city->city_name; ?></option>
	                                                    <?php } ?>
	                                                
	                                                <?php } ?>                            
	                                                </select>
												</div> 
											</div> 
										</div>
										<div class="row">
											<div class="col-md-4"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Pin Code</label>
													<input type="text" class="form-control" name="pincode" placeholder="Enter Postcode" value="<?php echo $fetch_create_items->pincode ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Address 1</label>
													<textarea class="form-control" name="address1" placeholder="Enter Full Address"><?php echo $fetch_create_items->address1 ?></textarea>
												</div>
											</div>
										
											<div class="col-md-6"> 
												<div class="form-group"> 
													<label for="about" class="control-label">Address 2</label><br>
													<textarea class="form-control" name="address2" placeholder="Enter Full Address"><?php echo $fetch_create_items->address2 ?></textarea>
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
													<?php if($fetch_create_items->gov_issued_ids!=''){ ?>
	                                                <input checked type="checkbox" id="gov_check" onclick="govIssued()">
	                                                <?php }else{ ?>
	                                                <input type="checkbox" id="gov_check" onclick="govIssued()">
	                                                <?php } ?>
													
													<label for="gov_id_ss">Government-issued ID submitted to OLSO(max selection 2)</label>
												</div>
												<?php if($fetch_create_items->gov_issued_ids!=''){ ?>
                                                <div id="gov_ids" style="display:block;margin-left:30px;">
                                                <?php }else{ ?>
                                                <div id="gov_ids" style="display:none;margin-left:30px;">
                                                <?php } ?>
                                                <?php  
                                                    $gov_ids = explode(',',$fetch_create_items->gov_issued_ids);
                                                ?>
												
                                                    <div class="checkbox checkbox-replace checkbox-info">
                                                        <?php if($gov_ids[0]=='Driving Licence' || $gov_ids[1]=='Driving Licence'){ ?>
                                                        	<input checked id="check5" type="checkbox" name="gov_issued_ids[]" value="Driving Licence">
                                                        <?php } else{ ?>
                                                            <input id="check5" type="checkbox" name="gov_issued_ids[]" value="Driving Licence">
                                                        <?php } ?>

                                                        <label for="check5">
                                                            Driving Licence
                                                        </label>
                                                    </div>
                                                    <div class="checkbox checkbox-replace checkbox-info">
                                                        <?php if($gov_ids[0]=='Aadhar Card' || $gov_ids[1]=='Aadhar Card'){ ?>
                                                        	<input checked id="check6" type="checkbox" name="gov_issued_ids[]" value="Aadhar Card">
                                                        <?php } else{ ?>
                                                            <input id="check6" type="checkbox" name="gov_issued_ids[]" value="Aadhar Card">
                                                        <?php } ?>
                                                        
                                                        <label for="check6">
                                                            Aadhar Card
                                                        </label>
                                                    </div>
                                                    <div class="checkbox checkbox-replace checkbox-info">
                                                        <?php if($gov_ids[0]=='Aadhar Card' || $gov_ids[1]=='Aadhar Card'){ ?>
                                                        	<input checked id="check7" type="checkbox" name="gov_issued_ids[]" value="Voter ID">
                                                        <?php } else{ ?>
                                                            <input id="check7" type="checkbox" name="gov_issued_ids[]" value="Voter ID">
                                                        <?php } ?>
                                                        
                                                        <label for="check7">
                                                            Voter ID
                                                        </label>
                                                    </div>
                                                    <div class="checkbox checkbox-replace checkbox-info">
                                                        <?php if($gov_ids[0]=='Aadhar Card' || $gov_ids[1]=='Aadhar Card'){ ?>
                                                        	<input checked id="check8" type="checkbox" name="gov_issued_ids[]" value="Passport">
                                                        <?php } else{ ?>
                                                            <input id="check8" type="checkbox" name="gov_issued_ids[]" value="Passport">
                                                        <?php } ?>
                                                        
                                                        <label for="check8">
                                                            Passport
                                                        </label>
                                                    </div>
                                                   <div class="checkbox checkbox-replace checkbox-info">
                                                        <?php if($gov_ids[0]=='Aadhar Card' || $gov_ids[1]=='Aadhar Card'){ ?>
                                                        	<input checked id="check9" type="checkbox" name="gov_issued_ids[]" value="Rent agreement / Utility Bill Photo">
                                                        <?php } else{ ?>
                                                            <input id="check9" type="checkbox" name="gov_issued_ids[]" value="Rent agreement / Utility Bill Photo">
                                                        <?php } ?>
                                                        
                                                        <label for="check9">
                                                            Rent agreement / Utility Bill Photo
                                                        </label>
                                                    </div>
                                                    <div class="checkbox checkbox-replace checkbox-info">
                                                        <?php if($gov_ids[0]=='Aadhar Card' || $gov_ids[1]=='Aadhar Card'){ ?>
                                                        	<input checked id="check10" type="checkbox" name="gov_issued_ids[]" value="Student ID / Employee ID">
                                                        <?php } else{ ?>
                                                            <input id="check10" type="checkbox" name="gov_issued_ids[]" value="Student ID / Employee ID">
                                                        <?php } ?>

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
													<?php if($fetch_create_items->recom_byother_lender=='1'){ ?>
	                                                	<input checked type="checkbox" name="recom_byother_lender" value="1">">
	                                                <?php } else{ ?>
	                                                    <input type="checkbox" name="recom_byother_lender" value="1">
	                                                <?php } ?>

													<label for="gov_id_ss">Recommended by other Lenders and have no negative reviews</label>
												</div>
											</div>
										</div>
									</div>

									<div class="tab-pane" id="tab2-8">
										<div class="row"> 
											<div class="col-md-12">
												<div class="col-md-12">
		                                            <input type='button' value='Add Rules' id='addButton' class="btn btn-secondary" style="font-weight: bold;margin-bottom: 10px;">
		                                        </div>
												<div id='TextBoxesGroup'>
		                                            <?php 
		                                                $item_rules = explode('$', $fetch_create_items->rules_of_renting);
		                                                $total_rules=count($item_rules);

		                                                for($i=0;$i<$total_rules;$i++){
		                                                ?>
		                                            <div id="TextBoxDiv1">
		                                                <label>Add Rules: </label> <input type='textbox' name="rules_of_renting[]" class="form-control" value="<?php echo $item_rules[$i] ?>" id='textbox1' style="border-radius: 2px;border: 1px solid #e8e7e7;color: #6c6c6c;font-size: 13px;height: 45px;">
		                                                
		                                            </div>
		                                            <?php } ?>
		                                            
		                                        </div>
		                                        
											</div>
										</div>
									</div>

									<div class="tab-pane" id="tab2-9">
										<?php if($fetch_create_items->item_offer=='1'){ ?> 
										<div class="row"> 
											<div class="col-md-12">
												<div class="radio radio-replace radio-primary">
													<input checked type="radio" id="offer20" name="item_offer" value="1">
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
										<?php }else if($fetch_create_items->item_offer=='0'){ ?>
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
													<input checked type="radio" id="offer21" name="item_offer" value="0">
													<label for="offer21" style="font-weight: bold;">Don’t add a special offer</label>
												</div>
												<label class="col-md-6" style="margin-left: 14px;">
                                                    Once you publish your listing, you won’t be able to add this offer.
                                                </label>
											</div>
										</div>
										<?php }else{ ?>
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
										<?php } ?>
									</div>


									<ul class="pager wizard"> 
										<li class="previous"><a href="javascript:void(0)"><i class="icon-left-open"></i>Previous</a></li> 
										<li class="next"><a href="javascript:void(0)">Next<i class="icon-right-open"></i></a> </li>

										<li id="show_submit_btn"><input type="submit" name="submit" value="Submit" class="btn btn-success"></li>

									</ul>
								</div>

								<!-- Hourly Modal -->
                                  <div class="modal fade" id="hourmodel" role="dialog" style="margin-top: 10%;">
                                    <div class="modal-dialog" >
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content" style="width:140%; ">
                                        <div class="modal-header">
                                            Hourly Discount Part
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          
                                        </div>
                                       
                                        <div class="modal-body">
                                            <div style="margin-bottom: 20px;" id="hr_remove1">
                                              <div class="col-md-4 float-left">
                                              <input type="text" name="hr_disc[]" value="<?php echo $hr_disc_price[0]; ?>" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-4 float-left">
                                                <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                    <?php foreach ($fetch_hours as $hours) { ?>
                                                        <?php if($ho[0]==$hours->hours_id){ ?>
                                                        <option selected value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                        <?php }else{?>
                                                            <option value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    
                                                    
                                                </select>
                                                </div>
                                                <div class="col-md-2 float-left">
                                                    <a class="btn btn-secondary" id="hr_remove_bt1">remove</a>
                                                </div>
                                                
                                               
                                            </div>
                                             <br>
                                            <div style="margin-bottom: 10px;" id="hr2">
                                                <div class="col-md-4 float-left">
                                                  <input type="text" name="hr_disc[]" value="<?php echo $hr_disc_price[1]; ?>" class="form-control" placeholder="Enter Discount">
                                                </div>
                                                <div class="col-md-4 float-left">
                                                    <select class="form-control" name="no_hr[]">
                                                        <option value="">Select Hour...</option>
                                                            <?php foreach ($fetch_hours as $hours) { ?>
                                                                <?php if($ho[1]==$hours->hours_id){ ?>
                                                                <option selected value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                                <?php }else{?>
                                                                    <option value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                                <?php } ?>
                                                            <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 float-left">
                                                    <a class="btn btn-secondary" id="hr_remove_bt2">remove</a>
                                                    </div>
                                                
                                                
                                            </div>
                                            <br>
                                            <div style="margin-top: 10px;" id="hr3">
                                                <div class="col-md-4 float-left">
                                                  <input type="text" name="hr_disc[]" value="<?php echo $hr_disc_price[2]; ?>" class="form-control" placeholder="Enter Discount">
                                                  </div>
                                                  <div class="col-md-4 float-left" >
                                                    <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                        <option value="">Select Hour...</option>
                                                        <?php foreach ($fetch_hours as $hours) { ?>
                                                            <?php if($ho[2]==$hours->hours_id){ ?>
                                                            <option selected value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                            <?php }else{?>
                                                                <option value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    
                                                </select>
                                                    </div>
                                                    <div class="col-md-2 float-left">
                                                        <a class="btn btn-secondary" id="hr_remove_bt3">remove</a>
                                                    </div>
                                                    
                                            </div>
                                            <br>
                                            <div style="margin-top: 20px;" id="hr4">
                                                <div class="col-md-4 float-left">
                                                  <input type="text" name="hr_disc[]" value="<?php echo $hr_disc_price[3]; ?>" class="form-control" placeholder="Enter Discount">
                                                  </div>
                                                  <div class="col-md-4 float-left">
                                                    <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                        <option value="">Select Hour...</option>
                                                        <?php foreach ($fetch_hours as $hours) { ?>
                                                            <?php if($ho[3]==$hours->hours_id){ ?>
                                                            <option selected value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                            <?php }else{?>
                                                                <option value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    
                                                </select>
                                                    </div>
                                                    <div class="col-md-2 float-left">
                                                        <a class="btn btn-secondary" id="hr_remove_bt4">remove</a>
                                                        </div>
                                                
                                            </div>
                                            <br>
                                            <div style="margin-top: 20px;" id="hr5">
                                                <div class="col-md-4 float-left">
                                                  <input type="text" name="hr_disc[]" value="<?php echo $hr_disc_price[4]; ?>" class="form-control" placeholder="Enter Discount">
                                                  </div>
                                                  <div class="col-md-4 float-left">
                                                    <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                        <option value="">Select Hour...</option>
                                                        <?php foreach ($fetch_hours as $hours) { ?>
                                                            <?php if($ho[4]==$hours->hours_id){ ?>
                                                            <option selected value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                            <?php }else{?>
                                                                <option value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                            <?php } ?>
                                                        <?php } ?>
                                                    
                                                </select>
                                                    </div>
                                                    <div class="col-md-2 float-left">
                                                        <a class="btn btn-secondary" id="hr_remove_bt5">remove</a>
                                                        </div>
                                                
                                            </div>
                                            <br>
                                            <div style="margin-top: 20px;" id="hr6">
                                                <div class="col-md-4 float-left" >
                                                  <input type="text" name="hr_disc[]" value="<?php echo $hr_disc_price[5]; ?>" class="form-control" placeholder="Enter Discount">
                                                  </div>
                                                  <div class="col-md-4 float-left">
                                                    <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                        <option value="">Select Hour...</option>
                                                    <?php foreach ($fetch_hours as $hours) { ?>
                                                        <?php if($ho[5]==$hours->hours_id){ ?>
                                                        <option selected value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                        <?php }else{?>
                                                            <option value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    
                                                </select>
                                                    </div>
                                                    <div class="col-md-2 float-left">
                                                        <a class="btn btn-secondary" id="hr_remove_bt6">remove</a>
                                                        </div>
                                                
                                            </div>
                                            <br>
                                            <div style="margin-top: 20px;" id="hr7">
                                                <div class="col-md-4 float-left">
                                              <input type="text" name="hr_disc[]" value="<?php echo $hr_disc_price[6]; ?>" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-4 float-left">
                                                <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                        <option value="">Select Hour...</option>
                                                    <?php foreach ($fetch_hours as $hours) { ?>
                                                        <?php if($ho[6]==$hours->hours_id){ ?>
                                                        <option selected value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                        <?php }else{?>
                                                            <option value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    
                                                </select>
                                                </div>
                                                <div class="col-md-2 float-left">
                                                    <a class="btn btn-secondary" id="hr_remove_bt7">remove</a>
                                                    </div>
                                                
                                            </div>
                                            <br>
                                            <div style="margin-top: 20px;" id="hr8">
                                                <div class="col-md-4 float-left" >
                                              <input type="text" name="hr_disc[]" value="<?php echo $hr_disc_price[7]; ?>" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-4 float-left">
                                                <select class="form-control" name="no_hr[]">
                                                    <option value="">Select Hour...</option>
                                                        <option value="">Select Hour...</option>
                                                    <?php foreach ($fetch_hours as $hours) { ?>
                                                        <?php if($ho[7]==$hours->hours_id){ ?>
                                                        <option selected value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                        <?php }else{?>
                                                            <option value="<?php echo $hours->hours_id; ?>"><?php echo $hours->hours_name; ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    
                                                </select>
                                                </div>
                                                <div class="col-md-2 float-left">
                                                    <a class="btn btn-secondary" id="hr_remove_bt8">remove</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer" style="margin-top: 20px;">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>

                              <!-- Monthly Modal -->
                                  <div class="modal fade" id="monthlymodel"  role="dialog" style="margin-top: 10%;">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            Monthly Discount Part
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          
                                        </div>
                                        <?php 
                                            $mo = explode(',', $fetch_create_items->no_month);
                                            
                                            $total_mo = count($mo);
                                            $mo_dis_price = explode(',', $fetch_create_items->month_disc);
                                            
                                        ?>
                                        <div class="modal-body">
                                            <div style="margin-bottom: 20px;" id="mo_remove1">
                                              <div class="col-md-5 float-left">
                                              <input type="text" value="<?php echo $mo_dis_price[0]; ?>" name="month_disc[]" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-5 float-left" style="margin-left:-20px;">
                                                <select class="form-control" name="no_month[]">
                                                    <option value="">Select Month...</option>
                                                    
                                                    <?php foreach ($fetch_month as $month) { ?>
                                                        
                                                        <?php if($mo[0]==$month->month_id){ ?>
                                                        <option selected value="<?php echo $month->month_id; ?>"><?php echo $month->month_name; ?></option>
                                                        <?php }else{ ?>
                                                            <option value="<?php echo $month->month_id; ?>"><?php echo $month->month_name; ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                                </div>
                                                <?php if($mo[1]!=''){ ?>
                                                <div class="col-md-3 float-left mo_bt_re1" id="mo_r_bt1" style="margin-left: -20px;">
                                                    <a class="btn btn-secondary">Remove</a>
                                                </div>
                                                <?php }else{ ?>

                                                <?php } ?>
                                            </div>
                                            <br>
                                            <div style="margin-bottom: 20px;" id="mo_remove2">
                                              <div class="col-md-5 float-left">
                                              <input type="text" value="<?php echo $mo_dis_price[1]; ?>" name="month_disc[]" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-5 float-left" style="margin-left:-20px;">
                                                <select class="form-control" name="no_month[]">
                                                    <option value="">Select Month...</option>
                                                    <?php foreach ($fetch_month as $month) { ?>
                                                        
                                                        <?php if($mo[1]==$month->month_id){ ?>
                                                        <option selected value="<?php echo $month->month_id; ?>"><?php echo $month->month_name; ?></option>
                                                        <?php }else{ ?>
                                                            <option value="<?php echo $month->month_id; ?>"><?php echo $month->month_name; ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    
                                                </select>
                                                </div>
                                                <?php if($mo[1]!=''){ ?>
                                                <div class="col-md-3 float-left mo_bt_re2" id="mo_r_bt2" style="margin-left: -20px;">
                                                    <a class="btn btn-secondary">Remove</a>
                                                </div>
                                                <?php }else{ ?>

                                                <?php } ?> 
                                            </div>
                                            <br>
                                            <div style="margin-bottom: 20px;" id="mo_remove3">
                                              <div class="col-md-5 float-left">
                                              <input type="text" name="month_disc[]" value="<?php echo $mo_dis_price[2]; ?>" class="form-control" placeholder="Enter Discount">
                                              </div>
                                              <div class="col-md-5 float-left" style="margin-left:-20px;">
                                                <select class="form-control" name="no_month[]">
                                                    <option value="">Select Month...</option>
                                                    <?php foreach ($fetch_month as $month) { ?>
                                                        
                                                        <?php if($mo[2]==$month->month_id){ ?>
                                                        <option selected value="<?php echo $month->month_id; ?>"><?php echo $month->month_name; ?></option>
                                                        <?php }else{ ?>
                                                            <option value="<?php echo $month->month_id; ?>"><?php echo $month->month_name; ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                    
                                                </select>
                                                </div>
                                                <?php if($total_mo=='3'){ ?>
                                                <div class="col-md-3 float-left mo_bt_re3" id="mo_r_bt3" style="margin-left: -20px;">
                                                    <a class="btn btn-secondary">Remove</a>
                                                </div>
                                                <?php } ?>
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

<script>
$(document).ready(function(){
  $("#hr_remove_bt1").click(function(){
    $("#hr_remove1").remove();
  });
});

$(document).ready(function(){
  $("#hr_remove_bt2").click(function(){
    $("#hr2").remove();
  });
});

$(document).ready(function(){
  $("#hr_remove_bt3").click(function(){
    $("#hr3").remove();
  });
});

$(document).ready(function(){
  $("#hr_remove_bt4").click(function(){
    $("#hr4").remove();
  });
});
$(document).ready(function(){
  $("#hr_remove_bt5").click(function(){
    $("#hr5").remove();
  });
});
$(document).ready(function(){
  $("#hr_remove_bt6").click(function(){
    $("#hr6").remove();
  });
});
$(document).ready(function(){
  $("#hr_remove_bt7").click(function(){
    $("#hr7").remove();
  });
});
$(document).ready(function(){
  $("#hr_remove_bt8").click(function(){
    $("#hr8").remove();
  });
});
</script>

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
                
    newTextBoxDiv.after().html('<label>Add Rules : </label>' +
          '<input class="form-control" type="text" name="rules_of_renting[]" id="textbox' + counter + '" value=""  style="border-radius: 2px;border: 1px solid #e8e7e7;color: #6c6c6c;font-size: 13px;">');
            
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
