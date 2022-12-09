<?php
class User {

  public $username;
  public $password;
  public $firstName;
  public $lastName;

//   username
  public function setUsername($username) {
    $this->username = $username;
  }
  public function getUsername() {
    return $this->username;
  }
  
// password
  function setPassword($password) {
    $this->password = $password;
  }
  function getPassword() {
    return $this->password;
  }

//N
  function setFirstName($firstName) {
    $this->firstName = $firstName;
  }
  function getFirstName() {
    return $this->firstName;
  }

//lastname
  function setLastName($lastName) {
    $this->lastName = $lastName;
  }
  function getLastName() {
    return $this->lastName;
  }
}
?>