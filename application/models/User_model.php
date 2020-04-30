<?php require APPPATH . 'models/Crud.php';
class User_model extends CI_Model
{
  use Crud;
  public function __construct()
  {
    parent::__construct();
    $this->setTable('user');
  }

  public function role($id)
  {
    return $this->db->get_where('user_role', ['id' => $id])->row_array();
  }

  public function userLoggin()
  {
    $id = $this->session->userdata('login');
    $user = $this->where('id', $id)->getSingle();
    $role = $this->role($user['role']);
    array_push($user, ['access' => $role]);
    return $user;
  }
}