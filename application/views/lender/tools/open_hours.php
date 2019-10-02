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
<link href="<?= base_url('assets/lender_assets/plugins/datatables/css/jquery.dataTables.css');?>" rel="stylesheet">
<link href="<?= base_url('assets/lender_assets/plugins/datatables/extensions/Buttons/css/buttons.dataTables.css');?>" rel="stylesheet">

</head>
<body>
<?php echo $header; ?>
        <!-- Main content -->
         <?php if($feedback = $this->session->flashdata('feedback')): 
            $feedback_class = $this->session->flashdata('feedback_class');
            ?>
        <div class="alert alert-dismissible <?= $feedback_class ?>">
          <?= $feedback; ?>
        </div>
      <?php endif; ?>

      <?php if(empty($fetch_open_hours)){ ?>
          <div class="row">
            <div class="col-lg-14">
              <div class="panel panel-default">
                <div class="panel-heading clearfix">
                  <h4 class="panel-title">Open hours</h4>
                </div>
                <div class="panel-body">
                  <div class="col-md-12"><label style="font-size:17px;">This the the time between which Borrower gets information of when they can pick up drop or drop of or expect deliver</label></div>
                   <form method="post" action="<?= base_url('Store-Open-Hours') ?>">
                      <div class="form-group">
                      <label for="emailaddress">From</label>
                      <input type="time" name="open_from" class="form-control" >
                      </div>
                      <div class="form-group">
                      <label for="password">To</label>
                      <input type="time" name="open_to" class="form-control">
                      </div>
                      <input type="Submit" name="submit" class="btn btn-primary">
                  </form>
                </div>
              </div>
            </div>
          </div>

      <?php }else { ?>

        <div class="row" style="margin-top:13%;">

            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">
                           Open Hours
                        </h4>
                        
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th>Open From</th>
                                        <th>Open To</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php $a=1; foreach ($fetch_open_hours as $open_hour): ?>
                                     <tr class="gradeX">
                                        
                                        <td><?php echo $open_hour->open_from; ?></td>
                                        <td><?php echo $open_hour->open_to; ?></td>
                                        <td>
                                             <a onclick="return confirm('Do you really want to Delete Policy?');" href="<?= base_url("Tools/delete_policy/$policy->policy_id"); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> 
                                                  Delete 
                                                </a>
                                            <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o"></i> Edit</button>
                                            
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

      <?php } ?>

  
       <br><br><br><br><br>
            
            
            <!-- Footer -->
            <?php echo $footer; ?>
            <!-- /footer -->
      </div>
      <!-- /main content -->
  </div>
  <!-- /main container -->
</div>
<!-- /page container -->


 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="margin-top: 6%; ">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"  style="width:120%;">
      <div class="modal-header">
        <h4 class="modal-title">Edit Open Hours</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
            <div class="content-area5 dashboard-content">
                <div class="submit-address dashboard-list">
                    
                    <form method="post" action="Store-Open-Hours" >   
                        
                            <div class="col-md-12"><label style="font-size:17px;">This the the time between which Borrower gets information of when they can pick up drop or drop of or expect deliver</label></div>
                        <div class="search-contents-sidebar">
                            <div class="row pad-20">
                                <input type="hidden" name="edit" value="edit">
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>From</label>
                                        <input type="time" name="open_from" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12">
                                    <div class="form-group">
                                        <label>To</label>
                                        <input type="time" name="open_to" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12" style="margin-bottom: 10px;">
                                
                                    <input type="Submit" name="submit" value="Change" class="btn btn-md button-theme">
                                
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
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
<script src="<?= base_url('assets/lender_assets/plugins/datatables/js/jquery.dataTables.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/datatables/js/dataTables.bootstrap.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/datatables/extensions/Buttons/js/dataTables.buttons.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/datatables/js/jszip.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/datatables/js/pdfmake.min.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/datatables/js/vfs_fonts.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/datatables/extensions/Buttons/js/buttons.html5.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/datatables/extensions/Buttons/js/buttons.colVis.js');?>"></script>
<script src="<?= base_url('assets/lender_assets/plugins/datatables/js/dataTables-script.js');?>"></script>

<!--Functions Js-->
<script src="<?= base_url('assets/lender_assets/js/functions.js');?>"></script>

<!--Dashboard Js-->
<script src="<?= base_url('assets/lender_assets/js/dashboard.js');?>"></script>

<script src="<?= base_url('assets/lender_assets/js/loader.js');?>"></script>

 <script type="text/javascript">
      var timeout = 3000; // in miliseconds (3*1000)

      $('.alert').delay(timeout).fadeOut(300);
    </script>


</body>

</html>
