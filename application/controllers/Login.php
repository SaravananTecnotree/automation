<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('User_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	public function do_login()
	{
		// Load the database library
		$this->load->database();

		// Get the user input
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		// Query the database for the user
		$query = $this->db->get_where('users', array('username' => $username, 'password' => $password));

		// Check if the user exists
		if ($query->num_rows() > 0) {
			// Login success, redirect to the index page
			redirect('IndexController');
		} else {
			// Login failed, show an error message
			$this->session->set_flashdata('error', 'Invalid username or password');
			redirect('login');
		}
	}

	public function logout()
	{
		//$this->session->unset_userdata('error');
		$this->session->sess_destroy();
		redirect('login');
	}
}
