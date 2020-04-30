<?php class Visitor extends CI_Controller
{
	public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('login')) {
      redirect('login');
    }
    $this->load->model('Message_model', 'message');
  }

  public function index()
  {
    $title_page = 'Admin - Visitor';
    $breadcrumb = [
      'title' => 'Visitor',
      'description' => '',
      'breadcrumbs' => [],
      'active' => 'Visitor'
    ];
    $visitor = $this->db->order_by('id', 'desc')->get('visitor')->result_array();

    $this->load->view('templates/header', ['title' => $title_page]);
    $this->load->view('templates/breadcrumb', ['breadcrumb' => $breadcrumb]);
    $this->load->view('visitor/index', ['visitor' => $visitor]);
    $this->load->view('templates/footer');
  }

  public function delete($id)
  {
    $this->db->delete('visitor', ['id' => $id]);
    $this->message->alert('success', 'Visitor berhasil dihapus.');
    redirect($this->agent->referrer());
  }
}