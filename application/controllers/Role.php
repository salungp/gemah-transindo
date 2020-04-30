<?php class Role extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('login')) {
      redirect('login');
    }
    $this->load->model('Role_model', 'role');
    $this->load->model('Message_model', 'message');
  }

  public function list()
  {
    $title_page = 'CI AdminLTE - User list';
    $breadcrumb = [
      'title' => 'Role list',
      'description' => '',
      'breadcrumbs' => [],
      'active' => 'User'
    ];
    $role = $this->role->orderBy('id', 'desc')->getAll();

    $this->load->view('templates/header', ['title' => $title_page]);
    $this->load->view('templates/breadcrumb', ['breadcrumb' => $breadcrumb]);
    $this->load->view('role/list', ['role' => $role]);
    $this->load->view('templates/footer');
  }

  public function delete($id)
  {
    $role = $this->role->where('id', $id)->getSingle();
    if ($role)
    {
      $this->role->delete('id', $id);
      $this->message->alert('success', 'Role berhasil dihapus.');
      redirect($this->agent->referrer());
    } else {
      show_404();
    }
  }

  public function create()
  {
    $title = htmlspecialchars($this->input->post('title'));
    $description = htmlspecialchars($this->input->post('description'));

    $this->role->insert([
      'title' => strtolower($title),
      'description' => $description
    ]);

    $this->message->alert('success', 'Role berhasil ditambah.');
    redirect($this->agent->referrer());
  }

  public function update($id)
  {
    $title = htmlspecialchars($this->input->post('title'));
    $description = htmlspecialchars($this->input->post('description'));

    $this->role->where('id', $id)->update([
      'title' => strtolower($title),
      'description' => $description
    ]);

    $this->message->alert('success', 'Role berhasil diupdate.');
    redirect($this->agent->referrer());
  }
}