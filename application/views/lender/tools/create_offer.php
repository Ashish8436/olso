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
        $offer=7645;
         if($offer==$_REQUEST['offers']){ ?>
        <div class="submit-address dashboard-list">
            <form method="post" action="Store-Offers">
                <h4 class="bg-grea-3">Create Offers
                	<a href="<?= base_url('Create-Offers') ?>" class="btn btn-primary btn-md" style="color:white;float:right;">View Offer</a>
            	</h4>
            
                <div class="search-contents-sidebar">
                	<div class="">
                    <label style="font-size:16px;">
                        You can Create your own Offers and generate your own
                            promocodes to offer to your borrowers .
                            The discount will come from your profit, but is great for persuading
                            people to request who otherwise might not.
                        
                    </label>
                </div>
                    <div class="row pad-20">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Offer type</label>
                                <select class="form-control" name="offer_type">
                                    <option value="">Select Offer Type...</option>
                                    <option value="Price">Price</option>
                                    <option value="Discount">Discount</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12" name="offer_dis_price">
                            <div class="form-group">
                                <label>Price/Discount Value</label>
                                <input type="number" name="offer_dis_price" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-12" name="offer_valid" style="margin-bottom: 10px;">
                            <div class="form-group">
                                <label>Offer valid On</label><br>
                                <input type="radio" name="offer_valid" value="All Items" id="all_items"> All Items
                                <input type="radio" name="offer_valid" value="Select Item" id="select_item"> Select Item
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-md-4 col-sm-12" id="item_offer_product" style="display: none;" >
                            <div class="form-group">
                                <label>Select Item</label>
                                <select class="form-control" name="random_itemno">
                                    <option value="">Select Item...</option>
                                    <?php foreach ($fetch_user_items as $items) { ?>
                                        <option value="<?php echo $items->random_itemno; ?>"><?php echo $items->item_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <div class="form-group">
                                <label>Offer validity</label><br>
                                <input type="radio" name="offer_validity" value="Forever" id="forever"> Forever
                                <input type="radio" name="offer_validity" value="Open Calendar" id="open_cal"> Open Calendar
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12" id="select_offer_date" style="display: none;">
                            <div class="form-group">
                                <label>Select Date</label>
                                 <div class="form-row">
                                    <input type="date" id="txtDate" class="hide-replaced form-control" name="offer_date" />
                                </div>
                            </div>
                        </div>
                       	
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <input type="submit" name="submit" value="Generate Code" class="btn btn-success">
                     </div>
                    
                </div>
                
                <div class="clearfix"></div>
            </form>
        </div>
        <?php }else{ ?>	
		<div class="row">
			<div class="col-lg-12">
                <?php if($feedback = $this->session->flashdata('feedback')): 
                          $feedback_class = $this->session->flashdata('feedback_class');
                          ?>
                      <div class="alert alert-dismissible <?= $feedback_class ?>">
                        <?= $feedback; ?>
                      </div>
                    <?php endif; ?>
				<div class="panel panel-default">
					<div class="panel-heading clearfix">
						<h4 class="panel-title">
							<a href="<?= base_url('Create-Offers') ?>?offers=7645" class="btn btn-primary btn-md" style="color:white;">Create Offer</a>
						</h4>
						
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered table-hover dataTables-example" >
								<thead>
									<tr>
										<th>No.</th>
                                        <th>Offer Price / Discount</th>
                                        <th>Offer Valid</th>
                                        <th>Validity</th>
                                        <th>Offer Code</th>
                                        <th>Visibility</th>
                                        <th>Status</th>
                                        <th>Option</th>
									</tr>
								</thead>
								<tbody>
									<?php $a=1; foreach ($fetch_offers as $offers): ?>
                                         <tr class="gradeX">
                                            <td><?php echo $a;$a++; ?></td>
                                            <td>
                                                <?php if($offers->offer_type=='Price'){ ?>
                                                    ₹ <?php echo $offers->offer_dis_price; ?>
                                                <?php }else{ ?>
                                                    <?php echo $offers->offer_dis_price; ?> %
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if($offers->offer_valid=='All Items'){ ?>
                                                    <?php echo $offers->offer_valid; ?>
                                                <?php }else if($offers->offer_valid=='Select Item'){ ?>

                                                    <?php
                                                    $random_itemno = $offers->random_itemno;
                                                    $sql = "select item_name from create_item where random_itemno=$random_itemno";
                                                    $item_n= $this->db->query($sql)->row();
                                                     ?>
                                                    <?php echo $item_n->item_name; ?>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <?php if($offers->offer_validity=='Forever'){ ?>
                                                    
                                                    <?php echo $offers->offer_validity; ?>
                                                <?php }else{ ?>
                                                    <?php echo $offers->offer_date; ?>
                                                <?php } ?>
                                            </td>
                                            <td><?php echo $offers->offer_code; ?></td>
                                            <td>
                                              <?php if($offers->offer_visibility=='0'){ ?>
                                                <a href="<?= base_url('Tools/offer_visibility_yes') ?>/<?php echo $offers->offer_id ?>" class="btn btn-danger btn-sm">No</a>
                                              <?php } else if($offers->offer_visibility=='1'){ ?>
                                                <a href="<?= base_url('Tools/offer_visibility_no') ?>/<?php echo $offers->offer_id ?>" class="btn btn-success btn-sm">Yes</a>
                                              <?php } ?>
                                            </td>
                                            <td>
                                                
                                              <?php if($offers->offer_status=='0'){ ?>
                                                <a href="<?= base_url('Tools/offer_active') ?>/<?php echo $offers->offer_id ?>/<?php echo $offers->offer_valid ?>/<?php echo $offers->oauth_uid ?>/<?php echo $offers->random_itemno ?>" class="btn btn-danger btn-sm">Deactive</a>
                                              <?php } else if($offers->offer_status=='Not Visible'){ ?>

                                              <?php } else if($offers->offer_status=='1'){ ?>
                                                <a href="<?= base_url('Tools/offer_deactive') ?>/<?php echo $offers->offer_id ?>/<?php echo $offers->offer_valid ?>/<?php echo $offers->oauth_uid ?>/<?php echo $offers->random_itemno ?>" class="btn btn-success btn-sm">Active</a>
                                              <?php } ?>
                                            </td>
                                            <td>
                                                <a onclick="return confirm('Do you really want to Delete this Offer?');" href="<?= base_url("Delete-Offers/$offers->offer_id"); ?>" class="btn btn-danger btn-sm" >Delete</a>
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
	$(document).ready(function(){
    $('#select_item').click(function(){
        $("#item_offer_product").show();
    });
    $('#all_items').click(function(){
        $("#item_offer_product").hide();
    });
});

$(document).ready(function(){
    $('#open_cal').click(function(){
        $("#select_offer_date").show();
    });
    $('#forever').click(function(){
        $("#select_offer_date").hide();
    });
});

$('.act_deactive').click(function(ev){
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

$('.visibility_yes_no').click(function(ev){
        ev.preventDefault();
          
        var  dis = this;
           
        $.post($(this).attr('href'),{'sts':$(this).attr('title')},function(resp){
                 
          if(resp == 1){
            $(dis).html("Yes");
            $(dis).attr("title",resp);
          }else if(resp == 0){
            $(dis).html("No");
            $(dis).attr("title",resp);
          }
                 
        });  
      });
</script>

<script type="text/javascript">
    $(function(){
    var dtToday = new Date();
    
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    
    var minDate= year + '-' + month + '-' + day;
    
    $('#txtDate').attr('min', minDate);
});
</script>

 <script type="text/javascript">
      var timeout = 3000; // in miliseconds (3*1000)

      $('.alert').delay(timeout).fadeOut(300);
    </script>

</body>

</html>
