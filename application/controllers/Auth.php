<?php class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Message_model', 'message');
  }

  // show login page
  public function index()
  {
    // set title meta
    $title_page = 'Admin - Login';
    $this->load->view('auth/login', ['title' => $title_page]);
  }

  public function authenticate()
  {
    // get request data
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $user = $this->user->where('username', $username)->getSingle();

    // check if username available
    if ($user) {
      if (password_verify($password, $user['password'])) {
        $this->session->set_userdata([
          'login' => $user['id'],
          'username' => $username
        ]);
        redirect('admin');
      } else {
        $this->message->alert('danger', 'Maaf password salah.');
        redirect($this->agent->referrer());
      }
    } else {
      // send error message
      $this->message->alert('danger', 'Maaf username tidak terdaftar.');
      redirect($this->agent->referrer());
    }
  }

  public function logout()
  {
    // clear user session
    $this->session->unset_userdata(['login', 'id']);
    redirect('login');
  }
}