<?php class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('login')) {
      redirect('login');
    }
    $this->load->model('Message_model', 'message');
    $this->load->model('Role_model', 'role');
  }

  public function list()
  {
    $title_page = 'Admin - User list';
    $breadcrumb = [
      'title' => 'User list',
      'description' => '',
      'breadcrumbs' => [],
      'active' => 'User'
    ];
    $user = $this->user->orderBy('id', 'desc')->getAll();

    $this->load->view('templates/header', ['title' => $title_page]);
    $this->load->view('templates/breadcrumb', ['breadcrumb' => $breadcrumb]);
    $this->load->view('user/list', ['user' => $user]);
    $this->load->view('templates/footer');
  }

  public function create()
  {
    $username = htmlspecialchars($this->input->post('username'));
    $role = $this->input->post('role');
    $password = $this->input->post('password');
    $password_confirm = $this->input->post('password_confirm');

    if ($password != $password_confirm) {
      $this->message->alert('danger', 'Maaf password tidak valid.');
      redirect($this->agent->referrer());
    }

    $this->user->insert([
      'username' => $username,
      'role' => $role,
      'password' => password_hash($password, PASSWORD_BCRYPT),
      'profile_picture' => ''
    ]);

    $this->message->alert('success', 'User berhasil ditambah.');
    redirect($this->agent->referrer());
  }

  public function update($id)
  {
    $username = htmlspecialchars($this->input->post('username'));
    $role = $this->input->post('role');

    $this->user->where('id', $id)->update([
      'username' => $username,
      'role' => $role
    ]);

    $this->message->alert('success', 'User berhasil diupdate.');
    redirect($this->agent->referrer());
  }

  // detail profile user
  public function profile()
  {
    $user = $this->user->userLoggin();
    $title_page = 'Admin - User edit';
    $breadcrumb = [
      'title' => 'Profile',
      'description' => '',
      'breadcrumbs' => [
        ['link' => base_url('user/list'), 'title' => 'User']
      ],
      'active' => 'Profile'
    ];
    $role = $this->role->orderBy('id', 'desc')->getAll();

    $this->load->view('templates/header', ['title' => $title_page]);
    $this->load->view('templates/breadcrumb', ['breadcrumb' => $breadcrumb]);
    $this->load->view('user/edit', ['user' => $user, 'role' => $role]);
    $this->load->view('templates/footer');
  }

  public function profile_update()
  {
    $username = htmlspecialchars($this->input->post('username'));
    $role = $this->input->post('role');
    $password = $this->input->post('password');
    $password_confirm = $this->input->post('password_confirm');
    $id = $this->session->userdata('login');

    if ($password != '') {
      if ($password != $password_confirm) {
        $this->message->alert('danger', 'Password tidak valid.');
        redirect($this->agent->referrer());
      }

      $this->user->where('id', $id)->update([
        'username' => $username,
        'role' => $role,
        'password' => password_hash($password, PASSWORD_BCRYPT)
      ]);
      $this->message->alert('success', 'Profile berhasil diupdate.');
      redirect($this->agent->referrer());
    }

    $this->update($id);
  }
}