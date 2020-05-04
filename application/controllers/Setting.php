<?php class Setting extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('login')) {
			redirect('login');
		}
		$this->load->model('Message_model', 'message');
	}

	public function index()
	{
		$title_page = 'Admin - Setting';
    $breadcrumb = [
      'title' => 'Setting',
      'description' => '',
      'breadcrumbs' => [],
      'active' => 'Setting'
    ];
    $logo = $this->db->get_where('content', ['title' => 'logo'])->row_array();
    $banner = $this->db->get_where('content', ['title' => 'banner'])->row_array();
    $about = $this->db->get_where('content', ['title' => 'tentang'])->row_array();
    $data = [
    	'logo' => $logo,
    	'banner' => $banner,
    	'about' => $about,
    ];

    $this->load->view('templates/header', ['title' => $title_page]);
    $this->load->view('templates/breadcrumb', ['breadcrumb' => $breadcrumb]);
    $this->load->view('setting/index', ['setting' => $data]);
    $this->load->view('templates/footer');
	}

	public function update()
	{
		$oldlogo     = $this->db->get_where('content', ['title' => 'logo'])->row_array();
		$logo        = $oldlogo['image'];
		$title       = htmlspecialchars($this->input->post('title'));
		$description = htmlspecialchars($this->input->post('description'));

		if ($_FILES['logo']['name'] != '') {
			$filename    = $_FILES['logo']['name'];
			$from        = $_FILES['logo']['tmp_name'];
			$file_eks    = explode('.', $filename)[count(explode('.', $filename)) - 1];
			$file_allows = ['png', 'jpg', 'gif'];

			if (!in_array($file_eks, $file_allows)) {
				$this->message->alert('danger', 'Ekstensi file ' . $file_eks . 'tidak diperbolehkan.'); 
				redirect($this->agent->referrer());
			}

			$logo = './assets/data/content/' . strtolower(str_replace(' ', '-', $title)) . uniqid() . '.' . $file_eks;
			unlink($_SERVER['DOCUMENT_ROOT'].$logo_data['image']);
			move_uploaded_file($from, $logo);
		}

		$this->db->where('title', 'banner')->update('content', [
			'text' => $title
		]);

		$this->db->where('title', 'tentang')->update('content', [
			'text' => $description
		]);

		$this->db->where('title', 'logo')->update('content', [
			'image' => $logo
		]);

		$this->message->alert('success', 'Data berhasil diupdate.'); 
		redirect($this->agent->referrer());
	}
}