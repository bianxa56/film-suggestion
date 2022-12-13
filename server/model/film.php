<?php
class Film {

  public $name;
  public $genre;
  public $year;
  public $length;

  public function setName($name) {
    $this->name = $name;
  }
  public function getName() {
    return $this->name;
  }

  public function setGenre($genre) {
    $this->genre = $genre;
  }
  public function getGenre() {
    return $this->genre;
  }

  public function setYear($year) {
    $this->year = $year;
  }
  public function getYear() {
    return $this->year;
  }

  public function setLength($length) {
    $this->length = $length;
  }
  public function getLength() {
    return $this->length;
  }

}