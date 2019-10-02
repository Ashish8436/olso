<?php
$_SESSION['url'] = "http://localhost".$_SERVER['REQUEST_URI'];
?>
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

<style type="text/css">
	.dashboard-list h4 {
    padding: 15px 25px;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    font-size: 18px;
    font-weight: 500;
    margin: 0;
}
.pad-20 {
    padding: 25px;
}
.row {
    display: -webkit-box;
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.comment {
    margin: 0 0 30px 0;
    position: relative;
    display: inline-block;
    width: 100%;
}
.comment-content .btn-1 {
    border: none;
    cursor: pointer;
    padding: 8px 20px;
    display: inline-block;
    outline: none;
    font-size: 12px;
    border-radius: 25px;
    font-weight: 500;
    background: #e9ecef;
    color: #868e96;
}
.dashboard-list .comment-content {
    padding-bottom: 10px;
    margin-bottom: 0;
}
.comment-content {
   
    border-bottom: dashed 1px #d6d6d6;
    margin: 0 0 0 85px;
    margin-left: 150px;
}
.comment-meta {
    margin-bottom: 10px;
    font-size: 13px;
    color: #535353;
    font-weight: 500;
}
.comment-content ul li {
    font-weight: 600;
    color: #50596E;
    line-height: 30px;
    font-size: 14px;
    margin-left: -40px;
}
li {
    display: list-item;
    text-align: -webkit-match-parent;
}
ul {
   
    list-style: none;
   
}
.comment h5 {
    font-size: 15px;
    font-weight: 600;
    margin-bottom: 15px;
}

.comment-meta a {
    margin-left: 20px;
    font-weight: 600;

}
.comment-author a img {
    bottom: 2px;
    border-radius: 10%;
    display: block;
    width: 100%;
    position: absolute;
    top: 2px;

}
img {
    vertical-align: middle;
    border-style: none;
}
.comment-content .btn-1:hover {
    background: #6059EE;
    color: #fff;
}
</style>
</head>
<body>
<?php echo $header; ?>
		<!-- Main content -->
		<div class="main-content">
		
			<h1 class="page-title">Dashboard</h1>
			<br>
			
			<div class="submit-address dashboard-list">
                <form method="GET">
                    <h4>Request List</h4>
                    <div class="row pad-20">
                        <div class="col-lg-12">
                           	<?php foreach ($fetch_request_item as $req_item): ?>
		                       	<div class="comment">
		                            <div class="comment-author">
		                                <a href="#">
		                                    <img src="<?= base_url(); ?><?php echo $req_item->item_image1 ?>" alt="comments-user" style="width:110px; height:100px;">
		                                </a>
		                            </div>
		                            <div class="comment-content">
		                                <div class="comment-meta">
		                                    <h5><?php echo $req_item->first_name ?> <?php echo $req_item->last_name ?> <a style="margin-left:10px; font-size:12px;color:rgb(96, 89, 238);" href="<?= base_url('profile') ?>/<?php echo $req_item->oauth_uid; ?>">View Profile</a></h5>

		                                    <div class="comment-meta">
		                                    	<?php 
		                                    		$req_date=explode(' ', $req_item->request_date);
		                                    	?>
		                                        <?php echo date('h:i A', strtotime($req_item->request_date)) ?> || <?php echo date("d M Y", strtotime($req_date[0])); ?> 
		                                    </div>
		                                </div>
		                                <ul>
		                                    <li>Item :<span> <?php echo $req_item->item_name ?></span></li>
		                                    <?php if($req_item->booking_name=='day'){ ?>
		                                    	<li>Start date : <span> <?php echo date("d M Y", strtotime($req_item->start_date)); ?></span></li>
		                                    	<li>End date : <span> <?php echo date("d M Y", strtotime($req_item->end_date)); ?></span></li>
		                                    <?php } ?>

		                                    <?php if($req_item->booking_name=='hourly'){ ?>
		                                    	<li>Pickup date : <span> <?php echo date("d M Y", strtotime($req_item->pickup_date)); ?></span></li>
		                                    	<li>Pickup time : <span> <?php echo $req_item->pick_up ?></span></li>
		                                    	<li>Total Book : <span> <?php echo $req_item->total_hours ?> hrs</span></li>
		                                    <?php } ?>

		                                    <?php if($req_item->booking_name=='monthly'){ ?>
		                                    	<li>Total Month : <span> <?php echo $req_item->total_month ?> months</span></li>
		                                    <?php } ?>
		                                    
		                                    <li>User quote :<span> <?php echo $req_item->user_comments ?></span></li>
		                                    
		                                </ul>
		                                <div class="buttons mb-20">
		                                    <a href="<?= base_url('Item-Accept') ?>?req=<?php echo $req_item->req_id ?>" onclick="return confirm('Do you really want to Accept this Item?');" class="btn-1 btn-gray"><i class="fa fa-fw fa-check-circle-o"></i> Approve</a>
		                                    <a href="#" class="btn-1 btn-gray" id="cancel_id" data-toggle="modal" data-target="#myModal"><i class="fa fa-fw fa-times-circle-o"></i> Cancel</a>
		                                    <input type="hidden" value="<?php echo $req_item->req_id ?>" id="req_id">
		                                </div>
		                            </div>
		                        </div>
		                    <?php endforeach ?>  
                        </div>
                    </div>
                </form>
            </div>
			
			<!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog">
			    <form method="post" action="<?= base_url('Item-Cancel') ?>">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-header">
			          <h4 class="modal-title">Modal Header</h4>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			          
			        </div>
			        
			        <div class="modal-body">
			          	<span id="output"></span>
			          	<div class="_1v8t1fb" style="font-weight:bold;font-size:20px;color:#6059EE;">Enter Cancel reason</div>
			          	<textarea class="form-control" name="cancel_reason" rows="5" placeholder="Cancel reason...." required></textarea><br>
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <input type="submit" name="submit" value="Submit" class="btn btn-primary">
			        </div>
			    	
			      </div>
			      </form>
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

<script>
 $(document).ready(function(){
        $('#cancel_id').click(function(){
              var id = $.trim($("#req_id").val());
              $('#output').html("<input type='hidden' name='req_id' value="+id+">");
    });
  });
</script>

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

</body>

</html>
