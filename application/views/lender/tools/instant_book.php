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
<style type="text/css">
    .dashboard-list h4 {
    padding: 15px 25px;
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    font-size: 18px;
    font-weight: 500;
    margin: 0;
    margin-bottom: 10px;
    margin-top:10px;
}
.bg-grea-3 {
    background: #f9f9f8;
}
.pad-20 {
    padding: 25px;
}
.submit-address form .input-text {
    width: 100%;
    padding: 10px 17px;
    font-size: 13px;
    border: 1px solid #e8e7e7;
    outline: none;
    color: #6c6c6c;
    height: 45px;
    border-radius: 2px;
}
.submit-address form textarea {
    min-height: 160px;
}
textarea {
    overflow: auto;
    resize: vertical;
}
</style>
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

     <div class="content-area5 dashboard-content">
                    <div class="submit-address dashboard-list">
                            <h4 class="bg-grea-3">Instant Book
                            <!-- <div class="slideThree">    
                                <input type="checkbox" value="None" id="slideThree" name="check" />
                                <label for="slideThree"></label>
                            </div> -->

                            <?php if(empty($fetch_instant_book)){ $anc = 'Deactive' ?>
                                 <a class="btn btn-success act_deactive" title="0" href="<?php echo base_url('Tools/instant_book_on_off_befor/'.$fetch_instant_book->instant_id); ?>">
                                  <?php echo $anc; ?>
                                  </a>
                                </h4>
                            <?php }else{ ?>

                            <?php 
                               if($fetch_instant_book->instant_book == 1){ $anc = 'Active'; }else{ $anc = 'Deactive'; }                          
                            ?>
                            
                            <a class="btn btn-success inst_book_on_off" title="<?php echo $fetch_instant_book->instant_book ?>" href="<?php echo base_url('Tools/instant_book_on_off/'.$fetch_instant_book->instant_id); ?>">
                              <?php echo $anc; ?>
                              </a>

                            <?php } ?>

                            </h4>

                            
                    </div>

                    <?php if(empty($fetch_instant_book)){ ?>
                    <?php }else{ ?>
                        <?php if($fetch_instant_book->instant_book_notice!=''){  ?>
                            <div class="submit-address dashboard-list">
                                <div id="success_msg"></div>
                                <form method="post" action="Store-Instant-Booking" >   
                                    <h4 class="bg-grea-3">Instant Book Settings</h4>
                                    <div class="search-contents-sidebar">
                                        <div class="row pad-20">
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="form-group">
                                                       <label>Advance Booking Notice</label>
                                                    <select class="form-control" name="instant_book_notice" id="instant_book_notice" disabled="">
                                                        <?php foreach ($fetch_advance_booking_notice as $adv_book): ?>
                                                            <?php if($fetch_instant_book->instant_book_notice==$adv_book->adv_id){ ?>
                                                            <option selected value="<?php echo $adv_book->adv_id ?>" ><?php echo $adv_book->adv_name ?></option> 
                                                            <?php } ?>
                                                                
                                                        <?php endforeach ?>
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-13">
                                                <div class="form-group">
                                                    <label>Borrowers can Instant book Same day before</label>
                                                    <?php 
                                                    $ti = $fetch_instant_book->instant_book_time;
                                                    ?>
                                                    <input type="text" name="instant_book_time" class="form-control" value="<?php echo date("h:i A",strtotime($fetch_instant_book->instant_book_time));?>" disabled="">
           
                                                </div>
                                            </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Pre booking Message</label>
                                                    
                                                        <textarea class="input-text" name="instant_book_mesg" placeholder="Add a Pre Booking Message here" disabled=""><?php echo $fetch_instant_book->instant_book_mesg; ?></textarea>
                                                </div>
                                            </div>
                                             
                                           
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            
                                                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Change Setting</button>

                                        </div>
                                        <div class="clearfix"></div>
                                    
                                    </div>
                                    </form>
                            </div>
                        <?php } else{ ?>
                            <div class="submit-address dashboard-list">
                                <div id="success_msg"></div>
                                <form method="post" action="Store-Instant-Booking" >   
                                    <h4 class="bg-grea-3">Instant Book Settings</h4>
                                    <div class="search-contents-sidebar">
                                        <div class="row pad-20">
                                            <div class="col-lg-4 col-md-4 col-sm-12">
                                                <div class="form-group">
                                                       <label>Advance Booking Notice</label>
                                                    <select class="form-control" name="instant_book_notice" id="instant_book_notice">
                                                        <?php foreach ($fetch_advance_booking_notice as $adv_book): ?>
                                                            <?php if($fetch_instant_book->instant_book_notice==$adv_book->adv_id){ ?>
                                                            <option selected value="<?php echo $adv_book->adv_id ?>"><?php echo $adv_book->adv_name ?></option> 
                                                            <?php }else{ ?>
                                                                <option value="<?php echo $adv_book->adv_id ?>"><?php echo $adv_book->adv_name ?></option> 
                                                            <?php } ?>   
                                                        <?php endforeach ?>
                                                        
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-13">
                                                <div class="form-group">
                                                    <label>Borrowers can Instant book Same day before</label>
                                                    
                                                    <input type="time" name="instant_book_time" class="form-control" s>
           
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Pre booking Message</label>
                                                    <label style="float:right;font-family:arial;color:#FF214F;">100 Characters</label>
                                                        <textarea class="input-text" name="instant_book_mesg" placeholder="Add a Pre Booking Message here" minlength="20" maxlength="100" required></textarea>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="col-lg-4 col-md-12 col-sm-12">
                                            
                                                <input type="Submit" name="submit" class="btn btn-success">
                                            
                                        </div>
                                    </form>
                                    </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                   
                </div>
			
            <div class="clearfix"></div>
            <div class="clearfix"></div>
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

<script>
    $('.inst_book_on_off').click(function(ev){
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
      var timeout = 3000; // in miliseconds (3*1000)

      $('.alert').delay(timeout).fadeOut(300);
    </script>

</body>

</html>
