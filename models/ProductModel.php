<?php

class ProductModel {
  private $id;
  private $name;

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getName() {
    return $this->name;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function __toString() {
    return json_encode([
      'id' => $this->id,
      'name' => $this->name
    ]);
  }

  public function equals($other) {
    if ($other instanceof ProductModel) {
      return $this->id === $other->id && $this->name === $other->name;
    }
    return false;
  }
}