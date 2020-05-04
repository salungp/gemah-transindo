<?php class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		// create visitor
		$this->db->insert('visitor', [
			'ip_address' => $_SERVER['REMOTE_ADDR'],
			'browser' => $_SERVER['HTTP_USER_AGENT']
		]);

		$armada = $this->db->order_by('text', 'desc')->get_where('content', ['title' => 'armada-item'])->result_array();
		$banner = $this->db->get_where('content', ['title' => 'banner'])->row_array();
		$banner_description = $this->db->get_where('content', ['title' => 'banner-description'])->row_array();
		$layanan = $this->db->get_where('content', ['title' => 'layanan'])->result_array();
		$layanan_section = $this->db->get_where('content', ['title' => 'layanan-section'])->row_array();
		$kelebihan = $this->db->get_where('content', ['parent' => 'kelebihan'])->result_array();
		$kontak_list = $this->db->get_where('content', ['parent' => 'kontak-list'])->result_array();
		$tentang = $this->db->get_where('content', ['title' => 'tentang'])->row_array();
		$kontak_atas = $this->db->get_where('content', ['parent' => 'kontak'])->row_array();
		$nomor_wa = $this->db->get_where('content', ['title' => 'nomor-wa'])->row_array();
		$footer = $this->db->get_where('content', ['title' => 'footer'])->row_array();
		$social_media = $this->db->get_where('content', ['title' => 'social-media'])->result_array();

		$data = [
			'armada' => $armada,
			'banner' => $banner,
			'banner_description' => $banner_description,
			'layanan' => $layanan,
			'layanan_section' => $layanan_section,
			'kelebihan' => $kelebihan,
			'tentang' => $tentang,
			'kontak_atas' => $kontak_atas,
			'kontak_list' => $kontak_list,
			'nomor_wa' => $nomor_wa,
			'footer' => $footer,
			'social_media' => $social_media,
		];

		$this->load->view('home_templates/header', ['title' => 'Gemah transindo - '. $banner['text'], 'tentang' => $tentang]);
		$this->load->view('home/index', $data);
		$this->load->view('home_templates/footer', ['banner' => $banner]);
	}
}