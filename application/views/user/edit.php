<div class="row">
  <div class="col-md-8">
    <?php echo $this->session->flashdata('message'); ?>
    <div class="box">
      <div class="box-header with-border">
        <h2 class="box-title">Profile</h2>
      </div>
      <form action="<?php echo base_url('user/profile_update'); ?>" class="form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label for="username" class="col-sm-2">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="username" id="username" value="<?php echo $user['username']; ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="role" class="col-sm-2">Akses</label>
            <div class="col-sm-10">
              <select name="role" id="role" class="form-control">
                <option value="">-pilih-</option>
                <?php foreach($role as $k) : ?>
                <option <?php echo $user['role'] == $k['id'] ? 'selected' : ''; ?> value="<?php echo $k['id']; ?>"><?php echo $k['title']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="password" class="col-sm-2">Password baru?</label>
            <div class="col-sm-10">
              <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password">
            </div>
          </div>
          <div class="form-group">
            <label for="password_confirm" class="col-sm-2">Password baru?</label>
            <div class="col-sm-10">
              <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Konfirmasi password">
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