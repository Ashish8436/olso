<?php 

class User_details extends CI_Controller{

	function __construct(){
		parent:: __construct();
		$this->load->model('User_details_model','user_details');
		$this->load->model('Dashboard_model','dashboard_model');
	}

	public function view_edit_profile(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');

		$otu_id = $this->session->userdata('oauth_uid');
		$data=array();
		$user['user_details'] = $this->user_details->get_users_details($otu_id);
		$user['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$data['title']='Edit Profile | OLSO';
		$data['header']=$this->load->view('lender/pages/header',$user,true);
		$data['footer']=$this->load->view('lender/pages/footer','',true);
       
		
		$data['user_details'] = $this->user_details->get_users_details($otu_id);
		$find_lan_tag = "select * from users where oauth_uid='$otu_id'";
	  	$find_lan_tag1 = $this->db->query($find_lan_tag)->result();
	  	
		foreach ($find_lan_tag1 as $b) {
  			$elements = explode(',', $b->language_tag);
		    foreach($elements as $element)
		    {
				$aaa[]= $element;
		    }
  		}
  		$string = rtrim(implode(',', $aaa), ',');
  		if($string==''){
  			$string=0;
  		}
  		$fetch_language = "SELECT * FROM language WHERE lan_id IN ($string)";	
	  	$data['fetch_user_lang'] = $this->db->query($fetch_language)->result();
	  	$data['get_country'] = $this->dashboard_model->get_country();
		$data['get_timezones'] = $this->dashboard_model->get_timezones();
		$data['get_language'] = $this->user_details->get_language();
		$data['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$this->load->view('lender/edit_profile',$data);
	}

	public function view_edit_photo(){
		if(! $this->session->userdata('oauth_uid'))
			return redirect('Welcome');
		
		$data=array();
		$data['title']='Edit Profile Photo | OLSO';
		
        $log_aut['authURL'] =  $this->facebook->login_url();
        $log_aut['loginURL'] = $this->google->loginURL();  
        
        // Load login & profile view
		$data['sign_up']=$this->load->view('pages/sign_up',$log_aut,true);
		
		$otu_id = $this->session->userdata('oauth_uid');
		$data['user_details'] = $this->user_details->get_users_details($otu_id);
		$data['fetch_id_verification'] = $this->user_details->fetch_id_verification($otu_id);
		$this->load->view('edit_photo',$data);
	}

	public function user_profile_photo(){
		$config['upload_path']          = './uploads/profile/';
        $config['allowed_types']        = 'jpg|jpeg|png|JPG|JPEG|PNG';
        $config['max_size']             = 0;
       // $config['max_width']            = 2000;
       // $config['max_height']           = 1111;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('picture'))
                {
                		//echo "<pre>";
                        $data = $this->upload->data();
                        //print_r($data);
                        //exit();
                        $image_path = "uploads/profile/$data[file_name]";
                        return $image_path;
                }
                else
                {
                        $error = $this->upload->display_errors();
                        print_r($error);
                }
	}

	public function store_profile_info(){

		$oauth_uid = $this->session->userdata('oauth_uid');
		$data = array();
		$data['first_name']=$this->input->post('first_name');
		$data['last_name']=$this->input->post('last_name');
		$data['gender']=$this->input->post('gender');
		$data['bob']=$this->input->post('bob');
		$data['country_id']=$this->input->post('country_id');
		$data['mobile_no']=$this->input->post('mobile_no');
		$data['city']=$this->input->post('city');
		$language=$this->input->post('language');
		$data['language_tag']=implode(',',$language);
		$data['live']=$this->input->post('live');
		$data['bio']=$this->input->post('bio');
		$data['school']=$this->input->post('school');
		$data['work']=$this->input->post('work');
		$data['timezone']=$this->input->post('timezone');
		$data['gst_no']=$this->input->post('gst_no');
		$data['picture']=$this->user_profile_photo();

		if($this->user_details->store_profile_info($oauth_uid,$data)){
			$this->session->set_flashdata('feedback','Information Update Successfully');
			$this->session->set_flashdata('feedback_class','alert-success');
		}else{
			$this->session->set_flashdata('feedback','Information failed to Update, please try again');
			$this->session->set_flashdata('feedback_class','alert-danger');
		}
		return redirect('Edit-Profile');
		
	}

}

?>