<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Tools extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('Dashboard_model','dashboard_model');
		$this->load->model('Tools_model','tools_model');
		$this->load->model('Create_item_model','item_model');
	}
	
	public function view_create_offer(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='List item | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
		
		$data['fetch_offers'] = $this->tools_model->fetch_offers($otu_id);
		$data['fetch_user_items'] = $this->tools_model->fetch_user_items($otu_id);
		$this->load->view('lender/tools/create_offer',$data);	
	}

	public function delete_offer($offer_id){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$this->tools_model->delete_offer($offer_id);
		redirect('Create-Offers');
	}

	public function store_create_offer(){
		$data = array();
		$this->load->helper('string');
        $data['offer_code'] = random_string('alnum', 8);
        $data['oauth_uid']=$this->session->userdata('oauth_uid');
		$data['offer_type'] = $this->input->post('offer_type');
		$data['offer_dis_price'] = $this->input->post('offer_dis_price');
		$data['offer_valid'] = $this->input->post('offer_valid');
		$data['random_itemno'] = $this->input->post('random_itemno');
		$data['offer_validity'] = $this->input->post('offer_validity');
		$data['offer_date'] = $this->input->post('offer_date');
		if($this->item_model->store_create_offer($data)){
			$this->session->set_flashdata('feedback','Offer Added Successfully');
			$this->session->set_flashdata('feedback_class','alert-success');
		}else{
			$this->session->set_flashdata('feedback','Offer failed to Added, please try again');
			$this->session->set_flashdata('feedback_class','alert-error');
		}
		redirect('Create-Offers');
	}
	
	public function offer_active($offer_id,$offer_valid,$oauth_uid,$random_itemno){
		// print_r($offer_valid);
		// exit();
		if($offer_valid=='All%20Items'){
			$visi_sql = "update offers set offer_visibility='Not Visible',offer_status='Not Visible' where oauth_uid='$oauth_uid' and oauth_uid='$oauth_uid'";
			$this->db->query($visi_sql);
			$sql = "update offers set offer_status='1',offer_visibility='0' where offer_id='$offer_id' and oauth_uid='$oauth_uid'";
			if($this->db->query($sql)){
				redirect('Create-Offers');
			}
		}else if($random_itemno!='0'){
			$visi_sql = "update offers set offer_visibility='Not Visible',offer_status='Not Visible' where oauth_uid='$oauth_uid' and $offer_id='$offer_id' and random_itemno='$random_itemno'";
			$this->db->query($visi_sql);
			$sql = "update offers set offer_status='1',offer_visibility='0' where offer_id='$offer_id' and oauth_uid='$oauth_uid'";
			if($this->db->query($sql)){
				redirect('Create-Offers');
			}
		}else{
			$sql = "update offers set offer_status='1' where offer_id='$offer_id' and oauth_uid='$oauth_uid'";
			if($this->db->query($sql)){
				redirect('Create-Offers');
			}
		}
	}

	public function offer_deactive($offer_id,$offer_valid,$oauth_uid,$random_itemno){
		if($offer_valid=='All%20Items'){
			$visi_sql = "update offers set offer_visibility='0',offer_status='0' where oauth_uid='$oauth_uid' and oauth_uid='$oauth_uid'";
			$this->db->query($visi_sql);
			$sql = "update offers set offer_status='0',offer_visibility='0' where offer_id='$offer_id' and oauth_uid='$oauth_uid'";
			if($this->db->query($sql)){
				redirect('Create-Offers');
			}
		}else if($random_itemno!='0'){
			$visi_sql = "update offers set offer_visibility='0',offer_status='0' where oauth_uid='$oauth_uid' and $offer_id='$offer_id' and random_itemno='$random_itemno'";
			$this->db->query($visi_sql);
			$sql = "update offers set offer_status='0',offer_visibility='0' where offer_id='$offer_id' and oauth_uid='$oauth_uid'";
			if($this->db->query($sql)){
				redirect('Create-Offers');
			}
		}else{
			$sql = "update offers set offer_status='0' where offer_id='$offer_id' and oauth_uid='$oauth_uid'";
			if($this->db->query($sql)){
				redirect('Create-Offers');
			}
		}
	}

	public function offer_visibility_yes($offer_id){

		$fetch_ac_de_status = "select * from offers where offer_id='$offer_id'";
		$ac_de_status_q = $this->db->query($fetch_ac_de_status)->row();

		if($ac_de_status_q->offer_status=='0'){
			$this->session->set_flashdata('feedback','First Active Your Offer');
			$this->session->set_flashdata('feedback_class','alert-danger');
			redirect('Create-Offers');
		}else{
			$sql = "update offers set offer_visibility='1' where offer_id='$offer_id'";
			if($this->db->query($sql)){
				redirect('Create-Offers');
			}	
		}
		
	}

	public function offer_visibility_no($offer_id){

		$sql = "update offers set offer_visibility='0' where offer_id='$offer_id'";
		if($this->db->query($sql)){
			redirect('Create-Offers');
		}
	}


	public function view_instant_book(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Instant Book | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
		
		$data['fetch_instant_book'] = $this->tools_model->fetch_instant_book($otu_id);
		$data['fetch_advance_booking_notice'] = $this->tools_model->fetch_advance_booking_notice();
		$this->load->view('lender/tools/instant_book',$data);	
	}

	public function instant_book_on_off_befor($id=""){
        
        $sts = $this->input->post('sts');
        
	        if($sts == 1){
	            $upsts= '0'; 
	        }else{
	            $upsts= '1';
	        }

	        $oauth_uid = $this->session->userdata('oauth_uid');
	        $sql = "insert into instant_book (instant_book,oauth_uid) values($upsts,$oauth_uid)";
	        $ins = $this->db->query($sql);

	      	if($ins){
	          redirect('Instant-Book');
	        }        
	}


	public function instant_book_on_off($id=""){
        
        $sts = $this->input->post('sts');
        
	        if($sts == 1){
	            $upsts = '0'; 
	        }else{
	            $upsts = '1';
	        }
	      
	        if($this->db->update('instant_book',array('instant_book'=>$upsts),array('instant_id'=>$id))){
	          echo $upsts;  
	        }        
	}

	public function store_instant_booking()
	{
		$otu_id = $this->session->userdata('oauth_uid');
        $data['instant_book_notice']=$this->input->post('instant_book_notice');
        $instant_book_time=$this->input->post('instant_book_time');
        $data['instant_book_time']=date('h:i A',strtotime($instant_book_time));
        $data['instant_book_mesg']=$this->input->post('instant_book_mesg');

        $re=$this->tools_model->store_instant_booking($otu_id,$data);

        redirect('Instant-Book');
	}

	public function view_policies(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Policies | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
		$data['fetch_policies'] = $this->tools_model->fetch_policies($otu_id);

		$this->load->view('lender/tools/policies',$data);	
	}

	public function store_policy(){
		$data=array();
		$data['oauth_uid'] = $this->session->userdata('oauth_uid');
		$data['policy_name'] = $this->input->post('policy_name');
		$policy_desc_imp=$this->input->post('policy_desc');
		$data['policy_desc']=implode('$',array_filter($policy_desc_imp));
		
		if($this->tools_model->store_policy($data)){
			$this->session->set_flashdata('feedback','Policy Create Successfully');
			$this->session->set_flashdata('feedback_class','alert-success');
	  	}else{
	  		$this->session->set_flashdata('feedback','Policy failed to Craete, please try again');
			$this->session->set_flashdata('feedback_class','alert-danger');
	  	}
	  	redirect('Policies');
	}

	public function policy_deactive($id=""){
        
        $sts = $this->input->post('sts');
        
	        if($sts == 1){
	            $upsts = '0'; 
	        }else{
	            $upsts = '1';
	        }
	      
	        if($this->db->update('policies',array('policy_status'=>$upsts),array('policy_id'=>$id))){
	          echo $upsts;  
	        }        
	}

	public function delete_policy($policy_id){
		$this->tools_model->delete_policy($policy_id);
		redirect('Policies');
	}

	public function view_open_hours(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Policies | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
		$data['fetch_open_hours'] = $this->tools_model->fetch_open_hours($otu_id);
		
		$this->load->view('lender/tools/open_hours',$data);	
	}

	public function store_open_hours(){
		$data=array();
		$data['oauth_uid']=$this->session->userdata('oauth_uid');
		$data['open_from']=date('h:i A',strtotime($this->input->post('open_from')));
		$data['open_to']=date('h:i A',strtotime($this->input->post('open_to')));

		if($this->input->post('edit')){
			if($this->tools_model->update_open_hours($this->session->userdata('oauth_uid'),$data)){
				$this->session->set_flashdata('feedback','Open Hours Change Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
		  	}else{
		  		$this->session->set_flashdata('feedback','Open Hours failed to Change, please try again');
				$this->session->set_flashdata('feedback_class','alert-danger');
		  	}
		}else{
			if($this->tools_model->store_open_hours($data)){
				$this->session->set_flashdata('feedback','Open Hours Create Successfully');
				$this->session->set_flashdata('feedback_class','alert-success');
		  	}else{
		  		$this->session->set_flashdata('feedback','Open Hours failed to Craete, please try again');
				$this->session->set_flashdata('feedback_class','alert-danger');
		  	}	
		}
		
	  	redirect('Open-Hours');
	}


	public function view_availability_settings(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');
		

		$otu_id = $this->session->userdata('oauth_uid');
		$this->session->unset_userdata('item_id');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Instant Book | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
		$data['fetch_instant_book'] = $this->tools_model->fetch_instant_book($otu_id);
		$data['fetch_items'] = $this->tools_model->fetch_user_items($otu_id);
		
		$data['fetch_advance_booking_notice'] = $this->tools_model->fetch_advance_booking_notice();
		$data['fetch_advance_booking_months'] = $this->tools_model->fetch_advance_booking_months();
		$this->load->view('lender/tools/availability_settings',$data);	
	}

	public function view_calendar(){
		if(! $this->session->userdata('item_id'))
			return redirect('availability-settings');
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Instant Book | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
		$data['fetch_instant_book'] = $this->tools_model->fetch_instant_book($otu_id);
		$data['fetch_advance_booking_notice'] = $this->tools_model->fetch_advance_booking_notice();
		
		$this->load->view('lender/tools/calendar',$data);	
	}

	public function view_update_calendar($item_id,$item_name,$random_itemno){
		if($item_id=='')
			return redirect('my-items');
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Instant Book | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		
		$data['fetch_advance_booking_months'] = $this->tools_model->fetch_advance_booking_months();
		$data['fetch_user_adv_book_month'] = $this->tools_model->fetch_user_adv_book_month($item_id,$otu_id);
		$data['fetch_user_adv_book_month'] = $this->tools_model->fetch_user_adv_book_month($item_id,$otu_id);
		
		$this->load->view('lender/tools/update_calendar',$data);	
	}

	public function view_block_calendar($item_id,$item_name,$random_itemno){
		if($item_id=='')
			return redirect('my-items');
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Instant Book | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		$data['item_id'] =$item_id;
		
		
		$data['fetch_advance_booking_months'] = $this->tools_model->fetch_advance_booking_months();
		$data['fetch_user_adv_book_month'] = $this->tools_model->fetch_user_adv_book_month($item_id,$otu_id);
		$data['fetch_user_adv_book_month'] = $this->tools_model->fetch_user_adv_book_month($item_id,$otu_id);
		
		$this->load->view('lender/tools/block_calendar',$data);	
	}

	function fetch_subcat()
	 {
	  if($this->input->post('category_id'))
	  {
	   echo $this->item_model->fetch_subcat($this->input->post('category_id'));
	  }
	}

	function fetch_subtype()
	 {
	  if($this->input->post('subcat_id'))
	  {
	   echo $this->item_model->fetch_subtype($this->input->post('subcat_id'));
	  }
	}

	public function store_user_adv_month(){
		$out_id = $this->session->userdata('oauth_uid');
		$item_id = $this->input->post('item_id');
		$advmonth_id=$this->input->post('advmonth_id');
		$data = array();
			
		$data['oauth_uid'] = $this->session->userdata('oauth_uid');
        
		$data['item_id']=$this->input->post('item_id');
		// print_r($data['item_id']);
		// exit();
		$data['advmonth_id']=$this->input->post('advmonth_id');

		$sql = "select * from user_adv_book_month where oauth_uid='$out_id' and item_id='$item_id'";
		$query = $this->db->query($sql)->row();
		if(empty($query)){
			
			if($this->tools_model->store_user_advance_month($data)){
				$sq = "select * from advance_booking_months where advmonth_id='$advmonth_id'";
				$sq2 = $this->db->query($sq)->row();
				$adv_month_name =$sq2->advmonth_name; 
				$this->session->set_userdata('item_id', $item_id);
				$this->session->set_userdata('adv_month_name', $adv_month_name);
			}
		}else{
			if($this->tools_model->update_user_advance_month($out_id,$data)){
				$sq = "select * from advance_booking_months where advmonth_id='$advmonth_id'";
				$sq2 = $this->db->query($sq)->row();
				$adv_month_name =$sq2->advmonth_name; 
				$this->session->set_userdata('item_id', $item_id);
				$this->session->set_userdata('adv_month_name', $adv_month_name);
			}	
		}
		redirect('calendar-sync');	
	}

	public function store_user_adv_month_block(){
		$pre_url = $_SERVER['HTTP_REFERER'];
		
		$out_id = $this->session->userdata('oauth_uid');
		$item_id = $this->input->post('item_id');
		$advmonth_id=$this->input->post('advmonth_id');
		$data = array();
			
		$data['oauth_uid'] = $this->session->userdata('oauth_uid');
        
		$data['item_id']=$this->input->post('item_id');
		// print_r($data['item_id']);
		// exit();
		$data['advmonth_id']=$this->input->post('advmonth_id');

		$sql = "select * from user_adv_book_month where oauth_uid='$out_id' and item_id='$item_id'";
		$query = $this->db->query($sql)->row();
		if(empty($query)){
			
			if($this->tools_model->store_user_advance_month($data)){
				$sq = "select * from advance_booking_months where advmonth_id='$advmonth_id'";
				$sq2 = $this->db->query($sq)->row();
				$adv_month_name =$sq2->advmonth_name; 
				$this->session->set_userdata('item_id', $item_id);
				$this->session->set_userdata('adv_month_name', $adv_month_name);
			}
		}else{
			if($this->tools_model->update_user_advance_month($out_id,$data)){
				$sq = "select * from advance_booking_months where advmonth_id='$advmonth_id'";
				$sq2 = $this->db->query($sq)->row();
				$adv_month_name =$sq2->advmonth_name; 
				$this->session->set_userdata('item_id', $item_id);
				$this->session->set_userdata('adv_month_name', $adv_month_name);
			}	
		}
		redirect($pre_url);	
	}

	public function add_event(){
		$oauth_uid = $this->session->userdata('oauth_uid');
		$item_id = $this->session->userdata('item_id');
		$title = "Deactive";
		$start = isset($_POST['start']) ? $_POST['start'] : "";
		$end = isset($_POST['end']) ? $_POST['end'] : "";

		// $open_hour = "select * from open_hours where oauth_uid=$oauth_uid";
		// $open_hour1 = $this->db->query($open_hour)->row();

		// $open_from = $open_hour1->open_from;
		// $open_to = $open_hour1->open_to;

		$sql = "select * from calendar where oauth_uid=$oauth_uid and item_id='$item_id'";
		$sql1 = $this->db->query($sql)->row();

		if($sql1->start!=$start){
			$sqlInsert = "INSERT INTO calendar (title,oauth_uid,item_id,start,end) VALUES ('".$title."','".$oauth_uid."','".$item_id."','".$start."','".$end ."')";
			$this->db->query($sqlInsert);
		}else{
			alert("found");	
		}

		
	}
	public function fetch_event(){
		$oauth_uid = $this->session->userdata('oauth_uid');
		$item_id = $this->session->userdata('item_id');

		$json = array();
	    $sqlQuery = "SELECT * FROM calendar where oauth_uid=$oauth_uid and item_id=$item_id ORDER BY id";
	    $result = $this->db->query($sqlQuery);
	    $eventArray = array();
	    foreach($result->result() as $row){
		    array_push($eventArray, $row);
		}
		echo json_encode($eventArray);
	}

	public function fetch_event_for_update($item_id){
		$oauth_uid = $this->session->userdata('oauth_uid');
		$item_ids = $item_id;

		$json = array();
	    $sqlQuery = "SELECT * FROM calendar where oauth_uid=$oauth_uid and item_id=$item_ids ORDER BY id";
	    $result = $this->db->query($sqlQuery);
	    $eventArray = array();
	    foreach($result->result() as $row){
		    array_push($eventArray, $row);
		}
		echo json_encode($eventArray);
	}

	public function add_event_for_update($item_id){
		$oauth_uid = $this->session->userdata('oauth_uid');
		$item_ids = $item_id;
		
		$start = isset($_POST['start']) ? $_POST['start'] : "";
		$end = isset($_POST['end']) ? $_POST['end'] : "";

		$open_hour = "select * from open_hours where oauth_uid=$oauth_uid";
		$open_hour1 = $this->db->query($open_hour)->row();

		$open_from = isset($_POST['title']) ? $_POST['title'] : "";
		$title = "Active" . " " . $open_from;
		$open_to = $open_hour1->open_to;

		$sql = "select * from calendar where oauth_uid=$oauth_uid and item_id='$item_id'";
		$sql1 = $this->db->query($sql)->row();

		if($sql1->start!=$start){
			$sqlInsert = "INSERT INTO calendar (title,oauth_uid,item_id,start,end,open_from,open_to) VALUES ('".$title."','".$oauth_uid."','".$item_id."','".$start."','".$end ."','".$open_from ."','".$open_to ."')";
			$this->db->query($sqlInsert);
		}else{
			alert("found");	
		}
		
	}

	public function add_event_block($item_id){
		$oauth_uid = $this->session->userdata('oauth_uid');
		$item_ids = $item_id;
		$title = "Deactive";
		$start = isset($_POST['start']) ? $_POST['start'] : "";
		$end = isset($_POST['end']) ? $_POST['end'] : "";

		$sql = "select * from calendar where oauth_uid=$oauth_uid and item_id='$item_id'";
		$sql1 = $this->db->query($sql)->row();

		if($sql1->start!=$start){
			$sqlInsert = "INSERT INTO calendar (title,oauth_uid,item_id,start,end) VALUES ('".$title."','".$oauth_uid."','".$item_ids."','".$start."','".$end ."')";
			$this->db->query($sqlInsert);
		}else{
			alert("found");	
		}

		
	}


	public function delete_event(){
		$id = $_POST['id'];
		$sqlDelete = "DELETE from calendar WHERE id=".$id;
		$result = $this->db->query($sqlDelete);

		echo $this->db->affected_rows();

	}

	public function update_delete_event(){
		$id = $_POST['id'];
		$sql = "select * from calendar where id='$id'";
		$fetch_sql = $this->db->query($sql)->row();
		if($fetch_sql->title=='Deactive'){

		}else{
			$sqlDelete = "DELETE from calendar WHERE id=".$id;
			$result = $this->db->query($sqlDelete);	
			echo $this->db->affected_rows();
		}		

	}




}
?>