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

  <link rel="stylesheet" href="<?= base_url('assets/fullcalendar/fullcalendar.min.css');?>" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

<script>

    $(document).ready(function () {

        
        var today = new Date();
        var yye = today.getFullYear();
        var dd = today.getDate();
        var mm = today.getMonth() + 1;

        var month = "<?php echo $fetch_user_adv_book_month->advmonth_name ?>";
        //alert(month);
        var advance_month = mm + parseInt(month);
        // alert(yy);
        // exit();
        var i=yye+'-'+mm+'-'+dd;
        var e=yye+'-'+advance_month+'-'+dd;
        var month = "<?php echo $fetch_user_adv_book_month->advmonth_name ?>";
       
        var calendar = $('#calendar').fullCalendar({
            

            editable: true,
            events: "<?php echo base_url(); ?>Tools/fetch_event_for_update/<?php echo $fetch_user_adv_book_month->item_id?>",
            displayEventTime: false,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
            selectable: true,
            selectHelper: true,
            select: function (start, end, allDay) {
                
                var title = 'Deactive';
                if (title) {
                
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                    var today = new Date();
                    var today1 = moment(today).format('Y-MM-DD');
                    if(start<today1){

                    }else{
                        $.ajax({
                            url: "<?php echo base_url(); ?>Tools/add_event_block/<?php echo $fetch_user_adv_book_month->item_id?>",
                            data: 'title=' + title + '&start=' + start + '&end=' + end,
                            type: "POST",
                            success: function (data) {
                                //displayMessage("Added Successfully");
                                //$("#calendar").load("#calendar").fadeIn("slow");
                                 calendar.fullCalendar('refetchEvents');
                            }
                        });

                        calendar.fullCalendar('renderEvent',
                                {
                                    title: title,
                                    //$oauth_uid: oauth_uid,
                                    start: start,
                                    end: end,
                                    allDay: allDay
                                },
                        false
                                );  
                    }
                    
                }
                calendar.fullCalendar('unselect');
            },
            
            editable: true,
            eventDrop: function (event, delta) {
                        var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: 'edit-event.php',
                            data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
                            type: "POST",
                            success: function (response) {
                                displayMessage("Updated Successfully");
                            }
                        });
                    },
            eventClick: function (event) {
                //var deleteMsg = confirm("Do you really want to delete?");
                
                    var title = 'Deactive';
                    if (event.id!='') {
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url(); ?>Tools/delete_event",
                            data: "&id=" + event.id,
                            success: function (response) {
                                if(parseInt(response) > 0) {
                                    $('#calendar').fullCalendar('removeEvents', event.id);
                                   // displayMessage("Deleted Successfully");
                                }
                            }
                        });
                    }
                
            },

            
            
            customButtons: {
                        
                    
                          myNextButton: {
                                //text: 'Next',
                                icon: 'right-single-arrow',
                                click: function() {
                                  $('#calendar').fullCalendar('incrementDate', {
                                    months: 1
                                  });
                                }
                              },
                              myPrevButton: {
                                //text: 'Prev',
                                icon: 'left-single-arrow',
                                click: function() {
                                  $('#calendar').fullCalendar('incrementDate', {
                                    months: -1
                                  });
                                }
                              }
                },


                header: {

                    left: 'today,myPrevButton,myNextButton, btn1 btn2',
                    right: 'title ',
                    
                },

                validRange: {
                start: i,//start date here
                end: e //end date here
                },
                defaultDate: yye+'-'+mm+'-'+dd,
        
        });


    });

    function displayMessage(message) {
            $(".response").html("<div class='success'>"+message+"</div>");
        setInterval(function() { $(".success").fadeOut(); }, 1000);
    }

</script>


<style>

    #calendar {
        width: 700px;
        margin: 0 auto;
    }
    mobiscroll.calendar('#demo-bubble-two', {
        display: 'bubble',
        months: 2,
        yearChange: false
    });

    .response {
        height: 60px;
    }

    .success {
        background: #cdf3cd;
        padding: 10px 60px;
        border: #c3e6c3 1px solid;
        display: inline-block;
    }
       
            
         
        /*td.fc-past {
            
            background-color: #EEEEEE;

        }

        */

</style>


</head>
<body>
<?php echo $header; ?>
		<!-- Main content -->
		<div class="main-content">
			<div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <h4 class="panel-title">How far in advance can book Borrower</h4>
                        </div>
                        <div class="panel-body">
                             <form method="post" action="<?= base_url('Tools/store_user_adv_month_block'); ?>">
                                  <input type="hidden" name="item_id" value="<?php echo $item_id; ?>">
                                  <div class="form-group">
                                    <label for="emailaddress">Select Months</label>
                                    <select name="advmonth_id" class="form-control">
                                            <?php foreach ($fetch_advance_booking_months as $months): ?>
                                                <?php if($fetch_user_adv_book_month->advmonth_id==$months->advmonth_id){ ?>
                                                    <option selected value="<?php echo $months->advmonth_id; ?>">
                                                        <?php if($months->advmonth_id=='1'){ ?>
                                                            I'll open specific dates
                                                        <?php } else if($months->advmonth_name=='1'){ ?>
                                                            1 month in advance
                                                        <?php }else{ ?>
                                                            <?php echo $months->advmonth_name; ?> months in advance
                                                        <?php } ?>
                                                    </option>
                                                <?php }else{ ?>
                                                    <option value="<?php echo $months->advmonth_id; ?>">
                                                        <?php if($months->advmonth_id=='1'){ ?>
                                                            I'll open specific dates
                                                        <?php } else if($months->advmonth_name=='1'){ ?>
                                                            1 month in advance
                                                        <?php }else{ ?>
                                                            <?php echo $months->advmonth_name; ?> months in advance
                                                        <?php } ?>
                                                    </option>
                                                <?php } ?>
                                            <?php endforeach ?>
                                        </select>
                                        <label style="font-weight: bold; font-size: 16px;"><span style="font-weight: bold; color:#6059EE;">Tip:</span> Block dates on your calendar when your place isn't available </label>
                                  </div>
                                 <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                                  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading clearfix" style="margin-bottom: 10px;">
							<h4 class="panel-title">Update Calender</h4>
							
						</div>
						<div class="search-contents-sidebar" style="font-size: 13px; margin-bottom: 10px;">
                                <div class="row pad-20" >
                                     

                                    <div class="response"></div>
                                    <div id='calendar'></div>
                                </div>
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
