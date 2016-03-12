<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {


  public function create_user($post)
  {
    $query = "INSERT INTO users (first_name, last_name, employer, email, password, created_at, updated_at) VALUES (?,?,?,?,?,NOW(),NOW())";
    $values = array(
      $post['first_name'],
      $post['last_name'],
      $post['employer'],
      $post['email'],
      password_hash($post['password'], PASSWORD_BCRYPT)
    );
    return $this->db->query($query, $values);
  }

  public function verify_email($email)
  {
    $query = "SELECT * FROM users WHERE email = ?";
    $value = array($email);
    return $this->db->query($query, $value)->row_array();
  }

  public function validate($post)
  {
    $this->form_validation->set_rules("first_name", "first name", "required");
    $this->form_validation->set_rules("last_name", "last name", "required");
    $this->form_validation->set_rules("email", "email", "required|valid_email|is_unique[users.email]");
    $this->form_validation->set_rules("password", "password", "required|matches[confirm_password]");
    $this->form_validation->set_rules("confirm_password", "confirm password", "required");

    return $this->form_validation->run();
  }
}

