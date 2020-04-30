<?php class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    // Check if user has access
    if (!$this->session->has_userdata('login'))
    {
      redirect('login');
    }
  }

  public function index()
  {
    // data
    $visitor = count($this->db->get('visitor')->result_array());
    $user = count($this->db->get('user')->result_array());
    $content = count($this->db->get('content')->result_array());

    $data = [
      'visitor' => $visitor,
      'user' => $user,
      'content' => $content
    ];

    $title_page = 'CI AdminLTE - Dashboard';
    $breadcrumb = [
      'title' => 'Dashboard',
      'description' => '',
      'breadcrumbs' => [],
      'active' => 'Home'
    ];

    $this->load->view('templates/header', ['title' => $title_page]);
    $this->load->view('templates/breadcrumb', ['breadcrumb' => $breadcrumb]);
    $this->load->view('admin/index', $data);
    $this->load->view('templates/footer');
  }
}