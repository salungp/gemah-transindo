<div class="content-wrapper">
<section class="content-header">
  <h1>
    <b><?php echo $breadcrumb['title']; ?></b>
    <small><?php echo $breadcrumb['description']; ?></small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url(); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <?php foreach($breadcrumb['breadcrumbs'] as $bread) : ?>
    <li><a href="<?php echo $bread['link']; ?>"><?php echo $bread['title']; ?></a></li>
    <?php endforeach; ?>
    <li class="active"><?php echo $breadcrumb['active']; ?></li>
  </ol>
</section>
<!-- Main content -->
<section class="content container-fluid">