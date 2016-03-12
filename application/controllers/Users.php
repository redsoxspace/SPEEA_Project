<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	// functions related to registration process

	public function register()
	{
		$this->load->view('header/header');
		$this->load->view('user/register');
	}

	public function new_user()
	{
		// loads User model
		$this->load->model("User");

		// checks user input

		$this->load->library("form_validation");

		// tells the model to validate the user input

		$validation_result = $this->User->validate($this->input->post());

		// if the validation works, create user; otherwise, display the error

		if ($validation_result == TRUE)
		{
			// delegate to the model using the create_user method
			$this->User->create_user($this->input->post());

			//load the login page
			redirect(base_url('login')); 
		}

		else
		{
			//show error
			$this->session->set_flashdata("errors", validation_errors());

			//go back to the registration page
			redirect(base_url('register'));
		}

	}

}