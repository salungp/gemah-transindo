<?php
$roles = $this->db->order_by('id', 'desc')->get('user_role')->result_array();
// set table
$table = [
  'title' => 'Data user',
  'theme' => 'striped',
  'search' => true,
  'width' => 8,
  'search_url' => base_url('user/search')
];
?>

<button style="margin-bottom: 20px;" type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-create">
  <i class="fa fa-plus"></i>
</button>

<!-- modal create -->
<div class="modal fade" id="modal-create">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah user</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('user/create'); ?>" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan username">
          </div>

          <div class="form-group">
            <label for="role">Akses</label>
            <select name="role" id="role" class="form-control">
              <option value="">-pilih-</option>
              <?php foreach($roles as $k) : ?>
                <option value="<?php echo $k['id']; ?>"><?php echo $k['title']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password">
          </div>

          <div class="form-group">
            <label for="password_confirm">Konfirmasi password</label>
            <input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Konfirmasi password">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<div class="row">
  <div class="col-md-<?php echo $table['width']; ?>">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
</div>

<?php $this->load->view('templates/table_simple_open', ['table' => $table]); ?>

<thead>
  <tr>
    <th style="width: 10px">No</th>
    <th>Aksi</th>
    <th>Username</th>
    <th>Akses</th>
    <th>Tanggal masuk</th>
  </tr>
</thead>

<tbody>
  <?php $no = 1; ?>
  <?php foreach($user as $key) : ?>

  <!-- modal edit -->
  <div class="modal fade" id="modal-edit-<?php echo $key['id']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit user</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('user/update/'.$key['id']); ?>" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control" value="<?php echo $key['username']; ?>">
            </div>

            <div class="form-group">
              <label for="role">Akses</label>
              <select name="role" id="role" class="form-control">
                <option value="">-pilih-</option>
                <?php foreach($roles as $k) : ?>
                  <option <?php echo $key['role'] == $k['id'] ? 'selected' : ''; ?> value="<?php echo $k['id']; ?>"><?php echo $k['title']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- modal hapus -->
  <div class="modal fade" id="modal-delete-<?php echo $key['id']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Hapus user?</h4>
        </div>
        <div class="modal-body">
          <p>Anda yakin mau menghapus user <?php echo $key['username']; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <a href="" class="btn btn-danger">Hapus</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <?php $role = $this->user->role($key['role']); ?>
    <tr>
      <td><?php echo $no++; ?>.</td>
      <td>
        <div class="btn-group">
          <!-- button edit -->
          <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal-edit-<?php echo $key['id']; ?>">
            <i class="fa fa-pencil"></i>
          </button>

          <!-- button delete -->
          <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modal-delete-<?php echo $key['id']; ?>">
            <i class="fa fa-trash"></i>
          </button>
        </div>
      </td>
      <td><?php echo $key['username']; ?></td>
      <td><span class="label label-<?php echo $role['theme']; ?>"><?php echo $role['title']; ?></span></td>
      <td><?php echo date('d-m-Y', strtotime($key['created_at'])); ?></td>
    </tr>
  <?php endforeach; ?>
</tbody>

<?php $this->load->view('templates/table_simple_close'); ?>