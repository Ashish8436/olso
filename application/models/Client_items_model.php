<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Client_items_model extends CI_Model{


	public function fetch_item_category(){
		$sql = "select c.cat_name,c.cat_id from create_item as ci, category as c where ci.cat_id=c.cat_id and ci.item_status='1' GROUP BY ci.cat_id";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function fetch_limit_items($cat_id){
		$sql = "select * from create_item as ci, item_price as ip where ci.random_itemno=ip.random_itemno and ci.cat_id='$cat_id' and ci.item_status='1' LIMIT 12";
		$q = $this->db->query($sql);
		return $q->result();
	}

	public function fetch_user_details($oauth_uid){
		return $this->db->where('oauth_uid',$oauth_uid)
						->get('users')
						->row();
	}

	public function get_product_details($random_itemno){
		$sql = "select * from create_item as ci, item_price as ip, item_address as id, country, cities, state, users, category,sub_category,subcat_type where ci.random_itemno=ip.random_itemno and 
		ci.random_itemno=id.random_itemno and id.country_id=country.id and id.state_id=state.state_id and id.city_id=cities.city_id and ci.oauth_uid=users.oauth_uid and ci.random_itemno='$random_itemno' and ci.cat_id=category.cat_id and ci.subcat_id=sub_category.subcat_id and ci.subtype_id=subcat_type.subtype_id";
		$q = $this->db->query($sql);
		return $q->row();
	}

	public function fetch_similar_product($vendor_id,$random_itemno){
		$sql = "select * from create_item as ci, item_price as ip, users as u where ci.random_itemno=ip.random_itemno and ci.oauth_uid=u.oauth_uid and ci.oauth_uid='$vendor_id' and ci.random_itemno!='$random_itemno'";
		$q = $this->db->query($sql);
		return $q->result();
	}

	function fetch_as($as_id)
	 {
	 
	  $output = '<option value="">Choose Types...</option>';
	  
	  return $output;
	 }


	function fetch_drop_time($item_recive_time_id,$owner_id)
	 {
	  $owner_id=$owner_id;
	  $owner_open_hours_sql = "select open_from,open_to from open_hours where oauth_uid=$owner_id";
      $owner_open_hours_data = $this->db->query($owner_open_hours_sql)->row();

      $time1 = explode(" ", $owner_open_hours_data->open_from);
      $time2 = explode(" ", $owner_open_hours_data->open_to);

      $range=range(strtotime($time1[0]."AM"),strtotime($time2[0]."PM"),30*60);
	  $output = '<option value="">Time</option>';
	  foreach($range as $time)
	  {
	  	if(date('g:i A',$time)==$item_recive_time_id)
	  	{
	  		break;
	  	}else{
	   		$output .= '<option value="'.date("g:i A",$time).'">'. date("g:i A",$time).' </option>';
	   	}
	  }
	  return $output;
	 }

	function fetch_discount_and_total_price($month_id,$random_itemno)
	{
		
		$month_id = $month_id;
		$random_itemno = $random_itemno;

		$sql = "SELECT * FROM `item_price` WHERE random_itemno='$random_itemno' and no_month LIKE '%$month_id%'";
		$fetch_month = $this->db->query($sql)->row();

		$fetch_month_sql = "select * from month where month_id='$month_id'";
		$fetch_month_name = $this->db->query($fetch_month_sql)->row();


		//$output = print_r($fetch_month);
		
		if(empty($fetch_month)){
			$fetch_item_price_sql = "SELECT * FROM `item_price` WHERE random_itemno='$random_itemno'";
			$fetch_item_price = $this->db->query($fetch_item_price_sql)->row();
			$fetch_month = $this->db->query($sql)->row();

			$output= "<label class='float-left'>".$fetch_item_price->monthly_price." x ".$fetch_month_name->month_name." month"."</label>";
			$output.= "<label style='float:right;' id='total_month_multi_price'>".$fetch_item_price->monthly_price*$fetch_month_name->month_name."</label><div class='clearfix'></div>";
			
			$output.="<hr style='border:1px solid red;'><label class='float-left'>Total</label> <label style='float:right;'>₹".(($fetch_item_price->monthly_price*$fetch_month_name->month_name))."</label>";

			$output.="<input type='hidden' name='total_item_price' value='".$fetch_item_price->monthly_price*$fetch_month_name->month_name."'>";
			
			$output.="<input type='hidden' name='total_amount' value='".(($fetch_item_price->monthly_price*$fetch_month_name->month_name))."'>";
			$output.="<br><br><span ><input type='checkbox' required=''><a data-toggle='modal' data-target='#termModel'>Agree & Continue </a></span>";
						$output.="<br><label><h5>Say hello to your host</h5></label><textarea class='form-control' placeholder='' name='user_comments' required=''></textarea><br><input type='submit' name='submit' value='Request to rent' class='btn btn-primary' style='border:1px solid #6690F9; background:#6690F9; font-weight: bold;margin-top: -2%'>";

		}else{
			
			$fetch_no_month =explode(",",$fetch_month->no_month);
			$fetch_month_disc =explode(",",$fetch_month->month_disc);
			$total_month =count($fetch_no_month);

			for($i=0;$i<=$total_month;$i++){
				
				if($fetch_no_month[$i] !=''){
					if($month_id == $fetch_no_month[$i]){
						$output= "<label class='float-left'>".$fetch_month->monthly_price." x ".$fetch_month_name->month_name." month"."</label>";
						$output.= "<label style='float:right;'>".$fetch_month->monthly_price*$fetch_month_name->month_name."</label><div class='clearfix'></div>";
						$output.= "<label class='float-left' style='margin-top:-15px;'>".$fetch_month_disc[$i]."% monthly Discount"."</label>";
						$output.= "<label style='float:right;'>- ".((($fetch_month->monthly_price*$fetch_month_name->month_name)*$fetch_month_disc[$i])/100)."</label><div class='clearfix'></div>";
						
						$output.="<hr style='border:1px solid red;'><label class='float-left'>Total</label> <label style='float:right;'>₹".(($fetch_month->monthly_price*$fetch_month_name->month_name)-((($fetch_month->monthly_price*$fetch_month_name->month_name)*$fetch_month_disc[$i])/100))."</label>";
						$output.="<input type='hidden' name='total_item_price' value='".$fetch_month->monthly_price*$fetch_month_name->month_name."'>";
						
						$output.="<input type='hidden' name='discount_price' value='".((($fetch_month->monthly_price*$fetch_month_name->month_name)*$fetch_month_disc[$i])/100)."'>";
						$output.="<input type='hidden' name='total_amount' value='".(($fetch_month->monthly_price*$fetch_month_name->month_name)-((($fetch_month->monthly_price*$fetch_month_name->month_name)*$fetch_month_disc[$i])/100))."'>";
						$output.="<br><br><span ><input type='checkbox' required=''><a data-toggle='modal' data-target='#termModel'>Agree & Continue </a></span>";
						$output.="<br><label><h5>Say hello to your host</h5></label><textarea class='form-control' placeholder='' name='user_comments' required=''></textarea><br><input type='submit' name='submit' value='Request to rent' class='btn btn-primary' style='border:1px solid #6690F9; background:#6690F9; font-weight: bold;margin-top: -2%'>";
						break;
					}else{
						$output= "<label class='float-left'>".$fetch_month->monthly_price." x ".$fetch_month_name->month_name." month"."</label>";
						$output.= "<label style='float:right;' id='total_month_multi_price'>".$fetch_month->monthly_price*$fetch_month_name->month_name."</label>";
						
						$output.="<hr style='border:1px solid red;'><label class='float-left'>Total</label> <label style='float:right;'>₹".(($fetch_month->monthly_price*$fetch_month_name->month_name))."</label>";

						$output.="<input type='hidden' name='total_item_price' value='".$fetch_month->monthly_price*$fetch_month_name->month_name."'>";
						
						$output.="<input type='hidden' name='total_amount' value='".(($fetch_month->monthly_price*$fetch_month_name->month_name))."'>";
						$output.="<br><br><span ><input type='checkbox' required=''><a data-toggle='modal' data-target='#termModel'>Agree & Continue </a></span>";
						$output.="<br><label><h5>Say hello to your host</h5></label><textarea class='form-control' placeholder='' name='user_comments' required=''></textarea><br><input type='submit' name='submit' value='Request to rent' class='btn btn-primary' style='border:1px solid #6690F9; background:#6690F9; font-weight: bold;margin-top: -2%'>";
					}
				}else{
					$output= "<label class='float-left'>".$fetch_month->monthly_price." x ".$fetch_month_name->month_name." month"."</label>";
						$output.= "<label class='float-right' id='total_month_multi_price'>".$fetch_month->monthly_price*$fetch_month_name->month_name."</label>";
						
						$output.="<hr style='border:1px solid red;'><label class='float-left'>Total</label> <label class='float-right'>₹".(($fetch_month->monthly_price*$fetch_month_name->month_name))."</label>";

						$output.="<input type='hidden' name='total_item_price' value='".$fetch_month->monthly_price*$fetch_month_name->month_name."'>";
						
						$output.="<input type='hidden' name='total_amount' value='".(($fetch_month->monthly_price*$fetch_month_name->month_name))."'>";
						$output.="<br><br><span ><input type='checkbox' required=''><a data-toggle='modal' data-target='#termModel'>Agree & Continue </a></span>";
						$output.="<br><label><h5>Say hello to your host</h5></label><textarea class='form-control' placeholder='' name='user_comments' required=''></textarea><br><input type='submit' name='submit' value='Request to rent' class='btn btn-primary' style='border:1px solid #6690F9; background:#6690F9; font-weight: bold;margin-top: -2%'>";
				}
				
			}
		}	
		
		return $output;
	}

	function fetch_hours_price_ajax($hours_id,$random_itemno){
		$hours_id = $hours_id;
		$random_itemno = $random_itemno;

		$sql = "SELECT * FROM `item_price` WHERE random_itemno='$random_itemno' and no_hr LIKE '%$hours_id%'";
		$fetch_hr = $this->db->query($sql)->row();

		$fetch_hr_sql = "select * from hours where hours_id='$hours_id'";
		$fetch_hr_name = $this->db->query($fetch_hr_sql)->row();

		

		if(empty($fetch_hr)){
			$fetch_item_price_sql = "SELECT * FROM `item_price` WHERE random_itemno='$random_itemno'";
			$fetch_item_price = $this->db->query($fetch_item_price_sql)->row();
			$fetch_hr = $this->db->query($sql)->row();

			$output= "<label class='float-left'>₹".$fetch_item_price->hr_price." x ".$fetch_hr_name->hours_name." Hours"."</label>";
			$output.= "<label style='float:right;' id='total_month_multi_price'>₹".$fetch_item_price->hr_price*$fetch_hr_name->hours_name."</label><div class='clearfix'></div>";
			
			$output.="<hr style='border:1px solid red;'><label class='float-left'>Total</label> <label style='float:right;'>₹".(($fetch_item_price->hr_price*$fetch_hr_name->hours_name))."</label>";

			$output.="<input type='hidden' name='total_item_price' value='".$fetch_item_price->hr_price*$fetch_hr_name->hours_name."'>";
			
			$output.="<input type='hidden' name='total_amount' value='".(($fetch_item_price->hr_price*$fetch_hr_name->hours_name))."'>";
			$output.="<br><br><span ><input type='checkbox' required=''><a data-toggle='modal' data-target='#termModel'>Agree & Continue </a></span>";
						$output.="<br><label><h5>Say hello to your host</h5></label><textarea class='form-control' placeholder='' name='user_comments' required=''></textarea><br><input type='submit' name='submit' value='Request to rent' class='btn btn-primary' style='border:1px solid #6690F9; background:#6690F9; font-weight: bold;margin-top: -2%'>";

		}else{
			
			$fetch_no_hr =explode(",",$fetch_hr->no_hr);
			$fetch_hr_disc =explode(",",$fetch_hr->hr_disc);
			$total_hr =count($fetch_no_hr);

			for($i=0;$i<=$total_hr;$i++){
				
				if($fetch_no_hr[$i] !=''){
					if($hours_id == $fetch_no_hr[$i]){
						$output= "<label class='float-left'>₹".$fetch_hr->hr_price." x ".$fetch_hr_name->hours_name." Hours"."</label>";
						$output.= "<label style='float:right;'>₹".$fetch_hr->hr_price*$fetch_hr_name->hours_name."</label><div class='clearfix'></div>";
						$output.= "<label class='float-left' style='margin-top:-15px;'>".$fetch_hr_disc[$i]."% Hourly Discount"."</label>";
						$output.= "<label style='float:right;'>- ₹".((($fetch_hr->hr_price*$fetch_hr_name->hours_name)*$fetch_hr_disc[$i])/100)."</label>";
						
						$output.="<hr style='border:1px solid red;width:100%;'><label class='float-left'>Total</label> <label style='float:right;'>₹".(($fetch_hr->hr_price*$fetch_hr_name->hours_name)-((($fetch_hr->hr_price*$fetch_hr_name->hours_name)*$fetch_hr_disc[$i])/100))."</label>";
						$output.="<input type='hidden' name='total_item_price' value='".$fetch_hr->hr_price*$fetch_hr_name->hours_name."'>";
						
						$output.="<input type='hidden' name='discount_price' value='".((($fetch_hr->hr_price*$fetch_hr_name->hours_name)*$fetch_hr_disc[$i])/100)."'>";
						$output.="<input type='hidden' name='total_amount' value='".(($fetch_hr->hr_price*$fetch_hr_name->hours_name)-((($fetch_hr->hr_price*$fetch_hr_name->hours_name)*$fetch_hr_disc[$i])/100))."'>";
						$output.="<br><span><input type='checkbox' required=''><a data-toggle='modal' data-target='#termModel'>Agree & Continue </a></span>";
						$output.="<br><label><h5>Say hello to your host</h5></label><textarea class='form-control' placeholder='' name='user_comments' required=''></textarea><br><input type='submit' name='submit' value='Request to rent' class='btn btn-primary' style='border:1px solid #6690F9; background:#6690F9; font-weight: bold;margin-top: -2%'>";
						break;
					}
				}
			}
		}	
		
		return $output;

	}

	 public function fetch_months(){
	 	return $this->db->get('month')
	 					->result();
	 }

	 public function fetch_hours(){
	 	return $this->db->get('hours')
	 					->result();
	 }
 

}
?>