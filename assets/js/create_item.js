$(document).ready(function(){
 
 $('#category').change(function(){
  var category_id = $('#category').val();
  if(category_id != '')
  {
   $.ajax({
    url:"<?php echo base_url(); ?>controller/Create_item/fetch_subcat",
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