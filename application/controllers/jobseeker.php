
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobseeker extends CI_Controller {

	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session'));
		$this->load->helper(array('url'));
		$this->load->model('user_model');
	}

	public function index($data=0)
	{	
		if(isset($_SESSION['user_id']) && isset($_SESSION['username'])){
				$this->load->view('templates/header');
				$this->load->view('jobseeker/home', $data);
				$this->load->view('templates/footer');
		}
		else {
				$this->load->view('templates/header');
				$this->load->view('jobseeker/login');
				$this->load->view('templates/footer');
		}
		
	}


	public function register()
	{	// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		//$this->form_validation->set_rules('username', 'Username', 'trim|required|alpha_numeric|min_length[4]|is_unique[users.username]', array('is_unique' => 'This username already exists. Please choose another one.'));
		$this->form_validation->set_message('is_unique', 'The %s is already taken. Try a different one');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[6]|matches[password]');
		
		if ($this->form_validation->run() === false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('templates/header');
			$this->load->view('jobseeker/register', $data);
			$this->load->view('templates/footer');
			
		} else {
			
			// set variables from the form
			//$username = $this->input->post('username');
			$email    = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->user_model->create_user($email, $password)) {
				
				// user creation ok
				$this->load->view('templates/header');
				$this->load->view('jobseeker/login', $data);
				$this->load->view('templates/footer');
				
			} else {
				
				// user creation failed, this should never happen
				$data->error = 'There was a problem creating your new account. Please try again.';
				
				// send error to the view
				$this->load->view('templates/header');
				$this->load->view('jobseeker/register', $data);
				$this->load->view('templates/footer');
				
			}
			
		}

		
	}

	public function login() {
		
		// create the data object
		$data = new stdClass();
		
		// load form helper and validation library
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// set validation rules
		$this->form_validation->set_message('is_unique', 'The %s is already taken');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		   
		if ($this->form_validation->run() == false) {
			
			// validation not ok, send validation errors to the view
			$this->load->view('templates/header');
			$this->load->view('jobseeker/login');
			$this->load->view('templates/footer');
			
		} else {
			
			// set variables from the form
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			
			if ($this->user_model->resolve_user_login($email, $password)) {
				
				$user_id = $this->user_model->get_user_id_from_username($email);
				$user    = $this->user_model->get_user($user_id);
				
				// set session user datas
				$_SESSION['user_id']      = (int)$user->login_id;
				$_SESSION['username']     = (string)$user->email;
				$_SESSION['logged_in']    = (bool)true;
				//$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
				//$_SESSION['is_admin']     = (bool)$user->is_admin;
				
				// user login ok
				//$this->index($data);
				redirect('jobseeker');
				
			} else {
				
				// login failed
				$data->error = 'Wrong username or password.';
				
				// send error to the view
				$this->load->view('templates/header');
				$this->load->view('jobseeker/login', $data);
				$this->load->view('templates/footer');
				
			}
			
		}
		
	}

	/**
	 * logout function.
	 * 
	 * @access public
	 * @return void
	 */
	public function logout() {
		$this->load->library('form_validation');
		// create the data object
		$data = new stdClass();
		
		if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
			
			// remove session datas
			foreach ($_SESSION as $key => $value) {
				unset($_SESSION[$key]);
			}

			$data->error = 'Successfully Loged out. Log back in!';
			// user logout ok
			$this->load->view('templates/header');
			$this->load->view('jobseeker/login', $data);
			$this->load->view('templates/footer');
			
		} else {
			
			// there user was not logged in, we cannot logged him out,
			// redirect him to site root
			redirect('jobseeker/login');
			
		}
		
	}
}

