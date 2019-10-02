<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_login extends CI_Controller{

	function __construct(){
        parent::__construct();
        
         // Load user model
       
        $this->load->model('user');
    }

	public function facebook_login(){
       	$_SESSION['url_to_go'] = $_SERVER['HTTP_REFERER'];
        $_SESSION['logoutURL'] = $this->facebook->logout_url();
        // Check if user is logged in
        if($this->facebook->is_authenticated()){
            // Get user facebook profile details
            $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,picture');

            // Preparing data for database insertion
            $userData['oauth_provider'] = 'facebook';
            $userData['oauth_uid']    = !empty($fbUser['id'])?$fbUser['id']:'';;
            $userData['first_name']    = !empty($fbUser['first_name'])?$fbUser['first_name']:'';
            $userData['last_name']    = !empty($fbUser['last_name'])?$fbUser['last_name']:'';
            $userData['email']        = !empty($fbUser['email'])?$fbUser['email']:'';
            
            $userData['picture']    = !empty($fbUser['picture']['data']['url'])?$fbUser['picture']['data']['url']:'';
            $userData['email_active'] = '1';
            // Insert or update user data
            $userID = $this->user->checkUser($userData);
            
            // Check user data insert or update status
            if(!empty($userID)){
                
                $data['oauth_uid'] =  $userData['oauth_uid'];
                $data['oauth_provider'] =  $userData['oauth_provider'];
                $data['email'] = $userData['email'];
                $data['first_name'] = $userData['first_name'];
                $data['last_name'] = $userData['last_name'];
                $data['picture'] = $userData['picture'];
               
                $data['userData'] = $userData;
                $this->session->set_userdata('userData', $userData);
                $this->session->set_userdata($data);

            }else{
               $data['userData'] = array();
            }
            
            // Get logout URL
            
            header("location: http://localhost/olso1/?social=true#_=_");
        }else{
           $data=array();
            $data['title']='OLSO: Buy. Sell. Rent.';
            $data['header']=$this->load->view('pages/header','',true);

            $log_aut['authURL'] =  $this->facebook->login_url();
            $log_aut['loginURL'] = $this->google->loginURL();  
            
            // Load login & profile view
            $data['sign_up']=$this->load->view('pages/sign_up',$log_aut,true);
            
            $this->load->view('master',$data);
        }
    }

    public function google_login(){

        if(!empty($this->session->userdata('oauth_uid'))){
            $_SESSION['url_to_go'] = $_SERVER['HTTP_REFERER'];
                // Redirect to profile page if the user already logged in
                if($this->session->userdata('loggedIn') == true){
                    redirect('Trust-Verification');
                }        
                
                if(isset($_GET['code'])){
                    
                    // Authenticate user with google
                    if($this->google->getAuthenticate()){
                        // Get user info from google
                        $gpInfo = $this->google->getUserInfo();
                        
                        // Preparing data for database insertion
                        $userData['oauth_uid']      = $this->session->userdata('oauth_uid');
                        $userData['social_oauth_provider'] = 'google';
                        $userData['social_oauth_uid']      = $gpInfo['id'];
                        $userData['social_first_name']     = $gpInfo['given_name'];
                        $userData['social_last_name']      = $gpInfo['family_name'];
                        $userData['social_email']          = $gpInfo['email'];
                        $userData['social_picture']        = !empty($gpInfo['picture'])?$gpInfo['picture']:'';
                        
                        // Insert or update user data to the database
                        $userID = $this->user->checkUser2($userData);

                        $data['social_oauth_uid'] = $userData['oauth_uid'];
                        $data['social_oauth_provider'] = $userData['oauth_provider'];
                        $data['social_email'] = $userData['email'];
                        $data['social_first_name'] = $userData['first_name'];
                        $data['social_last_name'] = $userData['last_name'];
                        $data['social_picture'] = $userData['picture'];
                        
                        // Redirect to profile page
                        //redirect('welcome');    
                        redirect('Trust-Verification');           
                    }
                }else{
                    redirect('Trust-Verification');
                }   
        }else{
          
        // Redirect to profile page if the user already logged in
        if($this->session->userdata('loggedIn') == true){
            redirect($_SESSION['url']);
        }        
        
        if(isset($_GET['code'])){
            
            // Authenticate user with google
            if($this->google->getAuthenticate()){
                // Get user info from google
                $gpInfo = $this->google->getUserInfo();
                
                // Preparing data for database insertion
                $userData['oauth_provider'] = 'google';
                $userData['oauth_uid']      = $gpInfo['id'];
                $userData['first_name']     = $gpInfo['given_name'];
                $userData['last_name']      = $gpInfo['family_name'];
                $userData['email']          = $gpInfo['email'];
                $userData['picture']        = !empty($gpInfo['picture'])?$gpInfo['picture']:'';
                $userData['email_active']   = '1';
                // Insert or update user data to the database
                $userID = $this->user->checkUser($userData);

                $data['oauth_uid'] = $userData['oauth_uid'];
                $data['oauth_provider'] = $userData['oauth_provider'];
                $data['email'] = $userData['email'];
                $data['first_name'] = $userData['first_name'];
                $data['last_name'] = $userData['last_name'];
                $data['picture'] = $userData['picture'];
                

                $this->session->set_userdata($data);
                
                // Redirect to profile page
                //redirect('welcome');    
                redirect($_SESSION['url']);           
            }
        }else{
            redirect($_SESSION['url']);
        }   
        }
        
    }
    
   
    
    public function logout(){
        // Reset OAuth access token
        $this->google->revokeToken();
        
        // Remove token and user data from the session
        $this->session->unset_userdata('loggedIn');
        $this->session->unset_userdata('userData');
        
        
        // Destroy entire session data
        $this->session->sess_destroy();
        
        // Redirect to login page
        redirect('Welcome');
    }

    public function facebook_logout() {
        // Remove local Facebook session
        $this->facebook->destroy_session();
        // Remove user data from session
        $this->session->unset_userdata('userData');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('first_name');
        $this->session->unset_userdata('last_name');
        $this->session->unset_userdata('picture');
        // Redirect to login page
        redirect('welcome');
    }

    public function user_register(){
        $_SESSION['url_to_go'] = $_SERVER['HTTP_REFERER'];
        $this->load->helper('string');
        $data=array();
        $data['oauth_provider'] = 'email';
        $this->load->helper('string');
        $data['oauth_uid'] = random_string();
        $data['first_name'] = $this->input->post('first_name');
        $data['last_name'] = $this->input->post('last_name');
        $data['email'] = $this->input->post('email');
        $data['password'] = md5($this->input->post('password'));
        date_default_timezone_set('Asia/Calcutta');
        $data['created'] = date('Y-m-d h-i-s');
        $data['email_active'] = '0';

        $this->load->library("phpmailer_library");
        $mail = $this->phpmailer_library->load();


        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com;';                  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'ashishedmart@gmail.com';                 // SMTP username
        $mail->Password = 'hsihsasahu';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('ashishsahu.n@gmail.com', 'OLSO');
        $mail->addReplyTo('info@example.com', 'OLSO');

        $mail->addAddress($this->input->post('email'));     // Add a recipient
       
       $mail->Subject = 'Confirm Your Registration';

       $mail->isHTML(true);

       $mailContent = "<h4>"."Dear Client Click the bellow link to activate your email id"."</h4>"." <p>"."http://localhost/olso/user-Login?id=".$data['oauth_uid']."</p>";
       $mail->Body = $mailContent;

       if(!$mail->send()){
        echo '<h1><center>No Internet Connection</center></h1>';
       }else{
        $this->user->user_register($data);
        $this->session->set_flashdata('success','Register Success Fully');
        redirect($_SESSION['url_to_go']);
       }
    }

    function register_email_exists()
    {
        $emailId= $this->input->post('user_email');
        $this->db->where('email', $emailId);
        $query = $this->db->get('users');
        if( $query->num_rows() > 0 ){
            echo "Email Already Exist";
        }
        else{
        }
        exit();
     }

     public function user_login(){
        $_SESSION['url_to_go'] = $_SERVER['HTTP_REFERER'];
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $u_detial = $this->user->get_user_detail($email);

        if($u_detial->email_active =="0"){
            $re = $_SESSION['url_to_go'];
            echo "<script>alert('First Confirm Your Email Id');</script>";
            echo "<script>window.open('$re','_self')</script>";
        }else if($password == $u_detial->password){
                $session_data['oauth_uid'] = $u_detial->oauth_uid;

                $this->session->set_userdata($session_data);
                redirect($_SESSION['url_to_go']);               
        }else{
            $re = $_SESSION['url_to_go'];
           echo "<script>alert('Incorect Email and Password');</script>";
           echo "<script>window.open('$re','_self')</script>";
            //redirect($_SESSION['url_to_go']);
        }
    }

     public function user_logout(){
        $this->session->unset_userdata('oauth_uid');
        return redirect('welcome');
    }


    public function facebook_login2(){
        
        // Check if user is logged in
        if($this->facebook->is_authenticated()){
            // Get user facebook profile details
            $fbUser = $this->facebook->request('get', '/me?fields=id,first_name,last_name,email,picture');

            // Preparing data for database insertion
            $userData['social_oauth_provider'] = 'facebook';
            $userData['oauth_uid']    = $this->session->userdata('oauth_uid');
            $userData['social_oauth_uid']    = !empty($fbUser['id'])?$fbUser['id']:'';;
            $userData['social_first_name']    = !empty($fbUser['first_name'])?$fbUser['first_name']:'';
            $userData['social_last_name']    = !empty($fbUser['last_name'])?$fbUser['last_name']:'';
            $userData['social_email']        = !empty($fbUser['email'])?$fbUser['email']:'';
            
            $userData['social_picture']    = !empty($fbUser['picture']['data']['url'])?$fbUser['picture']['data']['url']:'';
            
            // Insert or update user data
            $userID = $this->user->checkUser2($userData);
            
            // Check user data insert or update status
            if(!empty($userID)){
                
                $data['social_oauth_uid'] =  $userData['oauth_uid'];
                $data['social_oauth_provider'] =  $userData['oauth_provider'];
                $data['social_email'] = $userData['email'];
                $data['social_first_name'] = $userData['first_name'];
                $data['social_last_name'] = $userData['last_name'];
                $data['social_picture'] = $userData['picture'];
               
                $data['userData'] = $userData;
                

            }else{
               $data['userData'] = array();
            }
            
            // Get logout URL
            
            redirect('Trust-Verification');
        }else{
           $data=array();
            $data['title']='Trust and Verification | OLSO';
            
            $data['authURL2'] =  $this->facebook->login_url2();
            $data['loginURL2'] = $this->google->loginURL2();  
            
            // Load login & profile view
            $data['sign_up']=$this->load->view('pages/sign_up',$log_aut,true);
            
            $otu_id = $this->session->userdata('oauth_uid');
            $data['user_details'] = $this->user_details->get_users_details($otu_id);
            $this->load->view('trust_verification',$data);
        }
    }
    
}

?>