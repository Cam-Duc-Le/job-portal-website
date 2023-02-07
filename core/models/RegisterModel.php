<?php

class RegisterModel extends Model
{
  private $username;
  private $password;
  private $retypePassword;
  private $role;

  public function loadParams($username, $password, $retypePassword, $role)
  {
    $this->username = $username;
    $this->password = $password;
    $this->retypePassword = $retypePassword;
    $this->role = $role;
  }
  private function validate()
  {
    if ($this->username == '') {
      $this->result['message'] = 'The username cannot be empty.';
      return false;
    }
    if ($this->password == '') {
      $this->result['message'] = 'The password cannot be empty.';
      return false;
    }
    if ($this->retypePassword == '') {
      $this->result['message'] = 'The retyped password cannot be empty.';
      return false;
    }
    if ($this->password != $this->retypePassword) {
      $this->result['message'] = 'The passwords do not match.';
      return false;
    }
    return true;
  }
  public function executeQuery()
  {
    if ($this->validate() == false) {
      return;
    }

    // Check if username already exists
    $query = 'SELECT username FROM users WHERE username = ?';
    $statement = $this->dbInstance->prepare($query);
    $statement->bind_param('s', $this->username);
    $statement->execute();
    $result = $statement->get_result();
    $row = $result->fetch_array();
    if ($row) {
      $this->result['message'] = 'This username is already taken.';
    } else {
      // Add new user into table users
      $query = 'INSERT INTO users (username, password, role) VALUES (?, ?, ?);';
      $statement = $this->dbInstance->prepare($query);
      $this->password = password_hash($this->password, PASSWORD_DEFAULT);
      $statement->bind_param('sss', $this->username, $this->password, $this->role);
      $statement->execute();

      $query = 'SELECT * FROM users WHERE username = ?';
      $statement = $this->dbInstance->prepare($query);
      $statement->bind_param('s', $this->username);
      $statement->execute();
      $result = $statement->get_result();
      $row = $result->fetch_array();
      if ($row) {
        $this->result['message'] = 'OK';
        $this->result['id'] = $row[0];
        $this->result['username'] = $row[1];
        $this->result['role'] = $row[3];
      } else {
        $this->result['message'] = 'Something went wrong. Please try again later.';
      }
    }
  }
}
