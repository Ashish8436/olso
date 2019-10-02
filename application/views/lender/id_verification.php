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
<link rel="stylesheet" type="text/css"  href="<?= base_url('assets/css/slick.css');?>">
<link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
<link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
<link rel="stylesheet" href="<?= base_url('assets/css/styless.css');?>" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<style>
      #results { padding:20px; border:1px solid; background:#ccc; }
      .custom-control-label2::before, .custom-file-label2, .custom-select {
    transition: background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.custom-file-label2 {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}
.custom-file-label2::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: calc(1.5em + .75rem);
    padding: .375rem .75rem;
    line-height: 1.5;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 .25rem .25rem 0;
}
.custom-file-input2 {
    position: relative;
    z-index: 2;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    margin: 0;
    opacity: 0;
}

    </style>
</head>
<body>
<?php echo $header; ?>
		<!-- Main content -->
		<div class="main-content">
		
			<h1 class="page-title">Dashboard</h1>
			<br>
			
			<div class="content-area5 dashboard-content">
                    
                     <div class="col-md-12 mt-3 mt-md-0">
                      <div class="card border">
                        
                        <div class="card-body">
                          <section class="multi_step_form mt-2">
                            <form method="post" action="<?= base_url('ID-Verification-Store'); ?>" enctype="multipart/form-data" id="msform">
                              <!-- Tittle -->
                              <div class="tittle">
                                <h2>
                                  ID
                                  <span class="font-weight-bolder">Verification</span>
                                </h2>
                                <p>
                                  In order to use this service, you have to complete this
                                  verification process
                                </p>
                              </div>
                              <!-- progressbar -->
                              <ul id="progressbar">
                                <li class="active">Choose document</li>
                                <li>Upload Documents</li>
                              </ul>
                              <!-- fieldsets -->
                              <fieldset>
                                <div class="card mt-4 shadow-sm mb-3 py-2">
                                  <div class="card-body d-md-flex justify-content-between align-items-center py-2">
                                    <div class="align-self-center">
                                      <span class="bg-primary p-2 rounded-circle"
                                        ><i class="fa fa-address-card text-light"></i
                                      ></span>
                                      <span class="content">Driving License</span>
                                    </div>
                                    <button class="uploads btn btn-success mt-md-auto mt-3" type="button"> upload
                                     </button>
                                  </div>
                                </div>
                                
                                <div class="card mt-4 shadow-sm mb-3 py-2">
                                  <div class="card-body d-md-flex justify-content-between align-items-center py-2">
                                    <div class="align-self-center">
                                      <span class="bg-primary p-2 rounded-circle"><i class="fa fa-address-card text-light"></i></span>
                                      <span class="content">Passport</span>
                                    </div>
                                    <button class="uploads btn btn-success mt-md-auto mt-3" type="button">
                                      upload
                                    </button>
                                  </div>
                                </div>
                                
                                <div class="card mt-4 shadow-sm mb-3 py-2">
                                  <div class="card-body d-md-flex justify-content-between align-items-center py-2" >
                                    <div class="align-self-center">
                                      <span class="bg-primary p-2 rounded-circle" ><i class="fa fa-address-card text-light"></i></span>
                                      <span class="content">Aadhar Card</span>
                                    </div>
                                    <button class="uploads btn btn-success mt-md-auto mt-3"
                                      type="button">
                                      upload
                                    </button>
                                  </div>
                                </div>
                              </fieldset>
                              
                              <fieldset>
                                <h3>Verify document</h3>
                                <doc_name></doc_name>
                               
                                <h6></h6>
                                <div class="passport">
                                  
                                </div>
                               
                                <div class="row">
                                  <div class="col-md-12 mx-auto">
                                    <div class="input-group mb-5">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="doc_file1" id="as1"/>
                                        <label class="custom-file-label text-left" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02" >Upload Front Side Copy</label>
                                      </div>
                                    </div>
                                  </div>
                                
                                  <div class="col-md-12 mx-auto">
                                    <div class="input-group mb-5">
                                      <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="doc_file2" id="as2" />
                                        <label class="custom-file-label2 text-left" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02" >Upload Back Side Copy</label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button type="button" class="action-button previous previous_button">
                                  Back
                                </button>
                                <button type="button" class="next action-button">
                                  Continue
                                </button>
                              </fieldset>
                              <fieldset>
                                <h3>Please take the shot</h3>
                                <h6 class="photos"></h6>
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div id="my_camera"></div>
                                      <br/>
                                      
                                      <input type="hidden" name="image" class="image-tag">
                                    </div>
                                    <div class="col-md-6">
                                      <div id="results" style="background-color: white;">Your captured image will appear here...</div>
                                    </div>
                                  </div>
                                  <br>
                                  <div class="mb-3">
                                    <input type=button value="Click to take the selfie" onClick="take_snapshot()" class="btn btn-lg btn-danger">
                                  </div>
                                  
                                  <button type="button" class="action-button previous previous_button">
                                  Back
                                  </button>
                                  <input type="submit" class="finish action-button" vlaue="Submit">
                              </fieldset>
                              <script language="JavaScript">
                                  Webcam.set({
                                      width: 320,
                                      height: 240,
                                      image_format: 'jpeg',
                                      jpeg_quality: 90
                                  });
                                
                                  Webcam.attach( '#my_camera' );
                                
                                  function take_snapshot() {
                                      Webcam.snap( function(data_uri) {
                                          $(".image-tag").val(data_uri);
                                          document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
                                      } );
                                  }
                              </script>
                            </form>
                          </section>
                          <!-- End Multi step form -->

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

<script src="<?= base_url('assets/js/index.js'); ?>"></script>
</body>

</html>
