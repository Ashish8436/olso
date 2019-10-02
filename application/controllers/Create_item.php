<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Create_item extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('Dashboard_model','dashboard_model');
		$this->load->model('Create_item_model','item_model');
	}
	
	public function view_create_item(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='List item | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
      	
		$data['fetch_item_oper_available'] = $this->item_model->fetch_item_oper_available();
		$data['fetch_available_for_delivery'] = $this->item_model->fetch_available_for_delivery();
		$data['fetch_country'] = $this->dashboard_model->get_country();
		$data['fetch_category'] = $this->item_model->get_category();
		$this->load->view('lender/listing/create_item',$data);
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

	function fetch_subtype_items()
	 {
	  if($this->input->post('subtype_id'))
	  {
	   echo $this->item_model->fetch_subtype_items($this->input->post('subtype_id'));
	  }
	}


	function fetch_state()
	 {
	  if($this->input->post('country_id'))
	  {
	   echo $this->item_model->fetch_state($this->input->post('country_id'));
	  }
	}

	function fetch_city()
	 {
	  if($this->input->post('state_id'))
	  {
	   echo $this->item_model->fetch_city($this->input->post('state_id'));
	  }
	}

	public function item_image1(){
		$config['upload_path']          = './uploads/items/';
        $config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']             = 0;
       // $config['max_width']            = 2000;
       // $config['max_height']           = 1111;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('item_image1'))
                {
                		//echo "<pre>";
                        $data = $this->upload->data();
                        //print_r($data);
                        //exit();
                        $image_path = "uploads/items/$data[file_name]";
                        return $image_path;
                }
                else
                {
                        $error = $this->upload->display_errors();
                        print_r($error);
                }
	}

	public function item_image2(){
		$config['upload_path']          = './uploads/items/';
        $config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']             = 0;
       // $config['max_width']            = 2000;
       // $config['max_height']           = 1111;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('item_image2'))
                {
                		//echo "<pre>";
                        $data = $this->upload->data();
                        //print_r($data);
                        //exit();
                        $image_path = "uploads/items/$data[file_name]";
                        return $image_path;
                }
                else
                {
                        $error = $this->upload->display_errors();
                        print_r($error);
                }
	}

	public function item_image3(){
		$config['upload_path']          = './uploads/items/';
        $config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']             = 0;
       // $config['max_width']            = 2000;
       // $config['max_height']           = 1111;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('item_image3'))
                {
                		//echo "<pre>";
                        $data = $this->upload->data();
                        //print_r($data);
                        //exit();
                        $image_path = "uploads/items/$data[file_name]";
                        return $image_path;
                }
                else
                {
                        $error = $this->upload->display_errors();
                        print_r($error);
                }
	}

	public function item_image4(){
		$config['upload_path']          = './uploads/items/';
        $config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']             = 0;
       // $config['max_width']            = 2000;
       // $config['max_height']           = 1111;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('item_image4'))
                {
                		//echo "<pre>";
                        $data = $this->upload->data();
                        //print_r($data);
                        //exit();
                        $image_path = "uploads/items/$data[file_name]";
                        return $image_path;
                }
                else
                {
                        $error = $this->upload->display_errors();
                        print_r($error);
                }
	}

	public function item_image5(){
		$config['upload_path']          = './uploads/items/';
        $config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']             = 0;
       // $config['max_width']            = 2000;
       // $config['max_height']           = 1111;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('item_image5'))
                {
                		//echo "<pre>";
                        $data = $this->upload->data();
                        //print_r($data);
                        //exit();
                        $image_path = "uploads/items/$data[file_name]";
                        return $image_path;
                }
                else
                {
                        $error = $this->upload->display_errors();
                        print_r($error);
                }
	}

	public function store_items(){
		$data = array();
			
		$data['oauth_uid'] = $this->session->userdata('oauth_uid');
        $data['random_itemno'] = rand(1000000, 9000000);
        $data['item_name']=$this->input->post('item_name');
		$data['item_image1']=$this->item_image1();
		$data['item_image2']=$this->item_image2();
		$data['item_image3']=$this->item_image3();
		$data['item_image4']=$this->item_image4();
		$data['item_image5']=$this->item_image5();

		$data['cat_id']=$this->input->post('cat_id');
		$data['subcat_id']=$this->input->post('subcat_id');
		$data['subtype_id']=$this->input->post('subtype_id');
		$data['item_qty']=$this->input->post('item_qty');
		$data['item_tags']=$this->input->post('item_tags');
		$data['item_description']=$this->input->post('item_description');
		$data['item_specification']=$this->input->post('item_specification');
		$data['item_oper_available']=$this->input->post('item_oper_available');
		$data['item_delivery']=$this->input->post('item_delivery');
		$data['item_current_price']=$this->input->post('item_current_price');
		$plan=$this->input->post('item_plans');
		$data['item_plans']=implode(',',array_filter($plan));
		$gov_iss_id=$this->input->post('gov_issued_ids');
		$data['gov_issued_ids']=implode(',',array_filter($gov_iss_id));
		$data['recom_byother_lender']=$this->input->post('recom_byother_lender');
		$rules_renting=$this->input->post('rules_of_renting');
		$data['rules_of_renting']=implode('$',array_filter($rules_renting));
		$data['item_offer']=$this->input->post('item_offer');
		date_default_timezone_set('Asia/Calcutta');
        $data['item_create_date'] = date('Y-m-d h-i-s');


		$data2 = array();
		$data2['random_itemno'] = $data['random_itemno'];
		$data2['hr_price']=$this->input->post('hr_price');
		$data2['day_price']=$this->input->post('day_price');
		$data2['monthly_price']=$this->input->post('monthly_price');

		$hourly_disc=$this->input->post('hr_disc');
		$data2['hr_disc']=implode(',',array_filter($hourly_disc));
		$no_hr=$this->input->post('no_hr');
		$data2['no_hr']=implode(',',array_filter($no_hr));

		$monthly_disc=$this->input->post('month_disc');
		$data2['month_disc']=implode(',',array_filter($monthly_disc));
		$no_month=$this->input->post('no_month');
		$data2['no_month']=implode(',',array_filter($no_month));

		$data2['week_disc']=$this->input->post('week_disc');
		$data2['min_day_book']=$this->input->post('min_day_book');
		$data2['max_day_book']=$this->input->post('max_day_book');
		

		$data3 = array();
		$data3['random_itemno'] = $data['random_itemno'];
		$data3['country_id']=$this->input->post('country_id');
		$data3['state_id']=$this->input->post('state_id');
		$data3['city_id']=$this->input->post('city_id');
		$data3['pincode']=$this->input->post('pincode');
		$data3['address1']=$this->input->post('address1');
		$data3['address2']=$this->input->post('address2');

		$this->item_model->store_items($data);
		$this->item_model->store_items_price($data2);
		$this->item_model->store_items_address($data3);
		redirect('Create-Item'); 
		
	}

	public function view_duplicate_item($random_itemno){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');
			
	$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Duplicate Create Item | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
     	
		
		$data['fetch_country'] = $this->dashboard_model->get_country();
		$data['fetch_category'] = $this->item_model->get_category();
		$data['fetch_create_items'] = $this->item_model->fetch_create_items($random_itemno);
		$data['fetch_subcategory'] = $this->item_model->fetch_subcategory($data['fetch_create_items']->cat_id);
		$data['fetch_subcategory_type'] = $this->item_model->fetch_subcategory_type($data['fetch_create_items']->subcat_id);
		$data['fetch_item_oper_available'] = $this->item_model->fetch_item_oper_available();
		$data['fetch_available_for_delivery'] = $this->item_model->fetch_available_for_delivery();
		$data['fetch_item_state'] = $this->item_model->fetch_item_state($data['fetch_create_items']->country_id);
		$data['fetch_item_city'] = $this->item_model->fetch_item_city($data['fetch_create_items']->state_id);
		$data['fetch_month'] = $this->item_model->fetch_month();
		$data['fetch_hours'] = $this->item_model->fetch_hours();
		$this->load->view('lender/listing/duplicate_item',$data);
	}

	public function store_duplicate_items(){
		$data = array();
		$data['oauth_uid'] = $this->session->userdata('oauth_uid');
        $data['random_itemno'] = rand(1000000, 9000000);
        $data['item_name']=$this->input->post('item_name');

        if($_FILES['item_image1']['name']=='' || $_FILES['item_image1']['size']== 0 )
		{
			$data['item_image1']=$this->input->post('old_item_image1');
		}else{
			$data['item_image1'] = $this->item_image1();
		}

		if($_FILES['item_image2']['name']=='' || $_FILES['item_image2']['size']== 0 )
		{
			$data['item_image2']=$this->input->post('old_item_image2');
		}else{
			$data['item_image2'] = $this->item_image2();
		}

		if($_FILES['item_image3']['name']=='' || $_FILES['item_image3']['size']== 0 )
		{
			$data['item_image3']=$this->input->post('old_item_image3');
		}else{
			$data['item_image3'] = $this->item_image3();
		}

		if($_FILES['item_image4']['name']=='' || $_FILES['item_image4']['size']== 0 )
		{
			$data['item_image4']=$this->input->post('old_item_image4');
		}else{
			$data['item_image4'] = $this->item_image4();
		}

		if($_FILES['item_image5']['name']=='' || $_FILES['item_image5']['size']== 0 )
		{
			$data['item_image5']=$this->input->post('old_item_image5');
		}else{
			$data['item_image5'] = $this->item_image5();
		}
		
		$data['cat_id']=$this->input->post('cat_id');
		$data['subcat_id']=$this->input->post('subcat_id');
		$data['subtype_id']=$this->input->post('subtype_id');
		$data['item_tags']=$this->input->post('item_tags');
		$data['item_description']=$this->input->post('item_description');
		$data['item_specification']=$this->input->post('item_specification');
		$data['item_qty']=$this->input->post('item_qty');
		$data['item_oper_available']=$this->input->post('item_oper_available');
		$data['item_delivery']=$this->input->post('item_delivery');
		$data['item_current_price']=$this->input->post('item_current_price');
		$plan=$this->input->post('item_plans');
		$data['item_plans']=implode(',',array_filter($plan));
		$gov_iss_id=$this->input->post('gov_issued_ids');
		$data['gov_issued_ids']=implode(',',array_filter($gov_iss_id));
		$data['recom_byother_lender']=$this->input->post('recom_byother_lender');
		$rules_renting=$this->input->post('rules_of_renting');
		$data['rules_of_renting']=implode('$',array_filter($rules_renting));
		$data['item_offer']=$this->input->post('item_offer');
		date_default_timezone_set('Asia/Calcutta');
        $data['item_create_date'] = date('Y-m-d h-i-s');


		$data2 = array();
		$data2['random_itemno'] = $data['random_itemno'];
		$data2['hr_price']=$this->input->post('hr_price');
		$data2['day_price']=$this->input->post('day_price');
		$data2['monthly_price']=$this->input->post('monthly_price');

		$hourly_disc=$this->input->post('hr_disc');
		$data2['hr_disc']=implode(',',array_filter($hourly_disc));
		$no_hr=$this->input->post('no_hr');
		$data2['no_hr']=implode(',',array_filter($no_hr));

		$monthly_disc=$this->input->post('month_disc');
		$data2['month_disc']=implode(',',array_filter($monthly_disc));
		$no_month=$this->input->post('no_month');
		$data2['no_month']=implode(',',array_filter($no_month));

		$data2['week_disc']=$this->input->post('week_disc');
		$data2['min_day_book']=$this->input->post('min_day_book');
		$data2['max_day_book']=$this->input->post('max_day_book');
		

		$data3 = array();
		$data3['random_itemno'] = $data['random_itemno'];
		$data3['country_id']=$this->input->post('country_id');
		$data3['state_id']=$this->input->post('state_id');
		$data3['city_id']=$this->input->post('city_id');
		$data3['pincode']=$this->input->post('pincode');
		$data3['address1']=$this->input->post('address1');
		$data3['address2']=$this->input->post('address2');

		$this->item_model->store_items($data);
		$this->item_model->store_items_price($data2);
		$this->item_model->store_items_address($data3);
		redirect('Create-Item'); 
		
	}

	public function view_edit_item($random_itemno){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');
			
		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Edit Item | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
		$data['random_itemno'] = $random_itemno;
     	
		$data['fetch_country'] = $this->dashboard_model->get_country();
		$data['fetch_category'] = $this->item_model->get_category();
		$data['fetch_create_items'] = $this->item_model->fetch_create_items($random_itemno);
		$data['fetch_subcategory'] = $this->item_model->fetch_subcategory($data['fetch_create_items']->cat_id);
		$data['fetch_subcategory_type'] = $this->item_model->fetch_subcategory_type($data['fetch_create_items']->subcat_id);
		$data['fetch_item_oper_available'] = $this->item_model->fetch_item_oper_available();
		$data['fetch_available_for_delivery'] = $this->item_model->fetch_available_for_delivery();
		$data['fetch_item_state'] = $this->item_model->fetch_item_state($data['fetch_create_items']->country_id);
		$data['fetch_item_city'] = $this->item_model->fetch_item_city($data['fetch_create_items']->state_id);
		$data['fetch_month'] = $this->item_model->fetch_month();
		$data['fetch_hours'] = $this->item_model->fetch_hours();
		$this->load->view('lender/listing/edit_items',$data);
	}

	public function edit_items(){
		$random_itemno = $this->input->post('random_itemno');
		$data = array();
		$data['oauth_uid'] = $this->session->userdata('oauth_uid');
        $data['item_name']=$this->input->post('item_name');

        if($_FILES['item_image1']['name']=='' || $_FILES['item_image1']['size']== 0 )
		{
			$data['item_image1']=$this->input->post('old_item_image1');
		}else{
			$data['item_image1'] = $this->item_image1();
		}

		if($_FILES['item_image2']['name']=='' || $_FILES['item_image2']['size']== 0 )
		{
			$data['item_image2']=$this->input->post('old_item_image2');
		}else{
			$data['item_image2'] = $this->item_image2();
		}

		if($_FILES['item_image3']['name']=='' || $_FILES['item_image3']['size']== 0 )
		{
			$data['item_image3']=$this->input->post('old_item_image3');
		}else{
			$data['item_image3'] = $this->item_image3();
		}

		if($_FILES['item_image4']['name']=='' || $_FILES['item_image4']['size']== 0 )
		{
			$data['item_image4']=$this->input->post('old_item_image4');
		}else{
			$data['item_image4'] = $this->item_image4();
		}

		if($_FILES['item_image5']['name']=='' || $_FILES['item_image5']['size']== 0 )
		{
			$data['item_image5']=$this->input->post('old_item_image5');
		}else{
			$data['item_image5'] = $this->item_image5();
		}
		
		$data['cat_id']=$this->input->post('cat_id');
		$data['subcat_id']=$this->input->post('subcat_id');
		$data['subtype_id']=$this->input->post('subtype_id');
		$data['item_tags']=$this->input->post('item_tags');
		$data['item_description']=$this->input->post('item_description');
		$data['item_specification']=$this->input->post('item_specification');
		$data['item_qty']=$this->input->post('item_qty');
		$data['item_oper_available']=$this->input->post('item_oper_available');
		$data['item_delivery']=$this->input->post('item_delivery');
		$data['item_current_price']=$this->input->post('item_current_price');
		$plan=$this->input->post('item_plans');
		$data['item_plans']=implode(',',array_filter($plan));
		$gov_iss_id=$this->input->post('gov_issued_ids');
		$data['gov_issued_ids']=implode(',',array_filter($gov_iss_id));
		$data['recom_byother_lender']=$this->input->post('recom_byother_lender');
		$rules_renting=$this->input->post('rules_of_renting');
		$data['rules_of_renting']=implode('$',array_filter($rules_renting));
		$data['item_offer']=$this->input->post('item_offer');
		date_default_timezone_set('Asia/Calcutta');
        $data['item_create_date'] = date('Y-m-d h-i-s');


		$data2 = array();
		$pr_ex = explode(',', $data['item_plans']);

		if($pr_ex[0]=='1' || $pr_ex[1]=='1' || $pr_ex[2]=='1'){
			$data2['hr_price']=$this->input->post('hr_price');
			$hourly_disc=$this->input->post('hr_disc');
			$data2['hr_disc']=implode(',',array_filter($hourly_disc));
			$no_hr=$this->input->post('no_hr');
			$data2['no_hr']=implode(',',array_filter($no_hr));
		}
		else{
			$data2['hr_price']='';
			$data2['hr_disc']='';
			$data2['no_hr']='';
		}
		

		if($pr_ex[0]=='2' || $pr_ex[1]=='2' || $pr_ex[2]=='2'){
			$data2['monthly_price']=$this->input->post('monthly_price');
			$monthly_disc=$this->input->post('month_disc');
			$data2['month_disc']=implode(',',array_filter($monthly_disc));
			$no_month=$this->input->post('no_month');
			$data2['no_month']=implode(',',array_filter($no_month));
		}
		else{
			$data2['monthly_price']='';
			$data2['month_disc']='';
			$data2['no_month']='';
		}
		

		if($pr_ex[0]=='3' || $pr_ex[1]=='3' || $pr_ex[2]=='3'){
			$data2['day_price']=$this->input->post('day_price');
			$data2['week_disc']=$this->input->post('week_disc');
			$data2['min_day_book']=$this->input->post('min_day_book');
			$data2['max_day_book']=$this->input->post('max_day_book');	
		}
		else{
			$data2['day_price']='';
			$data2['week_disc']='';
			$data2['min_day_book']='';
			$data2['max_day_book']='';
		}
		
		

		$data3 = array();
		$data3['country_id']=$this->input->post('country_id');
		$data3['state_id']=$this->input->post('state_id');
		$data3['city_id']=$this->input->post('city_id');
		$data3['pincode']=$this->input->post('pincode');
		$data3['address1']=$this->input->post('address1');
		$data3['address2']=$this->input->post('address2');

		$this->item_model->update_items($random_itemno,$data);
		$this->item_model->update_items_price($random_itemno,$data2);
		$this->item_model->update_items_address($random_itemno,$data3);
		redirect('my-items'); 
		
	}

	
}

?>