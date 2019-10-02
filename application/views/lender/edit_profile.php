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

<style>
         label.error
      {
        color:red;
        font-weight:bold;
        
      }
      
      input.error
      {
        border:1px solid red;
        color:red;
      }

      select.error
      {
        border:1px solid red;
        color:red;
      }
      
      input.valid
      {
        border:1px solid #2A3F54;
        box-shadow:1px 1px 5px #2A3F54;
        color:green;
        font-weight:bold;
      }
      select.valid
      {
        border:1px solid #2A3F54;
        box-shadow:1px 1px 5px #2A3F54;
        color:green;
        font-weight:bold;
      }
      .edit-profile-photo {
    background: #6059EE;
}
.edit-profile-photo {
    position: relative;
    box-shadow: 0 0 10px 1px rgba(71, 85, 95, .08);
    padding: 2px;
}
.img-fluid {
    max-width: 100%;
    height: auto;
}
img {
    vertical-align: middle;
    border-style: none;
}

    </style>
</head>
<body>
<?php echo $header; ?>
		<!-- Main content -->
		<div class="main-content">
		
			
		  <div class="dashboard-content">
                        
        <form id="infor" method="post" action="<?= base_url('Profile-Update'); ?>" enctype="multipart/form-data">
          <div class="dashboard-list">
            <h3 class="heading">Profile Details</h3>
            <div class="dashboard-message contact-2 bdr clearfix">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <!-- Edit profile photo -->
                        <div class="edit-profile-photo">
                            <?php if($user_details->picture==''){ ?>
                                <img src="<?= base_url('assets/img/user_pic-225x225.png'); ?>" alt="profile-photo" class="img-fluid" id="hide_profile">
                            <?php } else { ?>
                            <img src="<?php echo $user_details->picture; ?>" alt="profile-photo" class="img-fluid" id="hide_profile">
                            <?php } ?>
                            <div class="change-photo-btn">
                                <div class="photoUpload">
                                    <span><i class="fa fa-upload"></i></span>
                                    <input type="file" class="upload" name="picture" id="profile_picture">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group name">
                                        <label>Your Name<span><i class="fa fa-lock ml-1 text-danger"  title="Private"></i></span></label>
                                        <input type="text" value="<?php echo $user_details->first_name ?>" class="form-control" name="first_name">

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group email">
                                        <label>Your Surname<span><i class="fa fa-lock ml-1 text-danger"  title="Private"></i></span></label>
                                        <input type="text" value="<?php echo $user_details->last_name ?>" class="form-control" name="last_name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group number">
                                        <label>Email<span><i class="fa fa-lock ml-1 text-danger"  title="Private"></i></span></label>
                                        <input type="email" value="<?php echo $user_details->email; ?>" readonly="readonly" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group number">
                                        <label>Birth Day<span><i class="fa fa-lock ml-1 text-danger"  title="Private"></i></span></label>
                                        <input class="form-control" value="<?php echo $user_details->bob; ?>" id="date" name="bob" placeholder="DD/MM/YYYY" type="text" />
                                    </div>
                                </div>
                               
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group number">
                                        <label>Mobile<span><i class="fa fa-lock ml-1 text-danger"  title="Private"></i></span></label>
                                        <input type="number" value="<?php echo $user_details->mobile_no; ?>" class="form-control" name="mobile_no">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group subject">
                                        <label>Country<span><i class="fa fa-lock ml-1 text-danger"  title="Private"></i></span></label>
                                        <select class="form-control" name="country_id">
                                          <option value="">Select Country</option>
                                          <?php foreach ($get_country as $country): ?>
                                            <?php if($user_details->country_id==$country->id){ ?>
                                              <option selected value="<?php echo $country->id?>"><?php echo $country->name;?></option>
                                            <?php } else { ?>
                                            <option value="<?php echo $country->id?>"><?php echo $country->name;?></option>
                                            <?php } ?>
                                          <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group number">
                                        <label>City<span><i class="fa fa-lock ml-1 text-danger"  title="Private"></i></span></label>
                                        <input type="text" value="<?php echo $user_details->city ?>" class="form-control" name="city">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group number">
                                        <label>Language<span><i class="fa fa-lock ml-1 text-danger"  title="Private"></i></span></label>
                                         <div class="text-secondary mb-2">
                                              <?php foreach ($fetch_user_lang as $language_name) {   ?>
                                                  <span style="color:black;"><?php echo $language_name->lan_name; ?>, </span>
                                                <?php } ?>
                                            </div>
                                            <div class="add-btn d-inline" data-toggle="modal" data-target="#exampleModalLong1"><i class="fa fa-plus mr-1 text-secondary"></i><a>Add More</a></div>
                                            
                                            </div>
                                    </div>
                                

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group number">
                                        <label>Where you live</label>
                                         <input type="text" class="form-control" placeholder="e.g. Paris,France/Brooklyn,NY">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group number">
                                        <label>Gender<span><i class="fa fa-lock ml-1 text-danger"  title="Private"></i></span></label><br>
                                        <?php if($user_details->gender=='Male'){ ?>
                                          <label class="radio-inline"><input checked="" type="radio" name="gender" value="Male">Male</label>
                                          <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                                          <label class="radio-inline"><input type="radio" name="gender" value="Other">Other</label>

                                        <?php }else if($user_details->gender=='Female'){ ?>
                                          <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
                                          <label class="radio-inline"><input checked="" type="radio" name="gender" value="Female">Female</label>
                                          <label class="radio-inline"><input type="radio" name="gender" value="Other">Other</label>

                                        <?php } else if($user_details->gender=='Other'){ ?>
                                          <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
                                          <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                                          <label class="radio-inline"><input checked="" type="radio" name="gender" value="Other">Other</label>

                                        <?php } else { ?>
                                          <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
                                          <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
                                          <label class="radio-inline"><input type="radio" name="gender" value="Other">Other</label>

                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group message">
                                        <label>Describe your self</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" value="<?php echo $user_details->bio; ?>" rows="4" placeholder="Tell your fellow users a bit about yourself" name="bio"></textarea>
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
                <div class="dashboard-list">
                    <h3 class="heading">Optional</h3>
                    <div class="dashboard-message contact-2">
                      <div class="row">
                          <div class="col-lg-12">
                              <div class="form-group name">
                                  <label>School</label>
                                  <input type="text" class="form-control" name="school" value="<?php echo $user_details->school; ?>">
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-group email">
                                  <label>Work</label>
                                  <input type="text" class="form-control" value="<?php echo $user_details->work; ?>" placeholder="company name or job title" name="work">
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="form-group subject">
                                  <label>Time Zone</label>
                                  <select class="form-control my-1 mr-sm-2" name="timezone">
                                      <option value=''>Your home time zone.</option>
                                        <?php foreach ($get_timezones as $timezone): ?>
                                          <?php if($user_details->timezone==$timezone->id){ ?>
                                            <option selected value="<?php echo $timezone->id;?>"><?php echo $timezone->label;?></option>
                                          <?php } else { ?>
                                          <option value="<?php echo $timezone->id;?>"><?php echo $timezone->label;?></option>
                                          <?php } ?>
                                          
                                        <?php endforeach ?>
                                    </select>
                              </div>
                          </div>
                           <div class="col-lg-12">
                              <div class="form-group subject">
                                  <label>GST Number</label>
                                  <input type="number" class="form-control" name="gst_no" value="<?php echo $user_details->gst_no; ?>">
                              </div>
                          </div>
                          <div class="col-lg-12">
                              <div class="send-btn">
                                  <button type="submit" class="btn btn-md button-theme" style="width:100%;">Update Profile Information</button>
                              </div>
                          </div>
                      </div>
                
                    </div>
                </div>
            </div>   
          </div>

          <!-- Modal -->
            <div class="modal fade" id="exampleModalLong1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header dash">
                    Spoken Languages
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body text-secondary">
                      <small>What languages can you speak fluently? We have many international travelers who appreciate hosts who can speak their language.</small> 
                      <?php
                        $lang_tags=explode(',', $user_details->language_tag);
                       ?>

                      <div class="row mt-4">
                        <?php $i=0; foreach ($get_language as $lang){ ?>
                          <div class="col-md-6 col-sm-6">
                            <div class="custom-control custom-checkbox my-1 mr-sm-2">
                              <?php 
                              if (in_array($lang->lan_id, $lang_tags)) { 
                              ?>

                              <input checked type="checkbox" class="custom-control-input" id="customControlInline<?php echo $i; ?>" name="language[]" value="<?php echo $lang->lan_id; ?>">
                              <?php }else{ ?>
                                <input type="checkbox" class="custom-control-input" id="customControlInline<?php echo $i; ?>" name="language[]" value="<?php echo $lang->lan_id; ?>">
                              <?php } ?>
                              <label class="custom-control-label" for="customControlInline<?php echo $i; ?>"><?php echo $lang->lan_name; ?></label>
                            </div>
                          </div>
                          <?php $i++; ?>
                        <?php } ?>
                        
                      </div>

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger px-3" data-dismiss="modal">Save</button>
                     </div>
                </div>
              </div>
            </div>
        </form>
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
<script src="<?= base_url('assets/js/validation/jqv.js'); ?>"></script>

  <script type="text/javascript">
      $(document).ready(function() {
          $('#infor').validate({        
              rules:
              {
                first_name:
                {
                  required:true
                },
                last_name:
                {
                  required:true
                },
                gender:
                {
                  required:true
                },
                bob:
                {
                  required:true
                },
                country_id:{
                  required:true
                },
                mobile_no:
                {
                  required:true,
                  phoneUS: true
                },
                city:
                {
                  required:true
                }
              },        
        
            messages:
            {
              first_name:
              {
                required:"First Name",
              },
              last_name:
              {
                required:"Last Name",
              },
              gender:
              {
                required:"Select Gender",
              },
             bob:
              {
                required:"Select Birthday Date",
              },
              country_id:{
                required:"Select Country",
              },
              mobile_no:
              {
                required:"Enter Mobile Number",
              },
              city:
              {
                required:"Enter City Name",
              },
           },
        
          }); 
          $.validator.addMethod('phoneUS', function(phone_number, element) {
          phone_number = phone_number.replace(/\s+/g, ''); 
          return this.optional(element) || phone_number.length > 9 &&
          phone_number.match(/^(?:(?:\+|0{0,2})91(\s*[\-]\s*)?|[0]?)?[6789]\d{9}$/);
          }, 'Please specify a valid phone number');


        });

    </script> 

    <script type="text/javascript">
      var timeout = 3000; // in miliseconds (3*1000)

      $('.alert').delay(timeout).fadeOut(300);
    </script>
</body>

</html>
