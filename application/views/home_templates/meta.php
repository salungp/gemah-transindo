<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?php echo $tentang['text']; ?>">
<meta name="keyword" content="Gemah trans,gemah transindo,gemah,trans,gemah trans,Gemah transindo,gemahtrans">

<!-- Link favico -->
<?php $favicon = $this->db->get_where('content', ['title' => 'favicon'])->row_array(); ?>
<link rel="shorcut icon" href="<?php echo base_url($favicon['image']); ?>">
<!-- Font Awesome -->
<link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css'); ?>">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/style.css'); ?>">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

<title><?php echo $title; ?></title>