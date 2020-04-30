<?php $logo = $this->db->get_where('content', ['title' => 'logo'])->row_array(); ?>
<?php $nomor_wa = $this->db->get_where('content', ['title' => 'nomor-wa'])->row_array(); ?>
<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('home_templates/meta', ['tentang' => $tentang]); ?>
</head>
<body>
	<?php $this->load->view('home_templates/navbar', ['logo' => $logo, 'nomor_wa' => $nomor_wa]); ?>