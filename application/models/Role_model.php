<?php
class Role_model extends CI_Model
{
  use Crud;

  public function __construct()
  {
    parent::__construct();
    $this->setTable('user_role');
  }
}