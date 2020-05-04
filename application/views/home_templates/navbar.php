<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">
      <img src="<?php echo base_url($logo['image']); ?>" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ml-auto">
        <a class="nav-item nav-link active" href="#home">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#armada">Armada Kami</a>
        <a class="nav-item nav-link" href="#layanan">Layanan</a>
        <a class="nav-item nav-link" href="#kontak">Kontak Kami</a>
        <a class="nav-item btn btn-round btn-success" href="https://api.whatsapp.com/send?phone=<?php echo $nomor_wa['text']; ?>&text=Halo%20Gemah%20Transindo%20Saya%20mau%20tanya..."><i class="fa fa-commenting"></i> Chat via wa</a>
        <a class="nav-item btn btn-round btn-primary" href="tel:+<?php echo $nomor_wa['text']; ?>"><i class="fa fa-phone"></i> Via telepon</a>
      </div>
    </div>
  </div>
</nav>