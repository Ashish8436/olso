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
<style type="text/css">
    .dashboard-list h4 {
    padding: 15px 25px;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    font-size: 18px;
    font-weight: 500;
    margin: 0;
}
.bg-grea-3 {
    background: #f9f9f8;
}
.pad-20 {
    padding: 25px;
}
</style>
</head>
<body>
<?php echo $header; ?>
        <!-- Main content -->
        <div class="main-content">
        
       <?php
        $policie=7645;
         if($policie==$_REQUEST['policies']){ ?>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">
                                Create Policy
                                <a href="<?= base_url('Policies') ?>" class="btn btn-primary btn-md" style="color:white;margin-left:350%;margin-top: -30px;">View Policies</a>
                            </h4>
                        </div>
                        <div class="panel-body">
                             <form method="post" action="<?= base_url('Store-Policies');?>">
                                  <div class="form-group">
                                    <label for="emailaddress">Policy Title</label>
                                    <input type="text" name="policy_name" class="form-control">
                                  </div>
                                  <div id='TextBoxesGroup'>
                                            <div id="TextBoxDiv1">
                                                <label>Policy Rules 1: </label> <input type='textbox' name="policy_desc[]" id='textbox1' style="border-radius: 2px;border: 1px solid #e8e7e7;color: #6c6c6c;font-size: 13px;height: 45px;width:182px;">
                                                <input type='button' value='Add Policy Rules' id='addButton' class="btn btn-primary" style="font-weight: bold;">
                                            </div>
                                        </div>
                                        
                                  <div class="col-lg-4 col-md-12 col-sm-12" style="margin-top:10px;">
                                        <input type="submit" name="submit" value="Create Policy" class="btn btn-success">
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <?php } else{ ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">
                            <a href="<?= base_url('Policies') ?>?policies=7645" class="btn btn-primary btn-md" style="color:white;">Create Policies</a>
                        </h4>
                        
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Policy Name</th>
                                        <th>Rules</th>
                                        <th>Option</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $a=1; foreach ($fetch_policies as $policy): ?>
                                     <tr class="gradeX">
                                        <td><?php echo $a;$a++; ?></td>
                                        <td>
                                            <?php echo $policy->policy_name; ?>
                                        </td>
                                        <td>
                                          <?php 
                                            $policy_desc = explode('$',$policy->policy_desc);
                                            $total_policy_rules = count($policy_desc);

                                            for($i=0;$i<$total_policy_rules;$i++){
                                              echo rtrim($policy_desc[$i],'/');
                                              echo '/';
                                            }
                                          ?>
                                        </td>
                                        <td>
                                             <a onclick="return confirm('Do you really want to Delete Policy?');" href="<?= base_url("Tools/delete_policy/$policy->policy_id"); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> 
                                                  Delete 
                                                </a>
                                        </td>
                                        <td>
                                          <?php 
                                           if($policy->policy_status == 1){ $anc = 'Active'; }else{ $anc = 'Deactive'; }                          
                                        ?>
                                        
                                          <a class="btn btn-success policy_deac" title="<?php echo $policy->policy_status ?>" href="<?php echo base_url('Tools/policy_deactive/'.$policy->policy_id); ?>">
                                          <?php echo $anc; ?>
                                          </a>
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
$('.policy_deac').click(function(ev){
        ev.preventDefault();
          
        var  dis = this;
           
        $.post($(this).attr('href'),{'sts':$(this).attr('title')},function(resp){
                 
          if(resp == 1){
            $(dis).html("Active");
            $(dis).attr("title",resp);
          }else if(resp == 0){
            $(dis).html("Deactive");
            $(dis).attr("title",resp);
          }
                 
        });  
      });
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
                
    newTextBoxDiv.after().html('<label>Policy Rules '+ counter + ' : </label>' +
          '<input type="text" name="policy_desc[]" id="textbox' + counter + '" value=""  style="border-radius: 2px;border: 1px solid #e8e7e7;color: #6c6c6c;font-size: 13px;height: 45px;width:182px;">');
            
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
 <script type="text/javascript">
      var timeout = 3000; // in miliseconds (3*1000)

      $('.alert').delay(timeout).fadeOut(300);
    </script>

</body>

</html>
