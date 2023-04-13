<?php

abstract class Repository {
  protected mysqli $conn;

  public function __construct() {
    $this->conn = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    return $this->conn->connect_errno ? false : true;
  }

  abstract function get();
  abstract function save();
  //...
}