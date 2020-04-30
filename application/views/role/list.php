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
        <h4 class="modal-title">Add role user</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('role/create'); ?>" method="post">
          <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Masukkan judul" required>
          </div>

          <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" placeholder="Masukkan deskripsi" required></textarea>
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

<?php echo $this->session->flashdata('message'); ?>

<?php
// set table
$table = [
  'title' => 'Data role user',
  'theme' => 'striped',
  'search' => false,
  'width' => 8
];
$this->load->view('templates/table_simple_open', ['table' => $table]);
?>

<thead>
  <tr>
    <th style="width: 10px">No</th>
    <th>Aksi</th>
    <th>Title</th>
    <th>Description</th>
  </tr>
</thead>

<tbody>
  <?php $no = 1; ?>
  <?php foreach($role as $key) : ?>

  <!-- modal edit -->
  <div class="modal fade" id="modal-edit-<?php echo $key['id']; ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Edit role user</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('role/update/'.$key['id']); ?>" method="post">
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" name="title" id="title" class="form-control" value="<?php echo $key['title']; ?>">
            </div>

            <div class="form-group">
              <label for="description">Description</label>
              <textarea name="description" id="description" class="form-control"><?php echo $key['description']; ?></textarea>
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
          <h4 class="modal-title">Hapus role?</h4>
        </div>
        <div class="modal-body">
          <p>Anda yakin mau menghapus role <?php echo $key['title']; ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <a href="<?php echo base_url('role/delete/'.$key['id']); ?>" class="btn btn-danger">Hapus</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

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
      <td><?php echo $key['title']; ?></td>
      <td><?php echo $key['description']; ?></td>
    </tr>
  <?php endforeach; ?>
</tbody>

<?php $this->load->view('templates/table_simple_close'); ?>