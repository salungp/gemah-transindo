<?php class Content extends CI_Controller
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
		$title_page = 'Admin - Content list';
    $breadcrumb = [
      'title' => 'Content list',
      'description' => '',
      'breadcrumbs' => [],
      'active' => 'Content'
    ];
    $content = $this->db->order_by('id', 'desc')->get('content')->result_array();

    $this->load->view('templates/header', ['title' => $title_page]);
    $this->load->view('templates/breadcrumb', ['breadcrumb' => $breadcrumb]);
    $this->load->view('content/index', ['content' => $content]);
    $this->load->view('templates/footer');
	}

	public function create()
	{
		$title = htmlspecialchars($this->input->post('title'));
		$slug = strtolower(str_replace(' ', '-', $title));
		$text = $this->input->post('text');
		$parent = htmlspecialchars($this->input->post('parent'));
		$image = '';
		$author = $this->session->userdata('login');

		if ($_FILES['image']['name'] != '') {
			$file_name = $_FILES['image']['name'];
			$file_from = $_FILES['image']['tmp_name'];
			$eks = explode('.', $file_name)[count(explode('.', $file_name))-1];
			$allow_ekse = ['jpg', 'png', 'gif', 'ico'];

			if (!in_array($eks, $allow_ekse)) {
				$this->message->alert('danger', 'Maaf ekstensi selain gambar tidak diperbolehkan');
				redirect($this->agent->referrer());
			}

			$image = './assets/data/content/'.$slug.uniqid().'.'.$eks;

			move_uploaded_file($file_from, $image);
		}

		$this->db->insert('content', [
			'title' => $title,
			'slug' => $slug,
			'text' => $text,
			'parent' => $parent,
			'image' => $image,
			'author' => $author,
		]);

		$this->message->alert('success', 'Data berhasil ditambah.');
		redirect($this->agent->referrer());
	}

	public function update($id)
	{
		$title = htmlspecialchars($this->input->post('title'));
		$slug = strtolower(str_replace(' ', '-', $title));
		$text = $this->input->post('text');
		$parent = htmlspecialchars($this->input->post('parent'));
		$image = '';
		$author = $this->session->userdata('login');

		if ($_FILES['image']['name'] != '') {
			$file_name = $_FILES['image']['name'];
			$file_from = $_FILES['image']['tmp_name'];
			$eks = explode('.', $file_name)[count(explode('.', $file_name))-1];
			$allow_ekse = ['jpg', 'png', 'gif', 'ico'];

			if (!in_array($eks, $allow_ekse)) {
				$this->message->alert('danger', 'Maaf ekstensi selain gambar tidak diperbolehkan');
				redirect($this->agent->referrer());
			}

			$image = './assets/data/content/'.$slug.uniqid().'.'.$eks;

			move_uploaded_file($file_from, $image);
		}

		$this->db->where('id', $id)->update('content', [
			'title' => $title,
			'slug' => $slug,
			'text' => $text,
			'parent' => $parent,
			'image' => $image,
			'author' => $author,
		]);

		$this->message->alert('success', 'Data berhasil diubah.');
		redirect($this->agent->referrer());
	}

	public function search()
	{
		$key = $this->input->get('q');
		$content = $this->db->like('title', $key)->order_by('id', 'desc')->get('content')->result_array();
		$title_page = 'Admin - Content list';
    $breadcrumb = [
      'title' => 'Content list',
      'description' => '',
      'breadcrumbs' => [],
      'active' => 'Content'
    ];

    $this->load->view('templates/header', ['title' => $title_page]);
    $this->load->view('templates/breadcrumb', ['breadcrumb' => $breadcrumb]);
    $this->load->view('content/index', ['content' => $content]);
    $this->load->view('templates/footer');
	}

	public function delete($id)
	{
		$this->db->delete('content', ['id' => $id]);
		$this->message->alert('success', 'Data berhasil dihapus.');
		redirect($this->agent->referrer());
	}
}