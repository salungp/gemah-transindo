<?php trait Crud
{
  public $table;

  public function __construct()
  {
    parent::__construct();
  }

  public function setTable($table)
  {
    $this->table = $table;
  }

  public function like($key, $val)
  {
    $this->db->like($key, $val);
    return $this;
  }

  public function delete($key, $val)
  {
    $this->db->delete($this->table, [$key => $val]);
  }

  public function insert($data)
  {
    $this->db->insert($this->table, $data);
  }

  public function update($data)
  {
    $this->db->update($this->table, $data);
  }

  public function where($key, $val)
  {
    $this->db->where($key, $val);
    return $this;
  }

  public function orderBy($key, $val)
  {
    $this->db->order_by($key, $val);
    return $this;
  }

  public function get()
  {
    return $this->db->get($this->table);
  }

  public function getSingle()
  {
    return $this->get()->row_array();
  }

  public function getAll()
  {
    return $this->get()->result_array();
  }
}