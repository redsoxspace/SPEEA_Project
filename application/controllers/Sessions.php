<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sessions extends CI_Controller {

	//functions related to logging in process
	// inbetween function to prevent the register and log_in functions from looping together
	public function gatekeeper()
	{
		$this->load->view('header/header');
		$this->load->view('user/login');
	}

	//function for actually logging in
	public function log_in()
	{
		//load the model
		$this->load->model("User"); 

		// tell the model to verify that the email exists in the system
		$user = $this->User->verify_email($this->input->post('email'));

		// if email exists and password matches, log user in and create session data. If email doesnt' exist or password is invalid, display error.
		if ($user && password_verify($this->input->post('password'), $user['password']))
		{
			$user_info = array(
				'id' => $user['id'],
				'first_name' => $user['first_name'],
				'last_name' => $user['last_name'],
				'is_logged_in' => TRUE
			);
			// set userdata
			$this->session->set_userdata($user_info);

			// go to the store page
			redirect(base_url('shop'));
		}
		else
		{
		$this->session->set_flashdata("errors", "Please check that your email and password are correct.");
		redirect(base_url('login'));
		}

	}

	public function destroy()
	{
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}
}