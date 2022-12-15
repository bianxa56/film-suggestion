<?php
class User {

  public $firstName;
  public $lastName;
  public $email;
  public $password;

  //firstName
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

//   email
  public function setEmail($email) {
    $this->email = $email;
  }
  public function getEmail() {
    return $this->email;
  }
  
// password
  function setPassword($password) {
    $this->password = $password;
  }
  function getPassword() {
    return $this->password;
  }

}
?>