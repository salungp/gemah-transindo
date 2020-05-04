<?php
// set table
$table = [
  'title' => 'Data visitor',
  'theme' => 'striped',
  'search' => false,
  'width' => 12
];
?>

<div class="row">
  <div class="col-md-<?php echo $table['width']; ?>">
    <?php echo $this->session->flashdata('message'); ?>
  </div>
</div>

<?php $this->load->view('templates/table_simple_open', ['table' => $table]); ?>

<thead>
  <tr>
    <th style="width: 10px">No</th>
    <th>IP adress</th>
    <th>Browser</th>
    <th>Tanggal</th>
  </tr>
</thead>

<tbody>
  <?php $no = 1; ?>
  <?php foreach($visitor as $key) : ?>
    <tr>
      <td><?php echo $no++; ?>.</td>
      <td>
        <div class="btn-group">
          <!-- button delete -->
          <a href="<?php echo base_url('visitor/delete/'.$key['id']); ?>" class="btn btn-sm btn-danger">
            <i class="fa fa-trash"></i>
          </a>
        </div>
      </td>
      <td><?php echo $key['ip_address']; ?></td>
      <td><?php echo $key['browser']; ?></td>
      <td><?php echo date('d-m-Y', strtotime($key['created_at'])); ?></td>
    </tr>
  <?php endforeach; ?>
</tbody>

<?php $this->load->view('templates/table_simple_close'); ?>