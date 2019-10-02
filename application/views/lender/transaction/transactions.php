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
        
        <div class="main-content">
      <h1 class="page-title">All Transactions</h1>
      <!-- Breadcrumb -->
     
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading clearfix">
              <div class="radio radio-replace radio-primary">
                <input type="radio" name="radios2" id="radio8" value="payment" onclick="payment();">
                <label for="radio8">Completed Payouts</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="radios2" id="radio9" value="not_payment" onclick="not_payment();">
                <label for="radio9">Upcoming Payouts</label>
              </div>  
              
            </div>
            <div class="panel-body" style="display: none;" id="not_pay">
              <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                  <thead>
                    <tr>
                      <th>No.</th>
                      <th>Item Name</th>
                      <th>Payment Amount</th>  
                      <th>Booking Date</th>           
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach ($fetch_admin_payment_upcoming as $not_pay): ?>
                      <tr class="gradeX">
                        <td><?php echo $i;$i++; ?></td>
                        <td><?php echo $not_pay->item_name ?></td>
                        <td><?php echo ($not_pay->payment_amount)-30 ?></td>
                        <td><?php echo date("d M Y",$not_pay->created_at); ?></td>
                        
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
                    <?php $i=1; foreach ($fetch_admin_payment_complete as $pay): ?>
                      <tr class="gradeX">
                        <td><?php echo $i;$i++; ?></td>
                        <td><?php echo $pay->admin_payment_id ?></td>
                        <td><?php echo ($pay->payment_amount)-30 ?></td>
                        <td><?php echo $pay->item_name ?></td>
                        <td><?php echo $pay->admin_payment_name ?></td>
                        <td><?php echo $pay->payment_bank ?></td>
                        <td><?php echo date("d M Y", $pay->created_at) ?></td>
                        <td>
                          
                            <a href="#" class="btn btn-success">Yes</a>             
                          

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

  
    </div>
    <!-- /main content -->
       
            
            
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

</html>
