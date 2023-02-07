<?php

class LoginModel extends Model
{
  private $username;
  private $password;
  public function loadParams($username, $password)
  {
    $this->username = $username;
    $this->password = $password;
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
    return true;
  }
  public function executeQuery()
  {
    if ($this->validate() == false) {
      return;
    }
    $query = 'SELECT * FROM users WHERE username = ?';
    $statement = $this->dbInstance->prepare($query);
    $statement->bind_param('s', $this->username);
    $statement->execute();
    $result = $statement->get_result();
    $row = $result->fetch_array();

    if ($row) {
      if (password_verify($this->password, $row[2])) {
        $this->result['message'] = 'OK';
        $this->result['id'] = $row[0];
        $this->result['username'] = $row[1];
        $this->result['role'] = $row[3];
      } else {
        $this->result['message'] = 'The password provided is incorrect.';
      }
    } else {
      $this->result['message'] = 'Could not find a user with the provided username.';
    }
  }
}
