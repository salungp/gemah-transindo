<div class="row">
  <div class="col-md-8">
    <!-- get if exist alert message -->
    <?php echo $this->session->flashdata('message'); ?>
    <div class="box">
      <div class="box-header with-border">
        <h2 class="box-title">Setting</h2>
      </div>

      <form action="<?php echo base_url('setting/update/'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
            <label for="logo" class="col-sm-2">Logo</label>

            <div class="col-sm-10">
              <div class="image-upload-wrapper" style="background: url(<?php echo base_url($setting['logo']['image']); ?>) center center no-repeat !important;background-size: cover !important;"> 
                <label for="image-upload"><i class="fa fa-pencil"></i></label>
                <input type="file" name="logo" onchange="previewImage()" id="image-upload" placeholder="Password">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="site-title" class="col-sm-2">Site title</label>

            <div class="col-sm-10">
              <input type="text" name="title" id="site-title" class="form-control" value="<?php echo $setting['banner']['text']; ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="description" class="col-sm-2">Site description</label>

            <div class="col-sm-10">
              <textarea name="description" id="description" class="form-control"><?php echo $setting['about']['text']; ?></textarea>
            </div>
          </div>

          <div class="form-group">
            <label for="" class="col-sm-2"></label>

            <div class="col-sm-10">
              <button class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>